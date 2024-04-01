@push('scss')
@vite(['resources/scss/app.scss', 'resources/scss/contacto.scss', 'resources/js/app.js' ])
@endpush
<x-layouts.guest title="¡Descubre hasta donde puedes llegar!">
    <x-header>
        <x-slot name="tituloheader">
        ¡Descubre hasta donde puedes llegar!
        </x-slot>
    </x-header>
    <section class="formulario">
        <div class="forms">
            <x-layouts.formulario>
                <x-slot name="formtitle">
                ¿Te gustaría recibir nuestra ayuda?
                </x-slot>
                Pónte en contacto con nosotros para definir tu siguiente aventura

                <x-slot name="forms" class="formu">
                    <x-form-basic />
                </x-slot>
            </x-layouts.formulario>
        </div>
    </section>
</x-layouts.guest>