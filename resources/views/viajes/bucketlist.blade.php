@push('scss')
@vite(['resources/scss/app.scss', 'resources/scss/bucketlist.scss', 'resources/js/app.js' ])
@endpush
<x-layouts.guest title="Comienza tu aventura en Yucatán">
    <x-header>
        <x-slot name="tituloheader">
            Esto lo creamos para ti
        </x-slot>
    </x-header>
    <section class="bucketlist">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 p-0 m-0 imagen">
                    <img src="{{asset('/img/balon.jpg')}}" alt="experiencia bucketlist">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                    <div class="descripcion">
                        <h2>Los pasos del Jaguar</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum doloremque, odio consequuntur blanditiis ducimus cumque omnis consequatur reiciendis, in nemo deleniti ut numquam deserunt laborum molestiae nisi ab tenetur? Natus earum minima fuga tempora aliquid, quas facilis corporis reiciendis excepturi!
                            <br><br>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam laboriosam unde sequi, esse incidunt suscipit soluta quaerat odio iure ullam est qui tempora a, voluptatem deleniti praesentium, quo adipisci harum.
                        </p>
                        <div class="cta">
                            <div class="iconos">
                                <ul>
                                    <li class="me-3">
                                        <span class="me-2">
                                            <img src="{{asset('img/icon.png')}}" alt="icono experiencia">
                                        </span> <p class="m-auto">5 Días</p>
                                    </li>
                                    <li>
                                        <span class="me-2">
                                            <img src="{{asset('img/icon.png')}}" alt="icono experiencia">
                                        </span> <p class="m-auto">5 Días</p>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="costo">
                                <p>
                                    <span>Desde:</span>
                                    $ <span>2,000</span> mxn P/p
                                </p>
                                <hr>
                            </div>
                        </div>
                        <div class="boton">
                            <a href="" class="btn btn-primary">Quiero vivir esta experiencia</a>
                        </div>
                    </div>

                </div>
            </div>
            <hr class="mt-5 mb-5 p-0">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 p-0 m-0 imagen">
                    <img src="{{asset('/img/balon.jpg')}}" alt="experiencia bucketlist">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                    <div class="descripcion">
                        <h2>Los pasos del Jaguar</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum doloremque, odio consequuntur blanditiis ducimus cumque omnis consequatur reiciendis, in nemo deleniti ut numquam deserunt laborum molestiae nisi ab tenetur? Natus earum minima fuga tempora aliquid, quas facilis corporis reiciendis excepturi!
                            <br><br>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam laboriosam unde sequi, esse incidunt suscipit soluta quaerat odio iure ullam est qui tempora a, voluptatem deleniti praesentium, quo adipisci harum.
                        </p>
                        <div class="cta">
                            <div class="iconos">
                                <ul>
                                    <li class="me-3">
                                        <span class="me-2">
                                            <img src="{{asset('img/icon.png')}}" alt="icono experiencia">
                                        </span> <p class="m-auto">5 Días</p>
                                    </li>
                                    <li>
                                        <span class="me-2">
                                            <img src="{{asset('img/icon.png')}}" alt="icono experiencia">
                                        </span> <p class="m-auto">5 Días</p>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="costo">
                                <p>
                                    <span>Desde:</span>
                                    $ <span>2,000</span> mxn P/p
                                </p>
                                <hr>
                            </div>
                        </div>
                        <div class="boton">
                            <a href="" class="btn btn-primary">Quiero vivir esta experiencia</a>
                        </div>
                    </div>

                </div>
            </div>
            <hr class="mt-5 p-0">
        </div>
    </section>
    <section class="llamada">
        <x-cta />
    </section>
</x-layouts.guest>