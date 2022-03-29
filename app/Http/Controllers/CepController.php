<?php

namespace App\Http\Controllers;

use App\Models\Cep;
use App\Http\Requests\StoreCepRequest;
use App\Http\Requests\UpdateCepRequest;

class CepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCepRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCepRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cep  $cep
     * @return \Illuminate\Http\Response
     */
    public function show(Cep $cep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cep  $cep
     * @return \Illuminate\Http\Response
     */
    public function edit(Cep $cep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCepRequest  $request
     * @param  \App\Models\Cep  $cep
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCepRequest $request, Cep $cep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cep  $cep
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cep $cep)
    {
        //
    }
}
