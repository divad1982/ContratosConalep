<?php

namespace App\Http\Controllers;

use App\Models\CatalogoEstados;
use Illuminate\Http\Request;
use Inertia\Response;

class CatalogoEstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estados = CatalogoEstados::paginate(10);
        return inertia('Estados/Index', ['estados' => $estados]);
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
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estado = CatalogoEstados::where('IdEstado', '=', $id)->get();
        return inertia('Estados/Edicion', ['estado' => $estado]);
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
