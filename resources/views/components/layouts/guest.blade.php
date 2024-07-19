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
<script>
    window.addEventListener("scroll", function(){
    var nav = document.querySelector("nav");
    nav.classList.toggle("dark", window.scrollY > 0, {passive: true} );

    })
   </script>
</html>
