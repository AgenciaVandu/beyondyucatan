@push('scss')
@vite(['resources/scss/app.scss', 'resources/scss/cotizador.scss', 'resources/js/app.js' ])
@endpush
<x-layouts.guest title="Cotiza tu experiencia">
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
                                <input type="text" class="form-control w-100" placeholder="Fecha de llegada" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="form-group">
                                <input type="text" class="form-control w-100" placeholder="Fecha de salida" onfocus="(this.type='date')" onblur="(this.type='text')">
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
                    <div class="row checks">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p>Estás interesado en:</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="arquitectura">
                                <label class="form-check-label" for="arquitectura">
                                    Arquitectura
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="" id="comunidadesMayas">
                                <label class="form-check-label" for="comunidadesMayas">
                                    Comunidades Mayas
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="" id="zonasArqueologicas">
                                <label class="form-check-label" for="zonasArqueologicas">
                                    Zonas arqueológicas
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="" id="gastronomia">
                                <label class="form-check-label" for="gastronomia">
                                    Gastronomía
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="" id="naturaleza">
                                <label class="form-check-label" for="naturaleza">
                                    Naturaleza
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="" id="aventura">
                                <label class="form-check-label" for="aventura">
                                    Aventura
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p>¿Con qué te podemos ayudar?</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="cenotes">
                                <label class="form-check-label" for="cenotes">
                                    Cenotes
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="" id="Avistamiento">
                                <label class="form-check-label" for="Avistamiento">
                                    Avistamiento de aves
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="" id="playas">
                                <label class="form-check-label" for="playas">
                                    Playas
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="" id="bienrelax">
                                <label class="form-check-label" for="bienrelax">
                                    Bienestar y relajación
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="" id="celebraciones">
                                <label class="form-check-label" for="celebraciones">
                                    Celebración especial
                                    (cumpleaños, aniversario)
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row checks mt-3">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p>¿En qué idioma te gustaría?</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="espanol">
                                <label class="form-check-label" for="espanol">
                                    Español
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="" id="ingles">
                                <label class="form-check-label" for="ingles">
                                    Inglés
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="" id="frances">
                                <label class="form-check-label" for="frances">
                                    Frances
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="" id="italiano">
                                <label class="form-check-label" for="italiano">
                                    Italiano
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="" id="ruso">
                                <label class="form-check-label" for="ruso">
                                    Ruso
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="" id=otro">
                                <label class="form-check-label" for="otro">
                                    Otro
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p>Selecciona la categoría del hotel en el que te gustaría hospedarte</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="desayunos">
                                <label class="form-check-label" for="desayunos">
                                    Desayunos incluidos
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" id="budget" placeholder="Presupuesto">
                    </div>
                    <div class="form-group mt-3">
                        <textarea type="text" class="form-control" id="in" placeholder="Comentarios adicionales o requerimientos especiales" rows="3"></textarea>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Enviar Información</button>
                    </div>
                </form>

            </div>
        </div>
    </section>
</x-layouts.guest>