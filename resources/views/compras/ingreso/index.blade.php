@extends ('layouts.admin')
@section ('contenido')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Listado de Ingresos <a href="ingreso/create"> <button class="btn  btn-primary ">Nuevo</button> </a></h3>
        @include('compras.ingreso.search')
    </div>
        <div class="box-body">

                    <div class="box-body table-responsive ">
                        <table class="table table-hover table-bordered table-responsive ">
                            <thead>
                            <tr>  
                                <th>Fecha</th>
                                <th>Proveedor</th>
                                <th>Comprobante</th>
                                <th>Impuesto</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th>Opciones</th>      
                                </tr>                    
                            </thead>
                            @foreach ($ingresos as $ing)
                            <tr>
                                <td>{{ $ing->fecha_hora}}</td>
                                <td>{{ $ing->nombre}}</td>
                                <td>{{ $ing->tipo_comprobante.': '.$ing->serie_comprobante.'-'.$ing->num_comprobante}}</td>
                                <td>{{ $ing->impuesto}}</td>
                                <td>{{ $ing->total}}</td>
                                <td>{{ $ing->estado}}</td>
                                <td class="text-right">
                                    <a href="{{URL::action('IngresoController@show',$ing->idingreso)}}">
                                    <button class="btn bg-primary margin">Detalles</button>
                                    </a>
    
                                    <a href="" data-target="#modal-delete-{{$ing->idingreso}}" data-toggle="modal">
                                    <button class="btn bg-maroon margin">Anular</button>
                                    </a>
                                </td>
                            </tr>
                            @include('compras.ingreso.modal')
                            @endforeach
                        </table>
                    </div>   
                    {{$ingresos->render()}}
        
            
      </div>
</div>
@endsection
