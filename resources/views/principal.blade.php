<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
	<!-- head -->
    @include('head.index')
    </head>
    <body>
	<!-- nav -->
	@include('nav.index')
    <!-- header -->
	@include('header.index')
    <!-- Section -->
	@include('section.sobre')
	@include('section.produtos')
	<!-- Contact -->
	@include('contato.index')
    <!-- Footer -->
	@include('footer.index')
    </body>
</html>
