<div class="buscador">
    <div class="posicion">
        <div class="contenido__buscador">
            <form class="buscar">
                <div class="form-group option">
                    <select class="form-control" id="tipoCategoria">
                        @foreach ($categories as $category)
                        <option>{{ $category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group option">
                    <select class="form-control" id="zonaCategoria">
                        <option>Yucatán</option>
                        <option>Quintana Roo</option>
                        <option>Campeche</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="buscarbtn">
                    <button class="btn btn-success btnorange" href="">Buscar</button>
                </div>

            </form>

        </div>
    </div>
</div>
