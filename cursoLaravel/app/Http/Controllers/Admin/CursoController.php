<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    
    public function index(){

    	$registros = Curso::all();

    	return view('admin.cursos.index', compact('registros'));
    	
    }

    public function adicionar(){
    	return view('admin.cursos.adicionar');
    }

    public function salvar(Request $req){
    	$dados = $req->all();

    	if(isset($dados['publicado']))
    		$dados['publicado'] = 'sim';
    	else
    		$dados['publicado'] = 'não';
    	
    	//UPLOAD de img
    	if($req->hasFile('imagem')){

    		$img = $req->file('imagem');
			$dir = "img/cursos/";
			$ex = $img->guessClientExtension();

			$nomeImagem = "img_".time().".".$ex;    		

			$img->move($dir, $nomeImagem);

			$dados["imagem"] = $dir."/".$nomeImagem;
    	}

    	Curso::create($dados);

    	return redirect()->route('admin.cursos');
    }


    public function editar($id){

    	$registro = Curso::find($id);

    	return view('admin.cursos.editar', compact('registro'));
    }


    public function atualizar(Request $req, $id){
    	$dados = $req->all();

    	if(isset($dados['publicado']))
    		$dados['publicado'] = 'sim';
    	else
    		$dados['publicado'] = 'não';
    	
    	//UPLOAD de img
    	if($req->hasFile('imagem')){

    		$img = $req->file('imagem');
			$dir = "img/cursos/";
			$ex = $img->guessClientExtension();

			$nomeImagem = "img_".time().".".$ex;    		

			$img->move($dir, $nomeImagem);

			$dados["imagem"] = $dir."/".$nomeImagem;
    	}	

    	Curso::find($id)->update($dados);

    	return redirect()->route('admin.cursos');
    }

    public function deletar($id){
    	Curso::find($id)->delete();

    	return redirect()->route('admin.cursos');
    }
}
