@extends ('layouts.admin')
@section ('contenido')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Listado de Usuarios <a href="usuario/create"> <button class="btn  btn-primary ">Nuevo</button> </a></h3>
        @include('seguridad.usuario.search')
    </div>
        <div class="box-body">
            <div class="box-body table-responsive ">
                <table class="table table-hover table-bordered table-responsive ">
                    <thead>
                    <tr>
                        <th class="text-left">Id</th>
                        <th>Nombre</th>
                        <th class="text-center">Email</th>
                        <th class="text-right">Opciones</th>
                    </tr>
                    </thead>
                    @foreach ($usuarios as $usu)
                    <tr>
                        <td class="text-left">{{ $usu->id}}</td>
                        <td>{{ $usu->name}}</td>
                        <td>{{ $usu->email}}</td>
                        <td class="text-right">
                            <a href="{{URL::action('UsuarioController@edit',$usu->id)}}">
                                <button class="btn bg-orange margin">Editar</button>
                            </a>

                            <a href="" data-target="#modal-delete-{{$usu->id}}" data-toggle="modal">
                                <button class="btn bg-maroon margin">Eliminar</button>
                            </a>
                        </td>
                    </tr>
                    @include('seguridad.usuario.modal')
                    @endforeach
                </table>
            </div>   
                    {{$usuarios->render()}}         
        </div>
</div>
@endsection
