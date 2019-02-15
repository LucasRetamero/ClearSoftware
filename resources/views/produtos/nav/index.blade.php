<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
   <a class="navbar-brand" href="#">
    <img src="{{ URL::asset('img/iconeLogo.jpg') }}" width="30" height="30" class="d-inline-block align-top" alt="">
    ClearSoftware
  </a>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
        </li>
		<li class="nav-item active">
          <a class="nav-link" href="{{ url('/#portfolio') }}">Produtos</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#conteudo">Info do projeto</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/#contact') }}">Orçamento</a>
        </li>
      </ul>
    </div>
</nav>


