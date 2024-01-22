@push('scss')
@vite(['resources/scss/app.scss', 'resources/scss/cotizador.scss', 'resources/js/app.js' ])
@endpush
<x-layouts.guest>
    <x-header>
        <x-slot name="tituloheader">
            Diseñamos experiencias para ti
        </x-slot>
    </x-header>
    <section class="cotizador">
        <div class="container">
            <div class="text-center">
                <h1>Tu experiencia comienza aquí</h1>
                <span>Cuéntanos un poco sobre ti para poder ofrecerte la mejor experiencia</span>
            </div>
            <div class="formulario-cotizador">
                <form action="" class="contenido_cotizador">
                    <div class="row g-3">
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="form-group">
                                <input type="date" class="form-control" id="in">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="form-group">
                                <input type="date" class="form-control" id="out">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="form-group">
                                <input type="number" class="form-control" id="adults" placeholder="Adultos">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="form-group">
                                <input type="number" class="form-control" id="kids" placeholder="niños">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre" id="name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Teléfono" id="tel">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mt-3">
                                <input type="mail" class="form-control" placeholder="Correo" id="mail">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="rangoItinerario" class="form-label">¿Qué tan ocupado quieres tu itinerario?</label>
                        <input type="range" class="form-range" id="rangoItinerario">
                        <div class="ocupacion">
                            <ul>
                                <li>Diseñado para descansar</li>
                                <li>Relajado y con paseos</li>
                                <li>Itinerario ocupado</li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layouts.guest>