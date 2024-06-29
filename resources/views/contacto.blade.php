@push('scss')
    @vite(['resources/scss/app.scss', 'resources/scss/contacto.scss', 'resources/js/app.js'])
@endpush
<x-layouts.guest title="¡Descubre hasta donde puedes llegar!">

    <header style="background-image: url(/img/flamingos.png); background-repeat: no-repeat; background-size: cover;
     width: 100%; background-position:center; ">
        <div class="fondo container">
            <div class="titular">
                <h1>¡Descubre hasta donde puedes llegar!</h1>
            </div>
        </div>
    </header>

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
