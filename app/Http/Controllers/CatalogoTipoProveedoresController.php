<?php

namespace App\Http\Controllers;

use App\Models\CatalogoTipoProovedor;
use Illuminate\Http\Request;

class CatalogoTipoProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $TiposProveedor = CatalogoTipoProovedor::paginate(10);
        return inertia('TiposProveedor/Index', ['TiposProveedor' => $TiposProveedor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $TiposProveedor = new CatalogoTipoProovedor;
        return inertia('TiposProveedor/Agregar', ['TiposProveedor' => $TiposProveedor]);
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
        $TiposProveedor = CatalogoTipoProovedor::where('IdTipoProveedor', '=', $id)->get();
        return inertia('TiposProveedor/Edicion', ['TiposProveedor' => $TiposProveedor]);
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
