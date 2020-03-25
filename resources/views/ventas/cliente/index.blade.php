@extends ('layouts.admin')
@section ('contenido')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Listado de Clientes <a href="cliente/create"> <button class="btn  btn-primary ">Nuevo</button> </a></h3>
        @include('ventas.cliente.search')
    </div>
        <div class="box-body">

                    <div class="box-body table-responsive ">
                        <table class="table table-hover table-bordered table-responsive ">
                            <thead>
                            <tr class="color-blue">
                                <th class="text-left">Id</th>
                                <th>Nombre</th>
                                <th>Tipo Doc.</th>
                                <th>Número Doc.</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            @foreach ($personas as $per)
                            <tr>
                                <td class="text-left">{{ $per->idpersona}}</td>
                                <td>{{ $per->nombre}}</td>
                                <td>{{ $per->tipo_documento}}</td>
                                <td>{{ $per->num_documento}}</td>
                                <td>{{ $per->telefono}}</td>
                                <td>{{ $per->email}}</td>

                                <td class="text-right">
                                    <a href="{{URL::action('ClienteController@edit',$per->idpersona)}}">
                                    <button class="btn bg-orange margin">Editar</button>
                                    </a>

                                    <a href="" data-target="#modal-delete-{{$per->idpersona}}" data-toggle="modal">
                                    <button class="btn bg-maroon margin">Eliminar</button>
                                    </a>
                                </td>
                            </tr>
                            @include('ventas.cliente.modal')
                            @endforeach
                        </table>
                    </div>   
                    {{$personas->render()}}
        
            
      </div>
</div>
@endsection
