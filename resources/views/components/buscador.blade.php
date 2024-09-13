<div class="buscador">
    <div class="posicion">
        <div class="contenido__buscador">
            <form class="buscar" action="{{route('filter')}}" method="POST">
                @csrf
                @method('POST')
                <div class="form-group option">
                    <select class="form-control" id="tipoCategoria" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group option">
                    <select class="form-control" id="zonaCategoria" name="state_id">
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" name="filtro" value="{{ $filtro }}">
                <div class="buscarbtn">
                    <button class="btn btn-success btnorange">Buscar</button>
                </div>
            </form>
        </div>
    </div>
</div>
