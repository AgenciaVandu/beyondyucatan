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
            <div class="opcion">
                <x-cards>

                </x-cards>
            </div>
            <div class="opcion">
                <x-cards>

                </x-cards>
            </div>
            <div class="opcion">
                <x-cards>

                </x-cards>
            </div>
            <div class="opcion">
                <x-cards>

                </x-cards>
            </div>
        </div>
    </section>
    <section class="llamada">
        <x-cta />
    </section>
</x-layouts.guest>