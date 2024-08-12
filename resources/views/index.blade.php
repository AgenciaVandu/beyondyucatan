@push('scss')
    @vite(['resources/scss/app.scss', 'resources/scss/index.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.9/glider.min.css">
    <link rel="stylesheet" href="{{asset('css/carousel.css')}}">
@endpush
<x-layouts.guest title="Diseña tu experiencia en tu paso por Yucatán">
    <header class="headerindex"
        style="background-image: url(/img/bosque.png); background-repeat: no-repeat; background-size: cover;
    width: 100%; background-position:center; min-height:100vh; ">
        <div class="fondo">
            <div class="container">
                <div class="titular">
                    <h1>¡Esto se trata de ti! </h1>
                    <p>Diseña tu experiencia en tu paso por Yucatán</p>
                </div>
                <div class="categorias">
                    <div class="categoria text-center">
                        <a href="" class="btn btn-light">Viaje de grupo</a>
                    </div>
                    <div class="categoria text-center">
                        <a href="" class="btn btn-light">Viaje de grupo</a>
                    </div>
                    <div class="categoria text-center">
                        <a href="" class="btn btn-light">Viaje de grupo</a>
                    </div>
                    <div class="categoria text-center">
                        <a href="" class="btn btn-light">Viaje de grupo</a>
                    </div>
                    <div class="categoria text-center">
                        <a href="" class="btn btn-light">Viaje de grupo</a>
                    </div>
                    <div class="categoria text-center">
                        <a href="" class="btn btn-light">Viaje de grupo</a>
                    </div>
                </div>
            </div>
        </div>
        <x-buscador />
    </header>






    <section class="titular_index">
        <div class="titular_2 text-center">
            <h1>¡Tu aventura comienza hoy!</h1>
            <a href="#quienes-somos" class="arrow">
                <img src="{{ asset('/img/arrow.svg') }}" width="30" alt="Flecha">
            </a>
        </div>
    </section>
    <section id="quienes-somos" class="quienes-somos">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 contenido">
                    <h2>Quienes somos</h2>
                    <p>Tu camino por Yucatán. Una experiencia local, honesta, emocionante y única. Somos más que guías
                        locales, más que rutas y transporte, más que agencia de viaje. Mucho Más. <br><br> Somos
                        creadores de experiencias, hacedores de sueños, especialistas obsesionados por generar momentos
                        extraordinarios, momentos inolvidables, momentos únicos. <br><br> Somos secretos, memorias,
                        historias, comida, caminos escondidos… somos una experiencia honesta y local para quien quiere
                        algo real.</p>
                    <div class="boton">
                        <a href="{{ route('experiencias') }}" class="btn btn-primary">Descubrir una experiencia para
                            mi</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 img_contenido">
                    <img src="{{ asset('/img/webp/1.webp') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    @foreach ($experiencias as $experiencia)
        <x-destacadas.experiencia>
            <div class="container">
                <x-slot name="titulocuerpo">
                    {{ $experiencia->titulo }}
                </x-slot>
                <x-slot name="descripcionLarga">
                    {{ $experiencia->longdescription }}
                </x-slot>
                <x-slot name="precio">
                    {{ $experiencia->price }}
                </x-slot>
                <x-slot name="botoncta">
                    Quiero esta experiencia
                </x-slot>
            </div>
        </x-destacadas.experiencia>
    @endforeach

    <div class="cta-experiencia">
        <div class="container">
            <div class="titular">
                <h1>¿Quieres una experiencia a la medida?</h1>
                <div class="boton">
                    <a href="" class="btn btn-primary">Solicitar una experiencia</a>
                </div>
            </div>
        </div>
    </div>
    <section class="formulario">
        <div class="forms">
            <x-layouts.formulario>
                <x-slot name="formtitle">
                    ¿Te gustaría recibir nuestra ayuda?
                </x-slot>
                Ponte en contacto con nosotros para definir tu siguiente aventura
                <x-slot name="forms" class="formu">
                    <x-form-basic />
                </x-slot>
            </x-layouts.formulario>
        </div>
    </section>
    @push('js')

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.9/glider.min.js"></script>
    <script src="{{asset('js/glider.js')}}"></script>
    @endpush
</x-layouts.guest>
