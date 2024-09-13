@push('scss')
    @vite(['resources/scss/app.scss', 'resources/scss/experiencia.scss', 'resources/js/app.js'])
@endpush
<x-layouts.guest :title="$experiencia->titulo">

    <header class="headerindex"
        style="background-image: url('{{ $experiencia->image }}'); background-repeat: no-repeat; background-size: cover;
    width: 100%; background-position:center; min-height:100vh; ">
        <div class="fondo">
            <div class="titular">
                <h1> {{ $experiencia->titulo }}</h1>
            </div>
        </div>
        <x-buscador :$categories :$states filtro="experiencia"/>
    </header>

    <section class="titular">
        <div class="container">
            <p>{{ $experiencia->lightdescription }}</p>
        </div>
    </section>
    <section class="infoexp">
       <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 rowimg">
               <img src=" {{ $experiencia->imagedestacada }}" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 contenido m-auto">
                <h2>{{ $experiencia->titulo }}</h2>
                <p>
                    {{ $experiencia->longdescription }}
                </p>
                <div class="cta">
                    <div class="iconos">
                        <ul>
                            <li>
                                <img src="{{ asset('img/icon.svg') }}" alt="icono experiencia">
                            </li>
                            <li>
                                <img src="{{ asset('img/icon.svg') }}" alt="icono experiencia">
                            </li>
                            <li>
                                <img src="{{ asset('img/icon.svg') }}" alt="icono experiencia">
                            </li>
                        </ul>
                    </div>
                    <div class="costo">
                        <p>
                            <span>Desde:</span>
                            $ <span> {{ $experiencia->price }}</span> mxn P/p
                        </p>
                        <hr>
                    </div>
                </div>
                <div class="boton">
                    <a href="{{ route('cotizador-grupo',$experiencia) }}"
                        class="btn btn-primary">Quiero esta experiencia</a>
                </div>
            </div>
           </div>
       </div>

    </section>
    <x-destacadas.ventacruzada :experiences="$experiences"/>
    <section class="llamada">
        <x-cta  />
    </section>

</x-layouts.guest>
