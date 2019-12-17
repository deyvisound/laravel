@extends('layout.site')

@section('titulo', 'Contatos')


@section('conteudo')
	
	<h3>Esta é a view contato/index</h3>

	@foreach($contatos as $contato)
		<p>{{ $contato->nome }} : {{ $contato->tel }}</p>
	@endforeach

@endsection
