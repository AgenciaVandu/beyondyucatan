<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }} - Beyond Yucatan</title>
    @stack('scss')
    <style>
        body {
            position: relative;
        }
        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            transition: transform 0.3s ease;
            }

        .whatsapp-float:hover {
        transform: scale(1.1);
        }

        .whatsapp-float img {
        width: 32px;
        height: 32px;
        }
    </style>
</head>

<body>
    <a href="https://wa.me/5219994113039" class="whatsapp-float" target="_blank" rel="noopener">
        <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" />
    </a>
    <x-layouts.nav />
    <main>
        {{ $slot }}
    </main>
    <x-layouts.footer>

    </x-layouts.footer>
</body>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'es',
            includedLanguages: 'ca,eu,gl,en,fr,it,pt,de',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            gaTrack: true
        }, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<script>
    window.addEventListener("scroll", function() {
        var nav = document.querySelector("nav");
        nav.classList.toggle("dark", window.scrollY > 0, {
            passive: true
        });

    })
</script>
@stack('js')

</html>
