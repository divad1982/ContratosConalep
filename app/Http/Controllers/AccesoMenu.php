<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use App\Http\Controllers\Auth;
use App\Models\User;
use App\Models\menu;
use App\Models\perfil;
use Laravel\Socialite\Facades\Socialite;
use App\Models\operaciones;
use App\Models\permisos;
use App\Models\tipos;
use PharIo\Manifest\Email;

class AccesoMenu extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $us_email = auth()->user()->email;
        $user_validate = User::where('email', $us_email)->select('id', 'Id_perfil')->first();
        if ( $user_validate->get()->isEmpty() ) {
            abort(503, 'Usuario no encontrado o inactivo: ' . $us_email);
        }else{
            $us_per = $user_validate->Id_perfil;
            return inertia('Menu', ['menu' => session('menu'), 'tipoPerfil' => session('tipoPerfil')]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
