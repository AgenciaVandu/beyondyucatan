<div class="card">
    <a href="">
        {{ $imagenExperiencia ?? 'no disponible' }}
    </a>
    <div class="contenido1">
        <h3>{{ $tituloExperiencia ?? 'Título no disponible' }}</h3>
        <p>{{ $descripcionExperiencia ?? 'Descripción no disponible' }}</p>
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
        <div class="costo">
            <p>
                <span>Desde:</span>
                $ <span>{{ $precio ?? 'N/A' }}</span> USD
            </p>
            <hr>
        </div>
    </div>
    <div class="boton text-center">
        {{ $btnExperiencia }}
    </div>
</div>
