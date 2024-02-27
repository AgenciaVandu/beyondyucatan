@push('scss')
@vite(['resources/scss/app.scss', 'resources/scss/experiencia.scss', 'resources/js/app.js' ])
@endpush
<x-layouts.guest :title="$experiencia -> titulo">
    <x-header>
        <x-slot name="tituloheader">
            {{ $experiencia -> titulo }}
        </x-slot>
    </x-header>
    <section class="titular">
        <div class="container">
            <p>{{ $experiencia -> longdescription }}</p>
        </div>
    </section>
    <section>
    <x-destacadas.experiencia>
        <x-slot name="titulocuerpo">
            {{ $experiencia -> titulo }}
        </x-slot>
        <x-slot name="descripcionLarga">
            {{ $experiencia -> longdescription}}
        </x-slot>
        <x-slot name="precio">
            {{$experiencia -> price}}
        </x-slot>
        <x-slot name="botoncta">
            Quiero esta experiencia
        </x-slot>
    </x-destacadas.experiencia>
    </section>
    <x-destacadas.ventacruzada />
    <section class="llamada">
        <x-cta />
    </section>

</x-layouts.guest>