<section class="intereses">
    <div class="container">
        <div class="text-center">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing.</h1>
        </div>

    <div class="opciones">
        @foreach ($experiences as $experience)
            <a href="#" class="opcion">
                @if ($experience->imagedestacada)
                <div class="contenido" style="background-image: url('{{ asset($experience->imagedestacada) }}'); background-position: center; background-repeat: no-repeat;">
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
</div>
</section>
