<nav class="navbar navbar-expand-lg bg-beyond fixed-top">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{asset('/img/logobeyond.svg')}}" width="200" alt="Logotipo Beyond Yucatan">
    </a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link" aria-current="page" href="#">Inicio</a>
        </li>
        <li  class="nav-item">
          <a href="{{ route('experiencias') }}" class="nav-link" href="#">Experiencias</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('bucketlist') }}" class="nav-link">Bucketlist</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('artesanos')}}" class="nav-link">artesanos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link contactanos" aria-current="page" href="{{route ('contacto')}}">
            <span class="ml-2">
                <img src="{{asset('/img/chat.svg')}}" width="22" alt="Icono chatea con nosotros">
            </span>contactanos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ingles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Español</a>
        </li>
      </ul>
      
  </div>
</nav>