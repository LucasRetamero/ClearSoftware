<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<!-- head -->
@include('head.index')
</head>
<body>
<!-- nav -->
@include('nav.index')
<!-- section -->
<div class="container">
@yield('conteudo')
</div>
<!-- footer -->
@include('footer.index')
</bodY>
</html>