<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        $produtos = Produto::all();
        $categorias = Categoria::all();
        return view('site.index', compact('produtos', 'categorias'));
    }

    public function produtoFind(Request $request){
        $produtos =  Produto::where('nome', 'LIKE', "%{$request['search']}%")->get();
        $categorias = Categoria::all();
        return view('site.index', compact('produtos', 'categorias'));
    }

    public function produtoFilter(Request $request){
        $categoriaSelect = Categoria::where('categoria', $request['categoria'])->first();
        $produtos =[];
        if (isset($categoriaSelect))
            $produtos = Produto::where('categoria_id', $categoriaSelect->id)->get();
        else
            $produtos = Produto::all();
        $categorias = Categoria::all();
        return view('site.index', compact('produtos', 'categorias','categoriaSelect'));
    }
}
