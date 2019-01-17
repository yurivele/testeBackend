<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interessado;

class InteressadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interessados = Interessado::all();
        return response()->json($interessados);
    }

    public function findInteressado(Request $request, Interessado $pesquisa){ 
        
        $dataConsulta = $request->all();

        $pesquisas = $pesquisa->consultaInteressado($dataConsulta);
        
        return response()->json($pesquisas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        Imovel::create();
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Interessado::create($request->all());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $interessado = Interessado::find($id);
        return response()->json($interessado);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $interessado = Interessado::find($id);
        $interessado->update($request->all());
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $interessado = Interessado::find($id);
        $interessado->delete();

    }
}