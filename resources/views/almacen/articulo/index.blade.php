@extends ('layouts.admin')
@section ('contenido')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Listado de Articulos <a href="articulo/create"> <button class="btn  btn-primary ">Nuevo</button> </a></h3>
        @include('almacen.articulo.search')
    </div>
        <div class="box-body">

                    <div class="box-body table-responsive ">
                        <table class="table table-hover table-bordered table-responsive ">
                            <thead>
                            <tr class="color-blue">
                                <th class="text-left">Id</th>
                                <th>Nombre</th>
                                <th>Codigo</th>
                                <th>Categoría</th>
                                <th>Stock</th>
                      
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            @foreach ($articulos as $art)
                            <tr>
                                <td class="text-left">{{ $art->idarticulo}}</td>
                                <td>{{ $art->nombre}}</td>
                                <td>{{ $art->codigo}}</td>
                                <td>{{ $art->categoria}}</td>
                                <td>{{ $art->stock}}</td>

                                <td>
                                    <img src="{{asset('imagenes/articulos/'.$art->imagen)}}" alt="{{ $art->nombre}}" heigth="100px" width="100px" class="img-thumbnail">
                                </td>

                                <td>{{ $art->estado}}</td>

                                <td class="text-right">
                                <a href="{{URL::action('ArticuloController@edit',$art->idarticulo)}}">
                                    <button class="btn bg-orange margin">Editar</button>
                                    </a>

                                    <a href="" data-target="#modal-delete-{{$art->idarticulo}}" data-toggle="modal">
                                    <button class="btn bg-maroon margin">Eliminar</button>
                                    </a>
                                </td>
                            </tr>
                            @include('almacen.articulo.modal')
                            @endforeach
                        </table>
                    </div>   
                    {{$articulos->render()}}
        
            
      </div>
</div>
@endsection
