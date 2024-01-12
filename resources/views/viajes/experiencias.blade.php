@push('scss')
@vite(['resources/scss/app.scss', 'resources/scss/experiencias.scss', 'resources/js/app.js' ])
@endpush
<x-layouts.guest title="Comienza tu aventura en Yucatán">
    <x-header>
        <x-slot name="tituloheader">
            ¡Comienza tu aventura!
        </x-slot>
        <x-slot name="descripcion">

        </x-slot>
        <x-slot name="categorias">

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
    <div class="cta-medida">
        <div class="container">
            <div class="text-center">
                <h1>¿Quieres una experiencia a la medida?</h1>
                <a href="" class="btn btn-primary">Solicitar una experiencia</a>
            </div>
        </div>
    </div>
</x-layouts.guest>