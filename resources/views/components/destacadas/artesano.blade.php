<section class="artesano">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 img_artesano text-center">
                {{$fotoartesano ?? ''}}

            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                <h2>{{$tituloartesano ?? ''}}</h2>
                <p>{{$descripcionartesano ?? ''}}</p>
               <div>
                {{$redesartesanos ?? ''}}
               </div>
            </div>
        </div>
        {{$imgartesano ?? ''}}

    </div>
</section>
