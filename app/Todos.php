<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
	public    $table    = 'todos';
	protected $fillable = [
		'title' ,
		'completed'
	];
}
