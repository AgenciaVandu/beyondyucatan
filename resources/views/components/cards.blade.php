<div class="card">
    <img src="{{asset('/img/yaxuna.png')}}" alt="Imagen de tour">
    <div class="contenido1">
        <h3>{{$tituloExperiencia ?? 'Título no disponible'}}</h3>
        <p>{{$descripcionExperiencia ?? 'Descripción no disponible'}}</p>
    </div>
    <div class="cta">
        <div class="iconos">
            <ul>
                <li>
                    <img src="{{asset('img/icon.svg')}}" alt="icono experiencia">
                </li>
                <li>
                    <img src="{{asset('img/icon.svg')}}" alt="icono experiencia">
                </li>
                <li>
                    <img src="{{asset('img/icon.svg')}}" alt="icono experiencia">
                </li>
            </ul>
        </div>
        <div class="costo">
            <p>
                <span>Desde:</span>
                $ <span>2,000</span> mxn
            </p>
            <hr>
        </div>
    </div>
    <div class="boton text-center">
        <a href="{{ route ('post')}}" class="btn btn-info">Ver experiencia</a>
    </div>
</div>
