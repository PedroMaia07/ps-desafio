<footer id="site-footer">
  <div id="footer-container">    
    <div id="footer-logo">
       <a href="{{ route('siteIndex') }}">
         <img src="{{asset("site/img/logoraio.png")}}" alt="Logo do site">
      </a>
    </div>
  </div>



  <div id="texto-footer">
      <p>Pedro Viçosi Maia , 2023. <br> Todos os direitos reservados.</p>
  </div>

  <div id="redes-sociais">
    <img src="{{ asset('site/img/instagram.png') }}" alt="Icone instagram" onclick="openPage('http://www.instagram.com/pedro_vicosi_maia/')">
    <img src="{{ asset('site/img/github.png') }}" alt="Icone instagram" onclick="openPage('http://github.com/PedroMaia07')">

  </div>

</footer>