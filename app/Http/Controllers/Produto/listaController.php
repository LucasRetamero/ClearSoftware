<?php

namespace App\Http\Controllers\Produto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class listaController extends Controller
{
    public function __construct(){
		
	}
	
	public function procuraPolitico(){
	return view('produtos.lista.procuraPolitico');	
	}
}
