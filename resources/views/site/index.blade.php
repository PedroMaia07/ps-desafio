@extends('layouts.site.site')

@section('titulo')
  RaioAsessórios
@endsection

@section('conteudo')

<section class="produtos-container">
  <div class="produtos-content">
    <div class="title-produtos">
      <h1>Produtos</h1>
      <form class="select" action="{{ route('produtoFilter') }}">
        <div class="select-container">
          <label for="categorias">Filtrar por Categoria</label>
          <select name="categorias" id="categorias">
            <option class="selecione" value="defalt">Selecione a categoria do produto</option>
            <option value="">Mostrar todas</option>
            @foreach ($categorias as $categoria)
              <option value="{{$categoria['categoria']}}">
                {{$categoria['categoria']}} </option>
            @endforeach
          </select>
          <input type="submit" value="Filtrar">
        </div>
      </form>
      <form class="search mobile" action="{{ route('produtoFind') }}">
        <input type="search" id="search" name="search">
        <button type="submit">
          <span class="material-symbols-outlined">search</span>
        </button>   
      </form>
    </div> 
  
    <div class="produtos">
      @isset($produtos)
        @if(count($produtos))
          @foreach($produtos as $produto)
            <div class="flip" id="card" onclick="flipcard(this)">

              <div class="face" id="front">
                <img src="{{$produto['imagem']}}">
                <p>Preço: <br> {{$produto['preco']}} <br>   Quantidade disponivel: <br> {{$produto['quantidade']}}</p>
              </div>
              <div class="face-2" id="back">
              <p>Categoria do Produto:<br> {{$produto->categoria->categoria}}<br></p>
                <p>Produto :<br> {{$produto['nome']}}<br></p>
                <p>Descrição : <br> {{$produto['descricao']}}</p>
              </div>


            </div>

          @endforeach
          <script>
            function flipcard(element){
              element.classList.toggle("flip")
            }
          </script>
        @else
          <p class="no-cats">Sem produtos no momento.</p>
        @endif
      @endisset
    </div>
  </div>
</section>


@endsection