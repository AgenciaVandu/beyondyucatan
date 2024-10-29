<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? ''}} - Beyond Yucatan</title>
    @stack('scss')
</head>

<body>

    <x-layouts.nav />
    <main>
        {{$slot}}
    </main>
    <x-layouts.footer>

    </x-layouts.footer>
</body>

<script type="text/javascript">
function googleTranslateElementInit() {
	new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'ca,eu,gl,en,fr,it,pt,de', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true}, 'google_translate_element');
        }
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
    window.addEventListener("scroll", function(){
    var nav = document.querySelector("nav");
    nav.classList.toggle("dark", window.scrollY > 0, {passive: true} );

    })
   </script>
   @stack('js')
</html>
