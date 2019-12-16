<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(Request $req){

    	$contatos = [
    		["nome" => "Maria", "tel" => "123456789"],
    		["nome" => "Pedro", "tel" => "789456189"],
    	];

		return view("contato.index", compact('contatos')); 
    }

    public function criar(Request $req){
    	dd($req->all());
    	return "Este é o criar do Controller contatoController";     	
    }

    public function editar(){
    	return "Este é o editar do Controller contatoController";     	
    }
}
