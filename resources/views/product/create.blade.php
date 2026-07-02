@extends('layouts.app')

@section('content')


    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="nombre">
</label>
<br>
<label>
    Precio:
    <br>
    <input type="number" name="precio">
</label>
<br>
<label>
    Peso:
    <br>
    <input type="number" name="peso">
</label>
<br>
<label>
    Tamano:
    <br>
    <input type="number" name="tamano">
</label>
<br>
<br>

{{-- {{$users}} --}}

<label for="user_id">Usuario</label>

    <select name="user_id" id="user_id" class="form-control">
        <option value="">Seleccione un usuario</option>

        @foreach($users as $user)
            <option value="{{ $user->id }}">
                {{ $user->name }}
            </option>
        @endforeach
    </select>

<br>
<br>

<button type="submit">Crear Producto:</button>
</form>

@endsection
