<div class="card">
    <div class="img-card">
        {{ $imagenExperiencia ?? 'no disponible' }}
    </div>
    <div class="contenido1">
        <h3>{{ $tituloExperiencia ?? 'Título no disponible' }}</h3>
        <p class="texto-corto">{{ $descripcionExperiencia ?? 'Descripción no disponible' }}</p>
    </div>
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
        <div class="costo  mb-2">
            <p class="pt-2">
                <span>Desde:</span>
                $ <span>{{ $precio ?? 'N/A' }}</span> USD P/P
            </p>
            <hr>
        </div>
    </div>
    <div class="boton text-center">
        {{ $btnExperiencia }}
    </div>
</div>
