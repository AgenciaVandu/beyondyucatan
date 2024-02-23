@push('scss')
@vite(['resources/scss/app.scss', 'resources/scss/experiencias.scss', 'resources/js/app.js' ])
@endpush
<x-layouts.guest title="Comienza tu aventura en Yucatán">
    <x-header>
        <x-slot name="tituloheader">
            ¡Comienza tu aventura!
        </x-slot>
    </x-header>
    <section class="experiencias">
        <div class="opciones">
           @foreach ($experiencias as $experiencia)
           <div class="opcion">
                <x-cards>
                    <x-slot name="tituloExperiencia">
                    {{ $experiencia -> titulo }}
                    </x-slot>
                    <x-slot name="descripcionExperiencia">
                    {{ $experiencia -> description}}
                    </x-slot>

                </x-cards>
            </div>
           @endforeach
            
        </div>
    </section>
    <section class="llamada">
        <x-cta />
    </section>
</x-layouts.guest>