@push('scss')
    @vite(['resources/scss/app.scss', 'resources/scss/detallebucket.scss', 'resources/js/app.js'])
@endpush
<x-layouts.guest title="Comienza tu aventura en Yucatán">
    <x-header>
        <x-slot name="tituloheader">
            @if (session()->get('locale') == 'es')
            {{ $bucket->title }}
            @else
            {{ $bucket->title_en }}
            @endif
        </x-slot>
    </x-header>
    <section class="intro">
        <div class="container">
            <p>{!! $bucket->description !!}</p>
            <div class="cta">
                <div class="iconos">
                    <ul>
                        <li class="me-3">
                            <span class="me-2">
                                <img src="{{ asset('img/icon.png') }}" alt="icono experiencia">
                            </span>
                            <p class="m-auto">{{ $bucket->days }} Días</p>
                        </li>
                        <li>
                            <span class="me-2">
                                <img src="{{ asset('img/icon.png') }}" alt="icono experiencia">
                            </span>
                            <p class="m-auto">{{ $bucket->typetour }}</p>
                        </li>

                    </ul>
                </div>
                <div class="costo">
                    <p>
                        <span>Desde:</span>
                        $ <span>{{ $bucket->price }}</span> MXN P/P
                    </p>
                    <hr>
                </div>
            </div>
            <div class="boton">
                <a href="{{ route('cotizador-grupo-bucket', $bucket) }}" class="btn btn-primary">Quiero vivir esta
                    experiencia</a>
            </div>

        </div>
    </section>
    <hr>
    <div class="dias">
        <div class="container-fluid">
            @foreach ($days as $day)
                @if ($loop->index % 2 === 0)
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 p-0 imagen">
                            <img src="{{ asset($day->image) }}" alt="experiencia bucketlist">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                            <div class="descripcion">
                                <h2>Día {{ $loop->iteration }}</h2>
                                @if (session()->get('locale') == 'es')
                                    <p>
                                        {!! $day->description !!}
                                    </p>
                                @else
                                    <p>
                                        {!! $day->description_en !!}
                                    </p>
                                @endif
                                <div class="cta">
                                    <div class="iconos">
                                        <ul>
                                            @foreach ($day->icons as $icon)
                                                <li class="me-1">
                                                    <span>
                                                        <img src="{{ asset($icon->img) }}" alt="icono experiencia">
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row mt-5">
                        <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                            <div class="descripcion">
                                <h2>Día {{ $loop->iteration }}</h2>
                                @if (session()->get('locale') == 'es')
                                    <p>
                                        {!! $day->description !!}
                                    </p>
                                @else
                                    <p>
                                        {!! $day->description_en !!}
                                    </p>
                                @endif
                                <div class="cta">
                                    <div class="iconos">
                                        <ul>
                                            @foreach ($day->icons as $icon)
                                                <li class="me-1">
                                                    <span>
                                                        <img src="{{ asset($icon->img) }}" alt="icono experiencia">
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 p-0 imagen">
                            <img src="{{ asset($day->image) }}" alt="experiencia bucketlist">
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <x-destacadas.ventacruzada :experiences="$experiences" />
    <section class="llamada">
        <x-cta />
    </section>
</x-layouts.guest>
