<section class="experiencias">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 p-0 img_contenido">
                    <img src="{{asset($image)}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 contenido m-auto">
                    <h2>{{$titulocuerpo ?? 'No disponible'}}</h2>
                    <p>
                        {{$descripcionLarga ?? 'No disponible'}}
                    </p>
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
                                $ <span>{{$precio ?? 'N/A'}}</span> mxn P/p
                            </p>
                            <hr>
                        </div>
                    </div>
                    <div class="boton">
                        <a href="{{route ('cotizador-grupo')}}" class="btn btn-primary">{{$botoncta}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
