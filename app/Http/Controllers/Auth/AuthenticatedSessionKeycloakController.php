<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Config;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

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
            $user_validate = User::where('email', $user->email)->select('id')->first();
            if ( $user_validate->get()->isEmpty() ) {
                abort(503, 'Usuario no encontrado o inactivo: ' . $user->email);
            }else{
                $id_val = $user_validate->id;
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
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $redirectUri = Config::get('app.url');
        return redirect('/');
    }
}
