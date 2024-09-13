<x-mail::message>
<h1>Nuevo Lead</h1>
<x-mail::panel>
Name: {{ $name }}
<br>
Email: {{ $email }}
<br>
Phone: {{ $phone }}
<br>
Country: {{ $country }}
<br>
Message: {{ $message }}
</x-mail::panel>

<br>
{{ config('app.name') }}
</x-mail::message>
