<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imovel;
use App\Interessado;
use App\Imovel_Interessado;

class Imovel_InteressadoController extends Controller
{
    public function index(){

    	$imoveis_interessados = Imovel::with('Interessados')->get();
    	return response()->json($imoveis_interessados);
    	/*$interessados = $imovel_interessado->interessados;
    	foreach ($interessados as $interessado) {
    		
    		return $interessado;

    	}*/
    }

    public function show($id){

    	$imovel_interessado = Imovel_Interessado::find($id);
    	return response()->json($imovel_interessado);
    	
    	
    	//response()->json(Imovel::with('Interessados')->get());
    	/*$interessados = $imovel_id->interessados;
    	foreach ($interessados as $interessado) {

    		return $interessado;

    	}*/
    }

    public function showInteressado($interessado_id){

    	$interessado = Interessado::find($interessado_id);
    	return response()->json($interessado);
    	
    }

    public function store(Request $request){

    	Imovel_Interessado::create($request->get());

    	return response()->json('Interesse concluido');
    }

    public function delete($id){

    	$imovel_interessado = Imovel_Interessado::find($id);

    	$imovel_interessado->delte();

    	return response()->json('Interesse excluido com sucesso.');
    }
}

