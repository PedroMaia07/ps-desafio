<header id="site-header">
  <div id="header-logo">

    <div>
      <form class="search" action="{{ route('buscar') }}">
        <input type="text" id="search" name="search" placeholder="Pesquisar ...">
        <button type="submit">
          <span class="material-symbols-outlined">
            search
          </span>
        </button>
      </form>
    </div>

    <div>
      <a href="{{ route('siteIndex') }}">
         <img src="{{asset("site/img/logoraio.png")}}" alt="Logo do site">
      </a>
    </div>

  </div>
</header>
<hr>
