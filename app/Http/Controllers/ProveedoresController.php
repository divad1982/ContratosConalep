<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Proveedor = Proveedor::paginate(10);
        return inertia('Proveedores/Index', ['Proveedor' => $Proveedor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Proveedor = new Proveedor;
        return inertia('Proveedores/Agregar', ['Proveedor' => $Proveedor]);
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
