@push('scss')
    @vite(['resources/scss/app.scss', 'resources/scss/artesanos.scss', 'resources/js/app.js'])
@endpush
<x-layouts.guest title="Comienza tu aventura en Yucatán">
    <header
        style="background-image: url(/img/artesanos-1.png); background-repeat: no-repeat; background-size: cover;
    width: 100%; background-position:center; ">
        <div class="fondo container">
            <div class="titular">
                <h1>Conoce Nuestros Tesoros Yucatecos</h1>
            </div>
        </div>
    </header>

    <x-destacadas.artesano>
        <x-slot name="fotoartesano">
            <img src="{{ asset('img/artesano.png') }}" class="img-fluid" alt="fotografía artesano yucateco">
        </x-slot>
        <x-slot name="tituloartesano">
            Esteban Abán <br> Artesano de cocoyol
        </x-slot>
        <x-slot name="descripcionartesano">
            Esteban es un artesano que ha alcanzado reconocimiento tanto a nivel nacional como internacional por su
            habilidad para transformar el cocoyol, un material proveniente de una palma yucateca, en auténticas piezas
            de arte. Durante más de 50 años, ha trabajado incansablemente para dar vida a objetos únicos que no solo son
            bellos, sino que también reflejan la riqueza cultural de <b>Yucatán.</b>
            <br><br>

            En sus manos, el cocoyol se convierte en una amplia gama de productos como collares, aretes, pulseras,
            anillos, bolsos, sombreros y figuras decorativas, entre otros. Cada pieza que crea es especial y única,
            debido al trabajo artesanal y a la dedicación que Esteban pone en cada una, transmitiendo su creatividad y
            pasión por esta tradición artesanal.
            <br><br>

            Este tipo de arte no solo preserva la cultura y las tradiciones locales, sino que también se convierte en un
            símbolo de identidad yucateca, mostrando al mundo la belleza de los materiales naturales de la región y la
            destreza de los artesanos que los trabajan.

        </x-slot>
        <x-slot name="redesartesanos">
            <ul>
                <li>
                    <a href="https://www.facebook.com/profile.php?id=100076295614925&locale=es_LA">
                        <img src="{{asset('img/facebook.svg')}}" width="30" alt="">
                    </a>
                    {{-- <a href="">
                        <img src="{{asset('img/instagram.svg')}}" width="30" alt="">
                    </a>
                    <a href="">
                        <img src="{{asset('img/whatsapp.svg')}}" width="30" alt="">
                    </a> --}}
                </li>
            </ul>
        </x-slot>
        <x-slot name="imgartesano">
            <div class="row p-5">
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{ asset('img/articulos/1.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{ asset('img/articulos/2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{ asset('img/articulos/3.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{ asset('img/articulos/4.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{ asset('img/articulos/5.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{ asset('img/articulos/6.png') }}" class="img-fluid" alt="">
                </div>

            </div>
        </x-slot>
    </x-destacadas.artesano>
    <x-destacadas.artesano>
        <x-slot name="fotoartesano">
            <img src="{{ asset('img/ek.png') }}" class="img-fluid" alt="fotografía artesano yucateco">
        </x-slot>

        <x-slot name="tituloartesano">
            Don Alfredo <br> Artesano de lek
        </x-slot>
        <x-slot name="descripcionartesano">
            Es un destacado artesano de Valladolid, Yucatán, especializado en la elaboración de piezas artesanales con jícara, un material típico de la región. Su trabajo incluye la creación de objetos decorativos como lámparas y tortilleras, todos finamente decorados y hechos a mano. <br><br> Don Alfredo ha participado en diversas ferias y exposiciones de arte popular, como el evento "Arte a Mano", donde ha mostrado su habilidad y creatividad, siendo reconocido por su maestría en este arte tradicional

        </x-slot>
        <x-slot name="imgartesano">
            <div class="row p-5">
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{ asset('img/articulos/1artesano.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{ asset('img/articulos/2artesano.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{ asset('img/articulos/3artesano.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{ asset('img/articulos/4artesano.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{ asset('img/articulos/5artesano.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-6 col-4 p-2">
                    <img src="{{ asset('img/articulos/7artesano.png') }}" class="img-fluid" alt="">
                </div>

            </div>
        </x-slot>
    </x-destacadas.artesano>
    <section class="llamada">
        <x-cta />
    </section>
</x-layouts.guest>
