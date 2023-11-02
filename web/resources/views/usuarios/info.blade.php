<div class="modal fade" id="modalEliminar{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">  ELIMINAR USUARIO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('usuarios.destroy',$user->id)}}" method="post">
                @csrf
                @method('DELETE')

                <div class="modal-body">
                    Hola <strong>{{$user->name}}?</strong> estas seguro que quieres eleminar este usuario.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="userModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> DETALLES USUARIO</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row ">
                        <div class="col-md-6">
                            <img src="{{ asset('dist/img/avatar5.png')}}" class="card-img-top" alt="User Image">
                        </div>
                        <div class="col-md-6">
                        <div class="card-body">
                            <h2 class="display-6">{{$user->name}}</h2>
                            <p class="lead">Email: {{$user->email}}</p>
                            <p class="lead">celular: {{$user->celular}}</p>
                            <p class="lead">Ingreso: {{$user->created_at}}</p>
                            <p class="lead">Actualización: {{$user->updated_at}}</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Modal -->

