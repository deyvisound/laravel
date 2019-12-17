<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;


class ContatoController extends Controller
{
    public function index(Request $req){

    	$contatoModel = new Contato();

    	$contatos = [
    		$contatoModel->lista()
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
