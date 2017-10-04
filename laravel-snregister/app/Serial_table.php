<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serial_table extends Model
{
    //
	function last(){
		
		return $self->orderBy('id', 'desc')->take(30)->get();
	}
}
