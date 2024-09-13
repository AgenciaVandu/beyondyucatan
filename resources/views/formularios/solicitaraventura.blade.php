@push('scss')
    @vite(['resources/scss/app.scss', 'resources/scss/solicitud.scss', 'resources/js/app.js'])
@endpush
<x-layouts.guest title="Bienvenido a Yucatán">
    <x-header>
        <x-slot name="tituloheader">
            ¡Bienvenido a Yucatán!
        </x-slot>

    </x-header>

    <section class="formulario">
        <div class="forms">
            <x-layouts.formulario>
                <x-slot name="formtitle">
                    Continua con tu aventura
                </x-slot>
                Mándanos tus datos para ponernos en contacto contigo
                <x-slot name="denominacion">
                    {{-- <span>Experiencia:</span> Tour del Oro Verde --}}
                </x-slot>
                <x-slot name="forms" class="formu">
                    <x-form-basic />
                </x-slot>
            </x-layouts.formulario>
        </div>
    </section>
    <section class="llamada">
        <x-cta />
    </section>

</x-layouts.guest>
