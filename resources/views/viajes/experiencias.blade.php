@push('scss')
@vite(['resources/scss/app.scss', 'resources/scss/experiencias.scss', 'resources/js/app.js' ])
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.9/glider.min.css">
    <link rel="stylesheet" href="{{asset('css/carousel.css')}}">
@endpush
<x-layouts.guest title="Comienza tu aventura en Yucatán">
    <header class="headerindex"
        style="background-image: url(/img/experiencias.png); background-repeat: no-repeat; background-size: cover;
    width: 100%; background-position:center; min-height:100vh; ">
        <div class="fondo">
            <div class="titular">
                <h1 >¡Comienza tu aventura!</h1>
            </div>
        </div>
        <x-buscador />
    </header>


    <section class="experiencias">
        <div class="opciones">
            @foreach ($experiencias as $experiencia)
            <div class="opcion">
                <x-cards>
                    <x-slot name="imagenExperiencia">
                        <img src="{{asset($experience->image)}}" class="img-fluid" alt="Imagen de tour">
                    </x-slot>
                    <x-slot name="tituloExperiencia">
                        {{ $experiencia -> titulo }}
                    </x-slot>
                    <x-slot name="descripcionExperiencia">
                        {{ $experiencia -> lightdescription}}
                    </x-slot>
                    <x-slot name="precio">
                        {{$experiencia -> price}}
                    </x-slot>
                    <x-slot name="btnExperiencia">
                        <a href="/experiencias/{{$experiencia->id}}" class="btn btn-info">Ver experiencia</a>
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
    <script src="{{asset('js/glider.js')}}"></script>
    @endpush
</x-layouts.guest>
