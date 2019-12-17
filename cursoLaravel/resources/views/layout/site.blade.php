<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>
</head>
<body>

@yield('conteudo')

<!-- Incluíndo nossos javascripts-->
@include('layout._includes.javascript')

</body>
</html>