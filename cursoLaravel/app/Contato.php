<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
	public function lista(){
		return (object) [
			"nome" => "Deyvison Estevam",
			"telefone"=> "845698789",
			"email" => "deyvison@email.com"
		];
	}
}
