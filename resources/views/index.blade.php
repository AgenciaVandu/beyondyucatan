@push('scss')
@vite(['resources/scss/app.scss', 'resources/scss/index.scss', 'resources/js/app.js' ])
@endpush
<x-layouts.guest title="Diseña tu experiencia en tu paso por Yucatán">
    <x-header >
        <x-slot name="tituloheader">
            ¡Esto se trata de ti! <br>
        </x-slot>
        <x-slot name="descripcion">
            Diseña tu experiencia en tu paso por Yucatán
        </x-slot>
        <x-slot name="categorias">
            <x-categorias />
        </x-slot>
    </x-header>

    <section class="titular_index">
        <div class="titular_2 text-center">
            <h1>¡Tu aventura comienza hoy!</h1>
            <figure>
                <img src="{{asset('/img/arrow.svg')}}" width="30" alt="Flecha">
            </figure>
        </div>
    </section>
    <section class="quienes-somos">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 contenido">
                    <h2>Quienes somos</h2>
                    <p>Tu camino por Yucatán. Una experiencia local, honesta, emocionante y única. Somos más que guías locales, más que rutas y transporte, más que agencia de viaje. Mucho Más. <br><br> Somos creadores de experiencias, hacedores de sueños, especialistas obsesionados por generar momentos extraordinarios, momentos inolvidables, momentos únicos. <br><br> Somos secretos, memorias, historias, comida, caminos escondidos… somos una experiencia honesta y local para quien quiere algo real.</p>
                    <div class="boton">
                        <a href="" class="btn btn-primary">Descubrir la experiencia para mi</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                    <img src="{{asset('/img/webp/1.webp')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="experiencias">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 p-0 img_contenido">
                    <img src="{{asset('/img/experiencia.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 contenido m-auto">
                    <h2>Tour del Oro Verde</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mauris erat, tincidunt sollicitudin semper sed, ullamcorper sit amet neque.
                        <br><br> Sed sodales, mauris sit amet rutrum laoreet, ligula ante dictum lectus, ac vestibulum dui justo vitae diam. Donec eleifend vulputate felis ut auctor. Nam placerat mollis lacus at volutpat. Donec facilisis id odio id sodales.
                        <br><br>Praesent malesuada dignissim tortor at laoreet. Proin a nulla vel neque finibus imperdiet vel sit amet dui. Aliquam maximus sit amet quam et sagittis. In hac habitasse platea dictumst.
                    </p>
                    <div class="cta">
                        <div class="iconos">
                            <ul>
                                <li>
                                    <img src="{{asset('img/icon.svg')}}" alt="icono experiencia">
                                </li>
                                <li>
                                    <img src="{{asset('img/icon.svg')}}" alt="icono experiencia">
                                </li>
                                <li>
                                    <img src="{{asset('img/icon.svg')}}" alt="icono experiencia">
                                </li>
                            </ul>
                        </div>
                        <div class="costo">
                            <p>
                                <span>Desde:</span>
                                $ <span>2,000</span> mxn
                            </p>
                            <hr>
                        </div>
                    </div>
                    <div class="boton">
                        <a href="" class="btn btn-primary">Descubrir la experiencia para mi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
</x-layouts.guest>