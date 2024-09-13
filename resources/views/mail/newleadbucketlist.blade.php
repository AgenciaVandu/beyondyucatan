<x-mail::message>
Bucketlist: {{ $titulo }}
<x-mail::panel>
Nombre: {{ $name }}
<br>
Email: {{ $mail }}
<br>
Celular: {{ $tel }}
<br>
Adultos: {{ $adultos }}
<br>
Niños: {{ $kids }}
<br>
Fecha llegada: {{ $fechallegada }}
<br>
Mensaje: {{ $message }}
</x-mail::panel>
    {{ config('app.name') }}
</x-mail::message>
