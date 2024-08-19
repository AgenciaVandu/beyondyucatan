<section class="intereses">
    <div class="container-fluid">
        <div class="text-center pb-5">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing.</h1>
        </div>
    </div>
    <div class="opciones">
        @foreach ($experiences as $experience)
            <a href="#" class="opcion">
                <div class="contenido">
                    @if ($experience->imagedestacada)
                        <img src="{{ asset($experience->imagedestacada) }}" alt="experiencia interesante">
                    @endif
                    
                    <div class="interior">
                        <h3>{{ $experience->titulo }}</h3>
                        <div class="boton">
                            <button class="btn-secondary">
                                Ver
                            </button>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</section>
