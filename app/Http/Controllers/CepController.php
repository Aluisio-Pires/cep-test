<?php

namespace App\Http\Controllers;

use App\Models\Cep;
use App\Http\Requests\StoreCepRequest;
use App\Http\Requests\UpdateCepRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Type\Integer;

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
     * @return JsonResponse
     */
    public function show($num)
    {
        if($num<10000000 || $num>99999999){
            return response()->json(['erro'=>'CEP inválido, precisa conter pelo menos 8 caracteres.'], 400);
        }
        $cep = Cep::where('cep',$num)->first();
        if (!$cep){
            $response = Http::get("https://viacep.com.br/ws/$num/json/")->json();
            if (in_array('erro',$response)){
                return response()->json(['erro'=>"CEP inválido!"], 400);
            }

            $cep = new Cep([
                'cep' => preg_replace('/[^0-9]/', '', $response['cep']),
                'localidade'=> $response['localidade'],
                'uf'=> $response['uf'],
                'ibge'=> $response['ibge'],
                'ddd'=> $response['ddd'],
                'siafi'=> $response['siafi'],
            ]);
            $cep->save();
        }
        return response()->json($cep, 201);
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
