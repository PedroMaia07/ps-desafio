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
        $categoriaSelect = Categoria::where('categoria', $request['categorias'])->first();
        $produtos =[];
        if (isset($categoriaSelect))
            $produtos = Produto::where('categoria_id', $categoriaSelect->id)->get();
        else
            $produtos = Produto::all();

        $categorias = Categoria::all();
        
        return view('site.index', compact('produtos', 'categorias','categoriaSelect'));
    }

    public function comprar(Request $request, $id)
    {
    $produto = Produto::find($id);
    $quantidade = $request->quantidade;
    
    if ($produto->quantidade >= $quantidade) {
        $produto->quantidade -= $quantidade;
        $produto->save();
        return redirect()->back()->with('success', 'Produto comprado com sucesso!');
    } else {
        return redirect()->back()->with('error', 'Produto não encontrado.');
    }
    }

    public function buscar(Request $request)     
    {         
        $produtos = Produto::where('nome', 'LIKE', "%{$request['search']}%")->get();         
        $categorias = Categoria::all();         
        return view('site.index', compact('produtos', 'categorias'));     
    }


}
