<section class="intereses">
    <div class="container">
        <div class="text-center">
            <h1>Experiencias que te podrían interesar.</h1>
        </div>

        <div class="opciones">
            @foreach ($experiences as $experience)
                <a href="{{ route('experiencia', $experience->id) }}" class="opcion">
                    @if ($experience->imagedestacada)
                        <div class="contenido"
                            style="background-image: url('{{ asset($experience->imagedestacada) }}'); background-position: center; background-repeat: no-repeat;">
                    @endif

                    <div class="interior">
                        @if (session()->get('locale') == 'es')
                            <h3>{{ $experience->titulo }}</h3>
                        @else
                            <h3>{{ $experience->titulo_en }}</h3>
                        @endif
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
