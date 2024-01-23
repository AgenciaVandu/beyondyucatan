<section class="experiencias">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 p-0 img_contenido">
                    <img src="{{asset('/img/experiencia.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 contenido m-auto">
                    <h2>Tour del Oro Verde</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mauris erat, tincidunt sollicitudin semper sed, ullamcorper sit amet neque.
                        <br><br> Sed sodales, mauris sit amet rutrum laoreet, ligula ante dictum lectus, ac vestibulum dui justo vitae diam. Donec eleifend vulputate felis ut auctor. Nam placerat mollis lacus at volutpat. Donec facilisis id odio id sodales.
                        <br><br>Praesent malesuada dignissim tortor at laoreet. Proin a nulla vel neque finibus imperdiet vel sit amet dui. Aliquam maximus sit amet quam et sagittis. In hac habitasse platea dictumst.
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
                                $ <span>2,000</span> mxn P/p
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