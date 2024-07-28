@extends('welcome')


@section('content')

<div class="table-responsive">
    <br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">CATEGORIA</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">CANTIDAD</th>
                <th scope="col">PRECIO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ( $productos as $producto ) 
            <tr class="">
                <td scope="row">{{$i ++}}</td>
                <td>{{$producto->Categoria->nombre}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->cantidad}}</td>
                <td>{{$producto->precio}}</td>
                <td>
                <!--Boton para Agregar-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                    Nuevo
                    </button>
                    <!--Boton para Editar-->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$producto->id}}">
                    Editar
                  </button>
                  <!--Boton para Eliminar-->
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$producto->id}}">
                    Borrar
                  </button>
            </td>
            @include('producto.info')
         @endforeach
           
        </tbody>
    </table>
</div>
@include('producto.create')


@endsection