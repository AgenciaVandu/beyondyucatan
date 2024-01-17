<div class="card">
    <img src="{{asset('/img/yaxuna.png')}}" alt="Imagen de tour">
    <div class="contenido">
        <h3>Tour lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero placeat nostrum maxime dolorum fugiat amet aliquam dolore similique obcaecati voluptates!</p>
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
        <a href="{{ route ('bucketlist-detalle')}}" class="btn btn-info">Ver experiencia</a>
    </div>
</div>
