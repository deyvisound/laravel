<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
	public function lista(){
		return (object) [
			"nome" => "Deyvison Estevam",
			"tel"=> "845698789"
		];
	}
}
