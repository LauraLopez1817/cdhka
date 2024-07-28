@extends('welcome')


@section('content')

<div class="table-responsive">
    <table class="table">
        <thead class="bg-dark  tect-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">DESCRIPCION</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ( $categorias as $categoria ) 
            <tr class="">
                <td scope="row">{{$i ++}}</td>
                <td>{{$categoria->nombre}}</td>
                <td>{{$categoria->descripcion}}</td>
            <td>
                <!--Boton para Agregar-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                    Nuevo
                    </button>
                    <!--Boton para Editar-->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$categoria->id}}">
                    Editar
                  </button>
                  <!--Boton para Eliminar-->
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$categoria->id}}">
                    Borrar
                  </button>
            </td>
            @include('categoria.info')
        
         @endforeach
           
        </tbody>
    </table>
</div>
@include('categoria.create')


@endsection