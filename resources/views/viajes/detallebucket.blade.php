@push('scss')
@vite(['resources/scss/app.scss', 'resources/scss/detallebucket.scss', 'resources/js/app.js' ])
@endpush
<x-layouts.guest title="Comienza tu aventura en Yucatán">
    <x-header>
        <x-slot name="tituloheader">
            {{$bucket -> title}}
        </x-slot>
    </x-header>
    <section class="intro">
        <div class="container">
            <p>{{$bucket -> description}}</p>
            <div class="cta">
                <div class="iconos">
                    <ul>
                        <li class="me-3">
                            <span class="me-2">
                                <img src="{{asset('img/icon.png')}}" alt="icono experiencia">
                            </span>
                            <p class="m-auto">{{  $bucket -> days }} Días</p>
                        </li>
                        <li>
                            <span class="me-2">
                                <img src="{{asset('img/icon.png')}}" alt="icono experiencia">
                            </span>
                            <p class="m-auto">{{ $bucket -> typetour}}</p>
                        </li>

                    </ul>
                </div>
                <div class="costo">
                    <p>
                        <span>Desde:</span>
                        $ <span>{{ $bucket -> price}}</span> MXN P/P
                    </p>
                    <hr>
                </div>
            </div>
            <div class="boton">
                <a href="{{route('cotizador')}}" class="btn btn-primary">Quiero vivir esta experiencia</a>
            </div>

        </div>
    </section>
    <hr>
    <div class="dias">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 p-0 imagen">
                    <img src="{{asset('/img/balon.jpg')}}" alt="experiencia bucketlist">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                    <div class="descripcion">
                        <h2>Día 1</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum doloremque, odio consequuntur blanditiis ducimus cumque omnis consequatur reiciendis, in nemo deleniti ut numquam deserunt laborum molestiae nisi ab tenetur? Natus earum minima fuga tempora aliquid, quas facilis corporis reiciendis excepturi!
                            <br><br>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam laboriosam unde sequi, esse incidunt suscipit soluta quaerat odio iure ullam est qui tempora a, voluptatem deleniti praesentium, quo adipisci harum.
                        </p>
                        <div class="cta">
                            <div class="iconos">
                                <ul>
                                    <li class="me-1">
                                        <span>
                                            <img src="{{asset('img/icon.svg')}}" alt="icono experiencia">
                                        </span>
                                    </li>
                                    <li class="me-1">
                                        <span>
                                            <img src="{{asset('img/icon.svg')}}" alt="icono experiencia">
                                        </span>
                                    </li>
                                    <li class="me-1">
                                        <span>
                                            <img src="{{asset('img/icon.svg')}}" alt="icono experiencia">
                                        </span>
                                    </li>


                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                    <div class="descripcion">
                        <h2>Día 2</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum doloremque, odio consequuntur blanditiis ducimus cumque omnis consequatur reiciendis, in nemo deleniti ut numquam deserunt laborum molestiae nisi ab tenetur? Natus earum minima fuga tempora aliquid, quas facilis corporis reiciendis excepturi!
                            <br><br>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam laboriosam unde sequi, esse incidunt suscipit soluta quaerat odio iure ullam est qui tempora a, voluptatem deleniti praesentium, quo adipisci harum.
                        </p>
                        <div class="cta">
                            <div class="iconos">
                                <ul>
                                    <li class="me-1">
                                        <span>
                                            <img src="{{asset('img/icon.svg')}}" alt="icono experiencia">
                                        </span>
                                    </li>
                                    <li class="me-1">
                                        <span>
                                            <img src="{{asset('img/icon.svg')}}" alt="icono experiencia">
                                        </span>
                                    </li>
                                    <li class="me-1">
                                        <span>
                                            <img src="{{asset('img/icon.svg')}}" alt="icono experiencia">
                                        </span>
                                    </li>


                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 p-0 imagen">
                    <img src="{{asset('/img/balon.jpg')}}" alt="experiencia bucketlist">
                </div>
            </div>

        </div>
    </div>
    <x-destacadas.ventacruzada :experiences="$experiences"/>
    <section class="llamada">
        <x-cta />
    </section>
</x-layouts.guest>
