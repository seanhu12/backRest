<?php

namespace App\Http\Controllers;

use App\Models\Boleta;
use App\Http\Requests\StoreBoletaRequest;
use App\Http\Requests\UpdateBoletaRequest;

class BoletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Boleta::orderBy('id')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBoletaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBoletaRequest $request)
    {
        return Boleta::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function show(Boleta $boleta)
    {
        return  $boleta;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function edit(Boleta $boleta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBoletaRequest  $request
     * @param  \App\Models\Boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBoletaRequest $request, Boleta $boleta)
    {
        $boleta->update($request->all());
        return $boleta;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boleta $boleta)
    {
        $boleta->delete();
        return 'borrado con exito';
    }
}
