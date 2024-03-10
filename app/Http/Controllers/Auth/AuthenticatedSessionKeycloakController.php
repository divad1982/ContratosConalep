<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CatalogoPermiso;
use App\Models\CatalogoPerfil;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Config;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;

use function Laravel\Prompts\select;

class AuthenticatedSessionKeycloakController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::with('keycloak')->redirect();
    }

    public function handleProviderCallback(Request $request)
    {      
        try {
            $user = Socialite::with('keycloak')->user();
            $user_validate = User::where('email', $user->email)->select('id', 'IdPerfil')->first();
            
            if ( $user_validate->get()->isEmpty() ) {
                abort(503, 'Usuario no encontrado o inactivo: ' . $user->email);
            }else{
                $id_val = $user_validate->id;
                $us_per = $user_validate->Id_perfil;
                $ser_val = $user->id;
                $gran_val = 'authorization_code';
                $acc_val = 'Bearer '.$user->token;
                $ref_val = $user->refreshToken;
                $exp_val = Carbon::now()->addSeconds($user->expiresIn)->toDateTimeString();

                $actualizacion = User::findOrFail($id_val);
                $actualizacion->service_id = $ser_val;
                $actualizacion->grant_type = $gran_val;
                $actualizacion->access_token = $acc_val;
                $actualizacion->refresh_token = $ref_val;
                $actualizacion->token_expires_at = Carbon::now()->addSeconds($exp_val);
                if($actualizacion->update()){
                    Auth::loginUsingId($id_val);
                    $us_email = auth()->user()->email;
                    $user_validate = User::where('email', $us_email)->select('id', 'IdPerfil')->first();
                    if ( $user_validate->get()->isEmpty() ) {
                        abort(503, 'Usuario no encontrado o inactivo: ' . $us_email);
                    }else{
                        $us_per = $user_validate->IdPerfil;
                        $menu1 = CatalogoPermiso::join('catalogomenu', 'catalogomenu.IdMenu', '=', 'catalogopermisos.IdMenu' )
                        ->join('catalogotipos', 'catalogotipos.IdTipo', '=', 'catalogomenu.IdTipo')
                        ->join('catalogooperaciones', 'catalogooperaciones.IdOperacion', '=', 'catalogomenu.IdOperacion')
                        ->where('catalogopermisos.IdPerfil', $us_per)
                        ->orderBy('catalogomenu.IdMenu', 'asc')
                        ->select('catalogotipos.DescripcionTipo As Tipo', 'catalogomenu.IdMenu As Principal', 'catalogomenu.Dependencia As Dependencia', 'catalogomenu.TextoOpcion As Opcion', 'catalogomenu.Icono As Icono', 'catalogomenu.Ubicacion As Ubicacion', 'catalogooperaciones.Operacion As Operacion')
                        ->get();
                        $menu = '';

                        if ( empty($menu1) ) {
                            dd($menu1);
                        } else {
                            foreach ($menu1 as $Renglon1) {
                                if($Renglon1->Tipo === 'BI'){
                                    $menu = $menu . '
<li class="hover:text-white">
    <a href="'. $Renglon1->Operacion .'" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold hover:hover svg">' . $Renglon1->Icono . '</a>
</li>';
                                }
                            }
                            $PasadaMenu = 0;
                            $i = 0;
                            foreach ($menu1 as $Renglon2) {
                                if($Renglon2->Tipo === 'MP'){
                                    if($PasadaMenu === 0){
                                        $menu = $menu . '
<li class="hoverable">
    <a href="#" class="text-decoration-none relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold hover:text-white">Menús</a>
    <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl" style="background-color: rgb(179, 142, 93);">
        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">';
                                        $PasadaMenu = 1;
                                    }
                                    if($i < 4){
                                        $i = $i + 1;
                                    }else{
                                        $i = 1;
                                        $menu = $menu . '
        </div>
        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">';
                                    }
                                    $dep = $Renglon2->Principal;
                                    $menu = $menu . '
            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-r-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                <div class="flex items-center">
                    '. $Renglon2->Icono .'
                    <h3 class="font-bold text-xl text-white text-bold mb-2">&nbsp;&nbsp;' . $Renglon2->Opcion .'</h3>
                </div>';
                                    $pasSm = 0;
                                    foreach ($menu1 as $Renglon3) {
                                        if(($Renglon3->Tipo === 'MS')&&($dep === $Renglon3->Dependencia)){
                                            $menu = $menu . '
                <li>
                    <div class="flex items-center">
                        <a type="button" href="'. $Renglon3->Operacion .'" class="text-white bold" style="hover">
                            <div class="flex justify-content: center;">
                                <span>&nbsp;&nbsp;</span>
                                <span class="font-bold text-xl text-white text-bold mb-2">' . $Renglon3->Icono . '</span>
                                <span>&nbsp;&nbsp;</span>
                                <span>' . $Renglon3->Opcion . '</span>
                            </div>
                        </a>
                    </div>
                </li>';
                                        }
                                    }
                                    $menu = $menu . '
            </ul>';
                                }
                            }
                            if($PasadaMenu === 1){
                                $menu = $menu . '
        </div>
    </div>
</li>';
                            }
                            foreach ($menu1 as $Renglon1) {
                                if($Renglon1->Tipo === 'BF'){
                                    $menu = $menu. '
<li class="hover:text-white">
    <a  href="'. $Renglon1->Operacion .'" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold hover:hover svg">' . $Renglon1->Icono . $Renglon1->Opcion .'</a>
</li>';
                                }
                            }
                            $PasadaCatalogos = 0;
                            $i = 0;
                            foreach ($menu1 as $Renglon2) {
                                if($Renglon2->Tipo === 'CP'){
                                    if($PasadaCatalogos === 0){
                                        $menu = $menu . '
<li class="hoverable hover:text-white">
    <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold hover:text-white">Catálogos</a>
    <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl" style="background-color: rgb(179, 142, 93);">
        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">';
                                        $PasadaCatalogos = 1;
                                    }
                                    if($i < 4){
                                        $i = $i + 1;
                                    }else{
                                        $i = 1;
                                        $menu = $menu . '
        </div>
        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">';
                                    }
                                    // poner codigo para bajar renglon 
                                    $dep = $Renglon2->Principal;
                                    $menu = $menu . '
            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                <div class="flex items-center">
                    '. $Renglon2->Icono .'
                    <h3 class="font-bold text-xl text-white text-bold mb-2">&nbsp;&nbsp;' . $Renglon2->Opcion .'</h3>
                </div>';
                                    $pasSm = 0;
                                    foreach ($menu1 as $Renglon3) {
                                        if(($Renglon3->Tipo === 'CS')&&($dep === $Renglon3->Dependencia)){
                                            $menu = $menu . '
                <li>
                    <div class="flex items-center">
                      <a type="button" href="'. $Renglon3->Operacion .'" class="text-white bold" style="hover">
                        <div class="flex justify-content: center;">
                          <span>&nbsp;&nbsp;</span>
                          <span class="font-bold text-xl text-white text-bold mb-2">' . $Renglon3->Icono . '</span>
                          <span>&nbsp;&nbsp;</span>
                          <span>' . $Renglon3->Opcion . '</span>
                        </div>
                      </a>
                    </div>
                </li>';
                                        }
                                    }
                                    $menu = $menu . '
            </ul>';
                                }
                            }
                            if($PasadaMenu === 1){
                                $menu = $menu . '
        </div>
    </div>
</li>';
                            }
                            foreach ($menu1 as $Renglon1) {
                                if($Renglon1->Tipo === 'BS'){
                                    $menu = $menu. '
<li class="hover:text-white">
    <a href="'. $Renglon1->Operacion .'" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold hover:hover svg">' . $Renglon1->Icono .'</a>
</li>';
                                }
                            }
                        }
                    }
                    
                    $menup = '';

                    if ( empty($menu1) ) {
                        dd($menu1);
                    } else {
                        foreach ($menu1 as $Renglon1) {
                            if($Renglon1->Tipo === 'BI'){
                                $menup = $menup . '
<li class="hover:text-white">
    <a  href="'. $Renglon1->Operacion .'" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold hover:hover svg">' . $Renglon1->Icono . '</a>
</li>';
                            }
                        }
                        $PasadaMenu = 0;
                        $i = 0;
                        foreach ($menu1 as $Renglon2) {
                            if($Renglon2->Tipo === 'MP'){
                                if($PasadaMenu === 0){
                                    $menup = $menup . '
<li class="hoverable">
    <a href="#" class="text-decoration-none relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold hover:text-white">Menús</a>
    <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl" style="background-color: rgb(179, 142, 93);">
        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">';
                                    $PasadaMenu = 1;
                                }else{
                                    $menup = $menup . '
            <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">';
                                }
                                $dep = $Renglon2->Principal;
                                $menup = $menup . '
                <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-r-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                        '. $Renglon2->Icono .'
                        <h3 class="font-bold text-xl text-white text-bold mb-2">&nbsp;&nbsp;' . $Renglon2->Opcion .'</h3>
                    </div>';
                                $pasSm = 0;
                                foreach ($menu1 as $Renglon3) {
                                    if(($Renglon3->Tipo === 'MS')&&($dep === $Renglon3->Dependencia)){
                                        $menup = $menup . '
                    <li>
                        <div class="flex items-center">
                            <a type="button" href="'. $Renglon3->Operacion .'" class="text-white bold" style="hover">
                                <div class="flex justify-content: center;">
                                    <span>&nbsp;&nbsp;</span>
                                    <span class="font-bold text-xl text-white text-bold mb-2">' . $Renglon3->Icono . '</span>
                                    <span>&nbsp;&nbsp;</span>
                                    <span>' . $Renglon3->Opcion . '</span>
                                </div>
                            </a>
                        </div>
                    </li>';
                                    }
                                }
                                $menup = $menup . '
                </ul>
            </div>';
                            }
                        }
                        if($PasadaMenu === 1){
                            $menup = $menup . '
        </div>
    </div>
</li>';
                        }
                        
                        
                        foreach ($menu1 as $Renglon1) {
                            if($Renglon1->Tipo === 'BF'){
                                $menup = $menup. '
<li class="hover:text-white">
    <a href="'. $Renglon1->Operacion .'" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold hover:hover svg">' . $Renglon1->Icono . $Renglon1->Opcion .'</a>
</li>';
                            }
                        }
                        $PasadaCatalogos = 0;
                        $i = 0;
                        foreach ($menu1 as $Renglon2) {
                            if($Renglon2->Tipo === 'CP'){
                                if($PasadaCatalogos === 0){
                                    $menup = $menup . '
<li class="hoverable hover:text-white">
    <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold hover:text-white">Catálogos</a>
    <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl" style="background-color: rgb(179, 142, 93);">
        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">';
                                    $PasadaCatalogos = 1;
                                }else{
                                    $menup = $menup . '
            <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">';
                                }
                                $dep = $Renglon2->Principal;
                                $menup = $menup . '
                <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                        '. $Renglon2->Icono .'
                        <h3 class="font-bold text-xl text-white text-bold mb-2">&nbsp;&nbsp;' . $Renglon2->Opcion .'</h3>
                    </div>';
                                $pasSm = 0;
                                foreach ($menu1 as $Renglon3) {
                                    if(($Renglon3->Tipo === 'CS')&&($dep === $Renglon3->Dependencia)){
                                        $menup = $menup . '
                    <li>
                        <div class="flex items-center">
                            <a type="button" href="'. $Renglon3->Operacion .'" class="text-white bold" style="hover">
                                <div class="flex justify-content: center;">
                                    <span>&nbsp;&nbsp;</span>
                                    <span class="font-bold text-xl text-white text-bold mb-2">' . $Renglon3->Icono . '</span>
                                    <span>&nbsp;&nbsp;</span>
                                    <span>' . $Renglon3->Opcion . '</span>
                                </div>
                            </a>
                        </div>
                    </li>';
                                    }
                                }
                                $menup = $menup . '
                </ul>
            </div>';
                            }
                        }
                        if($PasadaMenu === 1){
                            $menup = $menup . '
        </div>
    </div>
</li>';
                        }
                        foreach ($menu1 as $Renglon1) {
                            if($Renglon1->Tipo === 'BS'){
                                $menup = $menup. '
<li class="hover:text-white">
    <a href="'. $Renglon1->Operacion .'" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold hover:hover svg">' . $Renglon1->Icono .'</a>
</li>';
                            }
                        }
                    }
                    $conPerfil = CatalogoPerfil::where('IdPerfil', $us_per)->select('DescripcionPerfil')->first();
                    Session::put('tipoPerfil', $conPerfil->DescripcionPerfil);
                    Session::put('menu', $menu);
                    Session::put('menup', $menup);
                    return redirect()->intended(RouteServiceProvider::HOME);
                }else{
                    abort(503, 'Error al actualizar el token: ' . $user->email);
                }
            }


            $request->session()->regenerate();
        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
    
        // The user will not be redirected back.
        return redirect(Socialite::driver('keycloak')->getLogoutUrl());
        
        // The URL the user is redirected to after logout.
        $redirectUri = Config::get('app.url');
        
        // Keycloak v18+ does support a post_logout_redirect_uri in combination with a
        // client_id or an id_token_hint parameter or both of them.
        // NOTE: You will need to set valid post logout redirect URI in Keycloak.
        return redirect(Socialite::driver('keycloak')->getLogoutUrl($redirectUri, env('KEYCLOAK_CLIENT_ID')));
        return redirect(Socialite::driver('keycloak')->getLogoutUrl($redirectUri, null, 'YOUR_ID_TOKEN_HINT'));
        return redirect(Socialite::driver('keycloak')->getLogoutUrl($redirectUri, env('KEYCLOAK_CLIENT_ID'), 'YOUR_ID_TOKEN_HINT'));
        
        // You may add additional allowed parameters as listed in
        // https://openid.net/specs/openid-connect-rpinitiated-1_0.html
        return redirect(Socialite::driver('keycloak')->getLogoutUrl($redirectUri, CLIENT_ID, null, ['state' => '...'], ['ui_locales' => 'de-DE']));
        
        // Keycloak before v18 does support a redirect URL
        // to redirect back to Keycloak.

        return redirect('/');
    }
}
