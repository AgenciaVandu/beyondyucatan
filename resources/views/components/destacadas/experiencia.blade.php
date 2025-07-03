<div class="carousel__elemento">
    <div class="img_contenido">
        <div >{{ $imagenExperiencia ?? 'No disponible' }}</div>
    </div>
    <div class="contenido m-auto">
        <h2>{{ $titulocuerpo ?? 'No disponible' }}</h2>
        <p>
            {{ $descripcionLarga ?? 'No disponible' }}
        </p>
        <div class="cta">
            <div class="iconos">
                <ul>
                    @foreach ($experiencia->icons as $icon)
                        <li>
                            <img src="{{ asset($icon->img) }}" alt="icono experiencia">
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="costo">
                <p>
                    <span>Desde:</span>
                    $ <span>{{ $precio ?? 'N/A' }}</span> USD P/p
                </p>
                <hr>
            </div>
        </div>
        <div class="boton">
            <a href="{{ route('cotizador-grupo') }}" class="btn btn-primary">{{ $botoncta  }}</a>
        </div>
    </div>
   {{--  <div class="row"> 
        <div class="col-lg-6 col-md-12 col-sm-12 p-0 img_contenido m-auto">
           
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 contenido m-auto">
            <h2>{{ $titulocuerpo ?? 'No disponible' }}</h2>
            <p>
                {{ $descripcionLarga ?? 'No disponible' }}
            </p>
            <div class="cta">
                <div class="iconos">
                    <ul>
                        @foreach ($experiencia->icons as $icon)
                            <li>
                                <img src="{{ asset($icon->img) }}" alt="icono experiencia">
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="costo">
                    <p>
                        <span>Desde:</span>
                        $ <span>{{ $precio ?? 'N/A' }}</span> USD P/p
                    </p>
                    <hr>
                </div>
            </div>
            <div class="boton">
                <a href="{{ route('cotizador-grupo') }}" class="btn btn-primary">{{ $botoncta }}</a>
            </div>
        </div>
    </div> --}}
</div>
