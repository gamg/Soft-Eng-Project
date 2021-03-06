@extends('layouts.app')

@section('content')
@inject('tpizzas', 'App\Services\Tpizzas')
<div class="container-fluid">
    <div class="row justify-content-center">
        @include('backend.partials.sidebar')
        
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Crear Pizza</div>
                <div class="card-body">
                    @include('partials.errors')
                    <form method="POST" action="{{ route('pizzas.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="tpizza">Tipo de pizza</label>
                            <select name="tpizza_id" class="form-control" id="tpizza">
                                @foreach($tpizzas->get() as $id => $tpizza)
                                    <option value="{{$id}}" {{ (old('tpizza_id') == $id) ? 'selected' : '' }}>{{ $tpizza }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pizzasize">Tamaño</label>
                            <select name="size" class="form-control" id="pizzasize">
                                <option value="">Selecciona un amaño</option>
                                <option value="Pequeña" {{ (old('size') == 'Pequeña') ? 'selected' : '' }}>Pequeña</option>
                                <option value="Grande" {{ (old('size') == 'Grande') ? 'selected' : '' }}>Grande</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pizzaprice">Precio</label>
                            <input type="text" name="price" class="form-control" id="pizzaprice" placeholder="Ejemplo: 30.50" value="{{old('price')}}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{route('pizzas.index')}}" class="btn btn-secondary">Atrás</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
