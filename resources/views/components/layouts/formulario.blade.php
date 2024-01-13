<div class="container">
    <div class="titular_form">
        <h1>{{$formtitle ?? ''}}</h1>
        <p>{{$slot ?? ''}}</p>
    </div>
    <p class="denominacion">{{$denominacion ?? ''}}</p>
    <div class="formu">
        {{$forms ?? ''}}
    </div>
</div>