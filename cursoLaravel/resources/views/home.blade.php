@extends('layout.site')

@section('titulo', 'Cursos')


@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Cursos</h3>     
          <div class="row">

            @foreach($registros as $registro)
                <div class="col s12 m4">
                  <div class="card">
                    <div class="card-image">
                      <img src="{{ asset($registro->imagem)}}" alt="{{ $registro->titulo }}">
                      <span class="card-title">{{ $registro->titulo }}</span>
                    </div>
                    <div class="card-content">
                      <p>{{ $registro->descricao }}</p>
                    </div>
                    <div class="card-action">
                      <a href="#">This is a link</a>
                    </div>
                  </div>
                </div>
            @endforeach
          </div>
    </div>

@endsection
