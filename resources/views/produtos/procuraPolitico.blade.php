@extends('produtos.template')
@section('conteudo')
<br>
<!-- Portfolio Grid Section -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Projeto: Procura Politico</h2><br>
	  <h4 class="text-center text-uppercase text-secondary mb-0">Sobre o projeto</h4><br>
	   <div class="text-center">
              <p class="description"><b>O projeto foi criado para informar aos usuarios,tudo sobre os
			                         já eleitos e ainda candidato.Projeto é responsivo,informativo e com um
									 painel administrativo de facil uso,que não requer nenhum conhecimento
									 technico.<font color="red">(Projeto disponivel para venda)</font></b></p>
         
          </div>
	  <h4 class="text-center text-uppercase text-secondary mb-0">Preview do projeto</h4><br>
       <div class="text-center">
  <img class="img-fluid" alt="Responsive image" src="{{ URL::asset('img/projetos/procuraPolitico/inicio pt 1.png') }}" class="rounded" alt="...">
  <hr>
  <img class="img-fluid" alt="Responsive image" src="{{ URL::asset('img/projetos/procuraPolitico/inicio pt 2.png') }}" class="rounded" alt="...">
  <hr>
  <img class="img-fluid" alt="Responsive image" src="{{ URL::asset('img/projetos/procuraPolitico/inicio pt 3.png') }}" class="rounded" alt="...">
  <hr>
  <img class="img-fluid" alt="Responsive image" src="{{ URL::asset('img/projetos/procuraPolitico/inicio pt 4.png') }}" class="rounded" alt="...">
  <hr>
  <img class="img-fluid" alt="Responsive image" src="{{ URL::asset('img/projetos/procuraPolitico/inicio pt 5.png') }}" class="rounded" alt="...">
  <hr>
  <img class="img-fluid" alt="Responsive image" src="{{ URL::asset('img/projetos/procuraPolitico/inicio pt 6.png') }}" class="rounded" alt="...">
      </div>
	  </div>
    </div>
  </section>
  
@endsection