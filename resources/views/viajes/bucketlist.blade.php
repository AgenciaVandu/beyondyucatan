@push('scss')
@vite(['resources/scss/app.scss', 'resources/scss/bucketlist.scss', 'resources/js/app.js' ])
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.9/glider.min.css">
    <link rel="stylesheet" href="{{asset('css/carousel.css')}}">
@endpush
<x-layouts.guest title="Comienza tu aventura en Yucatán">
    <header class="headerindex"
        style="background-image: url(/img/estrellas.png); background-repeat: no-repeat; background-size: cover;
    width: 100%; background-position:center; min-height:100vh; ">
        <div class="fondo">
            <div class="titular">
                <h1 >Esto lo creamos para ti</h1>
            </div>
        </div>
        <x-buscador />
    </header>
    


    <section class="bucketlist">
        <div class="container-fluid">
         @foreach ($bucket as $bucket)
         <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 p-0 m-0 imagen">
                    <img src="{{asset($bucket->image)}}" alt="experiencia bucketlist">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                    <div class="descripcion">
                        <h2>{{ $bucket -> title}}</h2>
                        <p>
                        {{ $bucket -> description}}
                        </p>
                        <div class="cta">
                            <div class="iconos">
                                <ul>
                                    <li class="me-3">
                                        <span class="me-2">
                                            <img src="{{asset('img/icon.png')}}" alt="icono experiencia">
                                        </span> <p class="m-auto"> {{$bucket -> days}} Días</p>
                                    </li>
                                    <li>
                                        <span class="me-2">
                                            <img src="{{asset('img/icon.png')}}" alt="icono experiencia">
                                        </span> <p class="m-auto">{{$bucket -> typetour}}</p>
                                    </li>

                                </ul>
                            </div>
                            <div class="costo">
                                <p>
                                    <span>Desde:</span>
                                    $ <span>{{$bucket -> price}}</span> mxn P/p
                                </p>
                                <hr>
                            </div>
                        </div>
                        <div class="boton">
                            <a href="/bucketlist/{{$bucket->id}}" class="btn btn-primary">Quiero vivir esta experiencia</a>
                        </div>
                    </div>

                </div>
            </div>
            <hr class="mt-5 mb-5 p-0">

         @endforeach

        </div>
    </section>
    <section class="llamada">
        <x-cta />
    </section>
    @push('js')

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.9/glider.min.js"></script>
    <script src="{{asset('js/glider.js')}}"></script>
    @endpush
</x-layouts.guest>
