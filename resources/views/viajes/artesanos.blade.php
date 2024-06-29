@push('scss')
@vite(['resources/scss/app.scss', 'resources/scss/artesanos.scss', 'resources/js/app.js' ])
@endpush
<x-layouts.guest title="Comienza tu aventura en Yucatán">
    <header style="background-image: url(/img/artesanos-1.png); background-repeat: no-repeat; background-size: cover;
    width: 100%; background-position:center; ">
       <div class="fondo container">
           <div class="titular">
               <h1>Conoce Nuestros Tesoros Yucatecos</h1>
           </div>
       </div>
   </header>

    <x-destacadas.artesano>
        <x-slot name="fotoartesano">
            <img src="{{asset('img/artesano.png')}}" class="img-fluid" alt="fotografía artesano yucateco">
        </x-slot>
        <x-slot name="tituloartesano">
            Esteban Abán <br> Artesano de cocoyol
        </x-slot>
        <x-slot name="descripcionartesano">
            Conoce la creatividad que desborda de las manos del gran maestro Esteban Abán, la cual se ve completada con los años de investigación que ha invertido para la realización de piezas, sobre todo joyería, con semillas de cocoyol, dzibul, y espinas de henequén. <br><br>

            Conoce la creatividad que desborda de las manos del gran maestro Esteban Abán, la cual se ve completada con los años de investigación que ha invertido para la realización de piezas, sobre todo joyería, con semillas de cocoyol, dzibul, y espinas de henequén
        </x-slot>
        <x-slot name="imgartesano">
            <div class="row p-5">
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{asset('img/articulos/1.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{asset('img/articulos/2.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{asset('img/articulos/3.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{asset('img/articulos/4.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{asset('img/articulos/5.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{asset('img/articulos/6.png')}}" class="img-fluid" alt="">
                </div>

            </div>
        </x-slot>
    </x-destacadas.artesano>
    <x-destacadas.artesano>
        <x-slot name="fotoartesano">
            <img src="{{asset('img/ek.png')}}" class="img-fluid" alt="fotografía artesano yucateco">
        </x-slot>

        <x-slot name="tituloartesano">
            Don Alfredo <br> Artesano de lek
        </x-slot>
        <x-slot name="descripcionartesano">
            Conoce la creatividad que desborda de las manos del gran maestro Esteban Abán, la cual se ve completada con los años de investigación que ha invertido para la realización de piezas, sobre todo joyería, con semillas de cocoyol, dzibul, y espinas de henequén. <br><br>

            Conoce la creatividad que desborda de las manos del gran maestro Esteban Abán, la cual se ve completada con los años de investigación que ha invertido para la realización de piezas, sobre todo joyería, con semillas de cocoyol, dzibul, y espinas de henequén
        </x-slot>
        <x-slot name="imgartesano">
            <div class="row p-5">
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{asset('img/articulos/1artesano.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{asset('img/articulos/2artesano.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{asset('img/articulos/3artesano.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{asset('img/articulos/4artesano.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{asset('img/articulos/5artesano.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{asset('img/articulos/7artesano.png')}}" class="img-fluid" alt="">
                </div>

            </div>
        </x-slot>
    </x-destacadas.artesano>
    <section class="llamada">
        <x-cta />
    </section>
</x-layouts.guest>
