@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        @include('backend.partials.sidebar')
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Crear Bebida</div>
                <div class="card-body">
                    @include('partials.errors')
                    <form method="POST" action="{{ route('drinks.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="drinkname">Nombre</label>
                            <input type="text" name="name" class="form-control" id="drinkname" placeholder="Escriba el nombre de la bebida" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="drinkprice">Precio</label>
                            <input type="text" name="price" class="form-control" id="drinkprice" placeholder="Ejemplo: 30.50" value="{{old('price')}}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{route('drinks.index')}}" class="btn btn-secondary">Atrás</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
