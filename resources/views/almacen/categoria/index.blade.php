@extends ('layouts.admin')
@section ('contenido')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Listado de Categorias <a href="categoria/create"> <button class="btn  btn-primary ">Nuevo</button> </a></h3>
        @include('almacen.categoria.search')
    </div>
        <div class="box-body">
            <div class="box-body table-responsive ">
                <table class="table table-hover table-bordered table-responsive ">
                    <thead>
                    <tr>
                        <th class="text-left">Id</th>
                        <th>Nombre</th>
                        <th class="text-center">Descripción</th>
                        <th class="text-right">Opciones</th>
                    </tr>
                    </thead>
                    @foreach ($categorias as $cat)
                    <tr>
                        <td class="text-left">{{ $cat->idcategoria}}</td>
                        <td>{{ $cat->nombre}}</td>
                        <td>{{ $cat->descripcion}}</td>
                        <td class="text-right">
                            <a href="{{URL::action('CategoriaController@edit',$cat->idcategoria)}}">
                                <button class="btn bg-orange margin">Editar</button>
                            </a>

                            <a href="" data-target="#modal-delete-{{$cat->idcategoria}}" data-toggle="modal">
                                <button class="btn bg-maroon margin">Eliminar</button>
                            </a>
                        </td>
                    </tr>
                    @include('almacen.categoria.modal')
                    @endforeach
                </table>
            </div>   
                    {{$categorias->render()}}         
        </div>
</div>
@endsection
