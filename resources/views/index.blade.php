@push('scss')
    @vite(['resources/scss/app.scss', 'resources/scss/index.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.9/glider.min.css">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
@endpush
<x-layouts.guest title="Diseña tu experiencia en tu paso por Yucatán">
    <header class="headerindex"
        style="background-image: url(/img/bosque.png); background-repeat: no-repeat; background-size: cover; width: 100%; background-position:center; min-height:100vh; ">
        <div class="fondo">
            <div class="container">
                <div class="titular">
                    @if (session()->get('locale') == 'es')
                        <h1>¡Esto se trata de ti! </h1>
                        <p>Diseña tu experiencia en tu paso por Yucatán</p>
                    @else
                        <h1>This is all about you!</h1>
                        <p>Design your experience on your journey through Yucatan</p>
                    @endif
                </div>
                <div class="categorias">
                    @foreach ($categories as $category)
                        @if ($loop->iteration < 7)
                            <div class="categoria text-center">
                                {{-- <a href="" class="btn btn-light">{{ $category->name }}</a> --}}
                                <form action="{{ route('filter') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" name="category_id" value="{{ $category->id }}">
                                    <input type="hidden" name="filtro" value="experiences">
                                    <input type="hidden" name="state_id" value="">
                                    <button class="btn btn-light">{{ $category->name }}</button>
                                </form>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <x-buscador :$categories :$states filtro="experiences" />
    </header>
    <section class="titular_index">
        <div class="titular_2 text-center">
            @if (session()->get('locale') == 'es')
                <h1>¡Tu aventura comienza hoy!</h1>
            @else
                <h1>Your adventure starts today!</h1>
            @endif
            <a href="#quienes-somos" class="arrow">
                <img src="{{ asset('/img/arrow.svg') }}" width="30" alt="Flecha">
            </a>
        </div>
    </section>
    <section id="quienes-somos" class="quienes-somos">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 contenido">
                    @if (session()->get('locale') == 'es')
                        <h2>Quienes somos</h2>
                        <p>Tu camino por Yucatán. Una experiencia local, honesta, emocionante y única. Somos más que
                            guías
                            locales, más que rutas y transporte, más que agencia de viaje. Mucho Más. <br><br> Somos
                            creadores de experiencias, hacedores de sueños, especialistas obsesionados por generar
                            momentos
                            extraordinarios, momentos inolvidables, momentos únicos. <br><br> Somos secretos, memorias,
                            historias, comida, caminos escondidos… somos una experiencia honesta y local para quien
                            quiere
                            algo real.</p>
                        <div class="boton">
                            <a href="{{ route('experiencias') }}" class="btn btn-primary">Descubrir una experiencia para
                                mi</a>
                        </div>
                    @else
                        <h2>About us</h2>
                        <p>We are your path through Yucatan, a local, honest, exciting and unique experience. We are
                            more than tourist guides, routes and transportation, we are more than just a travel agency.
                            We go further.</p>
                        <p>
                            We are dream-makers, happenings’ creators, specialists with one goal in mind: to generate
                            one-of-a-kind, unforgettable moments.

                            We are secrets, memories, stories, foods and hidden paths, for everyone who looks for “the
                            real thing”.
                        </p>
                        <div class="boton">
                            <a href="{{ route('experiencias') }}" class="btn btn-primary">Reveal my experience</a>
                        </div>
                    @endif
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 img_contenido">
                    <img src="{{ asset('/img/webp/1.webp') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="experiencias">
        <div class="container-fluid">
            <div class="carousel">
                <div class="carousel__contenedor">
                    <div class="carousel__lista">
                        @foreach ($experiencias as $experiencia)
                            <x-destacadas.experiencia :$experiencia>
                                @if (session()->get('locale') == 'es')
                                    <div class="container">
                                        <x-slot name="imagenExperiencia">
                                            <img src="{{ asset($experiencia->imagedestacada) }}" alt="Imagen de tour">
                                        </x-slot>
                                        <x-slot name="titulocuerpo">
                                            {!! $experiencia->titulo !!}
                                        </x-slot>
                                        <x-slot name="descripcionLarga">
                                            {!! $experiencia->longdescription !!}
                                        </x-slot>
                                        <x-slot name="precio">
                                            {{ $experiencia->price }}
                                        </x-slot>
                                        <x-slot name="botoncta">
                                            Quiero esta experiencia
                                        </x-slot>
                                    </div>
                                @else
                                   <h1 class="text-center p-6">Próximamente nuevas experiencias</h1>
                                @endif
                            </x-destacadas.experiencia>
                        @endforeach
                    </div>
                    <button aria-label="Anterior" class="carousel__anterior" id="glider_prev">
                        < </button>
                            <button aria-label="Siguiente" class="carousel__siguiente" id="glider_next">
                                >
                            </button>
                </div>
                <div role="tablist" class="carousel__indicador"></div>
            </div>
        </div>
    </section>
    <div class="cta-experiencia">
        <div class="container">
            @if (session()->get('locale') == 'es')
                <div class="titular">
                    <h1>¿Quieres una experiencia a la medida?</h1>
                    <div class="boton">
                        <a href="{{ route('cotizador') }}" class="btn btn-primary">Solicitar una experiencia</a>
                    </div>
                </div>
            @else
                <div class="titular">
                    <h1>Are you looking for a tailor-made experience?</h1>
                    <div class="boton">
                        <a href="{{ route('cotizador') }}" class="btn btn-primary">Click to find out more</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
    @if (session()->get('locale') == 'es')
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
    @else
        <section class="formulario">
            <div class="forms">
                <x-layouts.formulario>
                    <x-slot name="formtitle">
                        Do you need more assistance?
                    </x-slot>
                    Contact us to start your next adventure
                    <x-slot name="forms" class="formu">
                        <x-form-basic />
                    </x-slot>
                </x-layouts.formulario>
            </div>
        </section>
    @endif
    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.9/glider.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="{{ asset('/js/glider.js') }}"></script>
    @endpush
</x-layouts.guest>
