<section class="intereses">
    <div class="container">
        <div class="text-center">
            <h1>Experiencias que te podrían interesar</h1>
        </div>

        <div class="opciones">
            @foreach ($experiences as $experience)
            <div  class="opcion">
                @if ($experience->imagedestacada)
                
                    <div class="contenido">
                        <div class="capa-negra"></div>
                        <div class="contenido__imagen" style="background-image: url('{{ asset($experience->imagedestacada) }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">   
                        </div>
                        <div class="interior">
                            @if (session()->get('locale') == 'es')
                                <h3>{{ $experience->titulo }}</h3>
                            @else
                                <h3>{{ $experience->titulo_en }}</h3>
                            @endif
                            <div class="boton">
                                <a href="{{ route('experiencia', $experience) }}" class="btn btn-secondary">
                                    Ver
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
               
            </div>
            @endforeach
        </div>
    </div>
</section>
