<header class="header_index" style="background-image: url(/img/experiencias.png); background-repeat: no-repeat; background-size: cover;
     width: 100%; background-position:center;">
    <div class="fondo">
        <div class="container">
            <div class="titular">
                <h1>{{$tituloheader ?? 'No disponible'}}</h1>
                <p>{{$descripcion ?? ''}}</p>
            </div>
            {{$categorias ?? ''}}
        </div>
    </div>
</header>