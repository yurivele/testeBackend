<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interessado extends Model
{
	protected $fillable = [
		'nome',
		'email',
	];

	//private $table = 'interessados';

	public function imoveis(){

    	return $this->belongsToMany(Imovel::class);
    }
    
    public function consultaInteressado(Array $data)
    {
        $pesquisas = $this->where(function($query) use ($data){
            if (isset($data['nome']))
                $query->where('nome', $data['nome']);
            if (isset($data['email']))
                $query->where('email', $data['email']);
            
        });
	        if(isset($data['imovel_id']))
           		$pesquisas = Interessado::whereHas('Imoveis', function($query) use ($data){
           		$query->where('imovel_id', $data['imovel_id']);	
           		})
    	->paginate(10);

        return $pesquisas;
    }
}
