<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>
	<!-- Incluíndo nossos CSS's-->
	@include('layout._includes.css')
</head>
<body>
	<header>
	  <nav>
	    <div class="nav-wrapper deep-orange">
	      <a href="#!" class="brand-logo">Curso de Laravel</a>
	      <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	      <ul class="right hide-on-med-and-down">
	        <li><a href="/">Home</a></li>
	        <li><a href="{{ route('admin.cursos') }}">Cursos</a></li>
	      </ul>
	    </div>
	  </nav>

	  <ul class="sidenav" id="mobile">
	    <li><a href="/">Home</a></li>
	    <li><a href="{{ route('admin.cursos') }}">Cursos</a></li>
	  </ul>
	</header>

@yield('conteudo')

<!-- Incluíndo nossos javascripts-->
@include('layout._includes.javascript')

</body>
</html>