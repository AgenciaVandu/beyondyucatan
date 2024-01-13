@push('scss')
@vite(['resources/scss/app.scss', 'resources/scss/experiencia.scss', 'resources/js/app.js' ])
@endpush
<x-layouts.guest title="">
    <x-header>
        <x-slot name="tituloheader">
        Tour del Oro Verde
        </x-slot>
       
    </x-header>
    <section class="titular">
        <div class="container">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo temporibus saepe dolores omnis, quae eius incidunt possimus iusto dolor illum consequuntur! Odio minima tempore quis tempora. Illum voluptates ipsa inventore doloribus facilis quis veritatis unde magnam dolore qui hic nam vero, provident velit sequi. Dicta necessitatibus quam aliquam temporibus non sequi mollitia aut, reiciendis ab assumenda, neque recusandae debitis quibusdam odio nobis? Incidunt dolores maxime ullam vel voluptatum asperiores a, recusandae numquam perferendis accusamus modi voluptatibus architecto maiores vitae id omnis soluta eveniet. Dolore.</p>
        </div>
    </section>
    <section>
        <x-destacadas.experiencia>
            <x-slot name="botoncta">
                Quiero esta experiencia
            </x-slot>
        </x-destacadas.experiencia>
    </section>
    <x-destacadas.ventacruzada/>
    <section class="llamada">
        <x-cta />
    </section>
   
</x-layouts.guest>