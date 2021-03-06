@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        @include('backend.partials.sidebar')
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editando Extra</div>
                <div class="card-body">
                    @include('partials.errors')
                    <form method="POST" action="{{ route('extras.update', $extra->id) }}">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="extraname">Nombre</label>
                            <input type="text" name="name" class="form-control" id="extraname" placeholder="Escriba el nombre del extra" value="{{(!empty(old('name'))) ? old('name') : $extra->name }}">
                        </div>
                        <div class="form-group">
                            <label for="extraprice">Precio</label>
                            <input type="text" name="price" class="form-control" id="extraprice" placeholder="Ejemplo: 30.50" value="{{(!empty(old('price'))) ? old('price') : $extra->price }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <a href="{{route('extras.index')}}" class="btn btn-secondary">Atrás</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
