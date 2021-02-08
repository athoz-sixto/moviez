<div class="modal fade" id="modal-delete-{{$pelicula->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="{{route('moviez.destroy',$pelicula->id)}}" method="post">
        @csrf
        @method('DELETE')
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Eliminar registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Va a eliminar el registro de la película <br>
                {{$pelicula->titulo_original."(".$pelicula->anio.")"}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar  </button>
                <input type="submit" class="btn btn-danger" value="Eliminar">
            </div>
        </div>
    </form>
  </div>
</div>