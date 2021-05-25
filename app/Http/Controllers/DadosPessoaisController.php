<?php

namespace App\Http\Controllers;

use App\Models\DadosPesoais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DadosPessoaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dadosPessoais = DB::table('tb_dados_pessoais')->get();


        return view('welcome',compact('dadosPessoais'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DadosPesoais  $dadosPesoais
     * @return \Illuminate\Http\Response
     */
    public function show(DadosPesoais $dadosPesoais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DadosPesoais  $dadosPesoais
     * @return \Illuminate\Http\Response
     */
    public function edit(DadosPesoais $dadosPesoais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DadosPesoais  $dadosPesoais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DadosPesoais $dadosPesoais)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DadosPesoais  $dadosPesoais
     * @return \Illuminate\Http\Response
     */
    public function destroy(DadosPesoais $dadosPesoais)
    {
        //
    }
}
