<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Imovel extends Model
{
    protected $fillable = [
    	'codigo',
    	'tipo',
    	'pretensao',
    	'titulo',
    	'detalhes',
    	'quartos',
    	'valor',
    ];

    public function interessados(){

    	return $this->hasMany(Interessado::class);
    }

    public function consultaImovel(Array $data)
    {
        $pesquisas =  $this->where(function($query) use ($data){
            if (isset($data['codigo']))
                $query->where('codigo', $data['codigo']);
            if (isset($data['tipo']))
                $query->where('tipo', $data['tipo']);
            if (isset($data['pretensao']))
                $query->where('pretensao', $data['pretensao']);
            if (isset($data['titulo']))
                $query->where('titulo', $data['titulo']);
            if (isset($data['detalhes']))
                $query->where('detalhes', $data['detalhes']);
            if (isset($data['quartos']))
                $query->where('quartos', $data['quartos']);
            if(isset($data['v1']))
                $query->where('valor', '>=', $data['v1']);
            if(isset($data['v2']))
                $query->where('valor', '<=', $data['v2']);
        })
        ->paginate(10);
        //->toSql();dd($pesquisas);
        return $pesquisas;
    }
}
