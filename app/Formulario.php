<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $fillable =[ 
    	'nome',
    	'email',
    	'descricao',
    	'upload'
    ];
 
  	protected $guarded=[
    	'id'
	];
}
