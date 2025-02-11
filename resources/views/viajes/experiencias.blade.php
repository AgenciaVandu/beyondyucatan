@push('scss')
    @vite(['resources/scss/app.scss', 'resources/scss/experiencias.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.9/glider.min.css">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
@endpush
<x-layouts.guest title="Comienza tu aventura en Yucatán">
    <header class="headerindex"
        style="background-image: url(/img/experiencias.png); background-repeat: no-repeat; background-size: cover;
    width: 100%; background-position:center; min-height:100vh; ">
        <div class="fondo">
            <div class="titular">
                @if (session()->get('locale') == 'es')
                    <h1>¡Comienza tu aventura!</h1>
                @else
                    <h1>Start your adventure!</h1>
                @endif
            </div>
        </div>
        <x-buscador :$categories :$states filtro="experiences" />
    </header>


    <section class="experiencias">
        <div class="opciones">
            @foreach ($experiencias as $experiencia)
                <div class="opcion">
                    <x-cards :$experiencia>
                        <x-slot name="imagenExperiencia">
                            <img src="{{ asset($experiencia->image) }}" class="img-fluid" alt="Imagen de tour">
                        </x-slot>
                        <x-slot name="tituloExperiencia">
                            @if (session()->get('locale') == 'es')
                                {{ $experiencia->titulo }}
                            @else
                                {{ $experiencia->titulo_en }}
                            @endif
                        </x-slot>
                        <x-slot name="descripcionExperiencia">
                            @if (session()->get('locale') == 'en')
                                {!! $experiencia->lightdescription !!}
                            @else
                                {!! $experiencia->lightdescription_en !!}
                            @endif

                        </x-slot>
                        <x-slot name="precio">
                            {{ $experiencia->price }}
                        </x-slot>
                        <x-slot name="btnExperiencia">
                            @if (session()->get('locale') == 'es')
                                <a href="{{ route('experiencia', $experiencia) }}" class="btn btn-info">Ver
                                    experiencia</a>
                            @else
                                <a href="{{ route('experiencia', $experiencia) }}" class="btn-info p-2">Check this experience</a>
                            @endif
                        </x-slot>

                    </x-cards>
                </div>
            @endforeach

        </div>
    </section>
    <section class="llamada">
        <x-cta />
    </section>
    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.9/glider.min.js"></script>
        <script src="{{ asset('js/glider.js') }}"></script>
    @endpush
</x-layouts.guest>
