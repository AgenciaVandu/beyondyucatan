@push('scss')
    @vite(['resources/scss/app.scss', 'resources/scss/artesanos.scss', 'resources/js/app.js'])
@endpush
<x-layouts.guest title="Comienza tu aventura en Yucatán">
    <header
        style="background-image: url(/img/artesanos-1.png); background-repeat: no-repeat; background-size: cover;
    width: 100%; background-position:center; ">
        <div class="fondo container">
            <div class="titular">
                @if (session()->get('locale') == 'es')
                    <h1>Conoce Nuestros Tesoros Yucatecos</h1>
                @else
                    <h1>This is all about you!</h1>
                @endif
            </div>
        </div>
    </header>

    <x-destacadas.artesano>
        <x-slot name="fotoartesano">
            <img src="{{ asset('img/artesano.png') }}" class="img-fluid" alt="fotografía artesano yucateco">
        </x-slot>
        <x-slot name="tituloartesano">
            @if (session()->get('locale') == 'es')
                Esteban Abán <br> Artesano de cocoyol
            @else
                Esteban Abán <br> Cocoyol Artisan
            @endif

        </x-slot>
        <x-slot name="descripcionartesano">
            @if (session()->get('locale') == 'es')
                Conoce la creatividad que desborda de las manos del gran maestro Esteban Abán, la cual se ve completada
                con
                los años de investigación que ha invertido para la realización de piezas, sobre todo joyería, con
                semillas
                de cocoyol, dzibul, y espinas de henequén. <br><br>

                Conoce la creatividad que desborda de las manos del gran maestro Esteban Abán, la cual se ve completada
                con
                los años de investigación que ha invertido para la realización de piezas, sobre todo joyería, con
                semillas
                de cocoyol, dzibul, y espinas de henequén
            @else
                Esteban is an artisan who has gained recognition both nationally and internationally for his ability to
                transform cocoyol, a material derived from a Yucatecan palm, into true works of art. For over 50 years,
                he has tirelessly worked to bring unique objects to life that are not only beautiful but also reflect
                the rich cultural heritage of Yucatán. <br><br>
                In his hands, cocoyol is turned into a wide variety of products such as necklaces, earrings, bracelets,
                rings, bags, hats, decorative figures, and more. Each piece he creates is special and one-of-a-kind,
                thanks to the craftsmanship and dedication Esteban puts into every item, showcasing his creativity and
                passion for this artisanal tradition. <br><br>
                This type of art not only preserves local culture and traditions but also becomes a symbol of Yucatecan
                identity, showing the world the beauty of the natural materials from the region and the skill of the
                artisans who work with them.
            @endif

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
        <x-slot name="facebook">
            <a href="">
                <img src="{{ asset('img/facebook.svg') }}" width="30" alt="">
            </a>
        </x-slot>
        <x-slot name="instagram">
            <a href="">
                <img src="{{ asset('img/instagram.svg') }}" width="30" alt="">
            </a>
        </x-slot>
        <x-slot name="whatsapp">
            <a href="">
                <img src="{{ asset('img/whatsapp.svg') }}" width="30" alt="">
            </a>
        </x-slot>
    </x-destacadas.artesano>
    <x-destacadas.artesano>
        <x-slot name="fotoartesano">
            <img src="{{ asset('img/ek.png') }}" class="img-fluid" alt="fotografía artesano yucateco">
        </x-slot>

        <x-slot name="tituloartesano">
            @if (session()->get('locale') == 'es')
                Don Alfredo <br> Artesano de lek
            @else
                Don Alfredo <br>Lek Artisan
            @endif

        </x-slot>
        <x-slot name="descripcionartesano">
            @if (session()->get('locale') == 'es')
                Conoce la creatividad que desborda de las manos del gran maestro Esteban Abán, la cual se ve completada
                con
                los años de investigación que ha invertido para la realización de piezas, sobre todo joyería, con
                semillas
                de cocoyol, dzibul, y espinas de henequén. <br><br>

                Conoce la creatividad que desborda de las manos del gran maestro Esteban Abán, la cual se ve completada
                con
                los años de investigación que ha invertido para la realización de piezas, sobre todo joyería, con
                semillas
                de cocoyol, dzibul, y espinas de henequén
            @else
                He is a distinguished artisan from Valladolid, Yucatán, specializing in the creation of handmade pieces using jícara, a typical material of the region. His work includes the creation of decorative objects such as lamps and tortilla holders, all finely decorated and handcrafted. <br><br>Don Alfredo has participated in various fairs and exhibitions of popular art, such as the "Arte a Mano" event, where he has showcased his skill and creativity, being recognized for his mastery of this traditional art.
            @endif

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
        <x-slot name="facebook">
            <a href="">
                <img src="{{ asset('img/facebook.svg') }}" width="30" alt="">
            </a>
        </x-slot>
    </x-destacadas.artesano>
    <x-destacadas.artesano>
        <x-slot name="fotoartesano">
            <img src="{{ asset('img/artesano.png') }}" class="img-fluid" alt="fotografía artesano yucateco">
        </x-slot>
        <x-slot name="tituloartesano">
            @if (session()->get('locale') == 'es')
                Maria del belem segura aguilar <br>
                Artesana de punto de cruz
            @else
                Maria del belem segura aguilar <br>
                Cross-Stitch Artisan
            @endif

        </x-slot>
        <x-slot name="descripcionartesano">
            @if (session()->get('locale') == 'es')
                María del Belem Segura Aguilar es una destacada artesana originaria de Subincancab, en el municipio de
                Timucuy, Yucatán. Es reconocida por su maestría en el bordado tradicional yucateco, especialmente en la
                técnica de punto de cruz. <br><br>

                A lo largo de su vida, ha dedicado su trabajo a preservar las tradiciones textiles de la región, creando
                hipiles y otras piezas que reflejan la rica cultura maya. Su obra ha sido expuesta a nivel nacional e
                internacional, y ha recibido apoyos del PACMYC para continuar desarrollando su arte.
                Ha sido considerada una de las grandes representantes del arte popular mexicano.
            @else
                María del Belem Segura Aguilar is a distinguished artisan from Subincancab, located in the municipality of Timucuy, Yucatán. She is renowned for her expertise in traditional Yucatecan embroidery, particularly in the cross-stitch technique. <br><br>Throughout her life, she has dedicated her work to preserving the region’s textile traditions, creating hipiles (traditional embroidered dresses) and other pieces that reflect the rich Maya culture. Her work has been exhibited both nationally and internationally, and she has received support from the PACMYC (Program for the Support of Municipal and Community Cultures) to continue developing her craft.
            @endif

        </x-slot>


    </x-destacadas.artesano>

    {{-- artisan --}}
    <x-destacadas.artesano>
        <x-slot name="fotoartesano">
            <img src="{{ asset('img/artesano.png') }}" class="img-fluid" alt="fotografía artesano yucateco">
        </x-slot>
        <x-slot name="tituloartesano">
            @if (session()->get('locale') == 'es')
                Juana de Arco Balderas Puch <br>
                Creación de hamacas
            @else
                Juana de Arco Balderas Puch <br>
                Hammock Creation
            @endif

        </x-slot>
        <x-slot name="descripcionartesano">
            @if (session()->get('locale') == 'es')
                Juana de Arco Balderas Puch es una talentosa artesana originaria de San Antonio Millet, Tixkokob,
                Yucatán. Especializada en la creación de hamacas hechas de sansevieria, una técnica artesanal que casi
                ha desaparecido, Juana ha dedicado su labor a preservar esta tradición ancestral. <br><br>

                Las hamacas que elabora están teñidas con tintes naturales y su producción requiere un proceso
                meticuloso y prolongado, lo que refleja su gran destreza y compromiso con la artesanía yucateca. Su
                trabajo ha sido reconocido en importantes eventos como la exposición "Original" en el Complejo Cultural
                Los Pinos, donde ha representado con orgullo el talento de los artesanos de Yucatán, destacándose por su
                dedicación en rescatar este arte casi olvidado.
            @else
                Juana de Arco Balderas Puch is a talented artisan from San Antonio Millet, Tixkokob, Yucatán. She specializes in crafting hammocks made from sansevieria, an artisanal technique that has nearly disappeared. Juana has dedicated her efforts to preserving this ancestral tradition. <br><br>
                
                The hammocks she creates are dyed with natural pigments, and their production requires a meticulous and lengthy process, reflecting her great skill and commitment to Yucatecan craftsmanship. Her work has been recognized at major events like the "Original" exhibition at the Los Pinos Cultural Complex, where she proudly showcased the talent of Yucatecan artisans, standing out for her dedication to reviving this nearly forgotten art.
            @endif

        </x-slot>


    </x-destacadas.artesano>

    {{-- artisan --}}
    <x-destacadas.artesano>
        <x-slot name="fotoartesano">
            <img src="{{ asset('img/artesano.png') }}" class="img-fluid" alt="fotografía artesano yucateco">
        </x-slot>
        <x-slot name="tituloartesano">
            @if (session()->get('locale') == 'es')
                Gabriel Isidro Pérez Rajón <br>
                Artesano de talla policromada
            @else
                Gabriel Isidro Pérez Rajón <br>
                Polychrome Carving Artisan
            @endif

        </x-slot>
        <x-slot name="descripcionartesano">
            @if (session()->get('locale') == 'es')
                Gabriel Isidro Pérez Rajón es un artesano destacado de Izamal, Yucatán, conocido por su trabajo en talla
                policromada. Su habilidad y creatividad lo han hecho merecedor de varios reconocimientos, como el tercer
                lugar en la categoría de pintura popular en el Concurso Nacional de Nacimientos Mexicanos. <br><br>

                Sus obras reflejan un profundo respeto por las tradiciones mayas, integrando elementos culturales y
                artísticos que preservan y enriquecen el patrimonio artesanal mexicano
            @else
                Gabriel Isidro Pérez Rajón is a renowned artisan from Izamal, Yucatán, known for his work in polychrome carving. His skill and creativity have earned him several accolades, including third place in the popular painting category at the National Mexican Nativity Scene Competition. <br><br> His works reflect a deep respect for Mayan traditions, integrating cultural and artistic elements that preserve and enrich Mexican artisanal heritage.
            @endif

        </x-slot>
        <x-slot name="facebook">
            <a href="https://www.facebook.com/gabriel.perezrajon" target="blank">
                <img src="{{ asset('img/facebook.svg') }}" width="30" alt="">
            </a>
        </x-slot>

    </x-destacadas.artesano>

    <section class="llamada">
        <x-cta />
    </section>
</x-layouts.guest>
