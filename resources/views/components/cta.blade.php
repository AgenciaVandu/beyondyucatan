<div class="cta-medida">
     <div class="cta-experiencia">
        <div class="container text-center">
            @if (session()->get('locale') == 'es')
                <div class="titular">
                    <h1>¿Quieres una experiencia a la medida?</h1>
                    <div class="boton">
                        <a href="{{ route('cotizador-grupo') }}" class="btn btn-primary">Solicitar una experiencia</a>
                    </div>
                </div>
            @else
                <div class="titular">
                    <h1>Are you looking for a tailor-made experience?</h1>
                    <div class="boton">
                        <a href="{{ route('cotizador') }}" class="btn btn-primary">Click to find out more</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
