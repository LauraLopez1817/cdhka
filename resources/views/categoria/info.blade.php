 <!-- Modal edit -->
 <div class="modal fade" id="edit{{$categoria->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR CATEGOTIA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
<!--Metodo store para que guarde los datos-->
        <form action="{{route('categorias.update',$categoria->id)}}" method="post">
        @csrf
        <!--Metodo para editar-->
        @method('PUT')

       
        <div class="modal-body">

          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text"
                class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$categoria->nombre}}" />
          </div>
          
          <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text"
                class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder=""  value="{{$categoria->descripcion}}"/>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
      </div>
    </div>
  </div>




   <!-- Modal edit -->
 <div class="modal fade" id="delete{{$categoria->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR CATEGOTIA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
<!--Metodo store para que guarde los datos-->
        <form action="{{route('categorias.destroy',$categoria->id)}}" method="post">
        @csrf
        <!--Metodo para editar-->
        @method('DELETE')

       
        <div class="modal-body">

            Esta seguro de borrar a <strong>{{$categoria->nombre}}?</strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
      </div>
    </div>
  </div>