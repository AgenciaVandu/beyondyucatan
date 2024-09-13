@push('scss')
    @vite(['resources/scss/app.scss', 'resources/scss/cotizador.scss', 'resources/js/app.js'])
@endpush
<x-layouts.guest title="Cotiza tu experiencia">
    <x-header>
        <x-slot name="tituloheader">
            ¡Bienvenido a Yucatán!
        </x-slot>
    </x-header>
    <section class="cotizador">
        <div class="container">
            <div class="text-center">
                <h1>Continua con tu aventura</h1>
                <span>Mándanos tus datos para ponernos en contacto contigo </span>
            </div>
            <div class="formulario-cotizador">
                @isset($experience)
                    <form action="{{ route('send.form.experiences') }}" method="POST" class="contenido_cotizador">
                    @endisset
                @isset($bucketlist)
                    <form action="{{ route('send.form.bucketlist') }}" method="POST" class="contenido_cotizador">
                @endisset
                        @csrf
                        @method('POST')
                        <div class="row g-3">
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="form-group">
                                    <input type="text" class="form-control w-100" name="fechallegada"
                                        placeholder="Fecha de llegada" onfocus="(this.type='date')"
                                        onblur="(this.type='text')">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" id="adults" name="adultos"
                                        placeholder="Adultos">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" id="kids" name="kids"
                                        placeholder="niños">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre" name="name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Teléfono" name="tel">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <input type="mail" class="form-control" placeholder="Correo" name="mail">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="rangoItinerario" class="form-label">¿Qué tan ocupado quieres tu
                                itinerario?</label>
                            <input type="range" class="form-range" id="rangoItinerario">
                            <div class="ocupacion">
                                <ul>
                                    <li>Diseñado para descansar</li>
                                    <li>Relajado y con paseos</li>
                                    <li>Itinerario ocupado</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row checks">
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <p>Estás interesado en:</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        name="masexperiencias">
                                    <label class="form-check-label" for="masexperiencias">
                                        Quisiera más experiencias para otros días durante mi estancia
                                    </label>
                                </div>
                            </div>
                            @isset($experience)
                                <input type="hidden" name="titulo" value="{{ $experience->titulo }}">
                            @endisset
                            @isset($bucketlist)
                                <input type="hidden" name="titulo" value="{{ $bucketlist->title }}">
                            @endisset
                        </div>
                        <div class="form-group mt-3">
                            <textarea type="text" class="form-control" name="message"
                                placeholder="Comentarios adicionales o requerimientos especiales" rows="5"></textarea>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Enviar Información</button>
                        </div>
                    </form>

            </div>
        </div>
    </section>
</x-layouts.guest>
