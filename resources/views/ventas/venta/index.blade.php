@extends ('layouts.admin')
@section ('contenido')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Listado de Ventas<a href="venta/create"> <button class="btn  btn-primary ">Nuevo</button> </a></h3>
        @include('ventas.venta.search')
    </div>
        <div class="box-body">

                    <div class="box-body table-responsive ">
                        <table class="table table-hover table-bordered table-responsive ">
                            <thead>
                            <tr>  
                                <th>Fecha</th>
                                <th>Cliente</th>
                                <th>Comprobante</th>
                                <th>Impuesto</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th>Opciones</th>      
                                </tr>                    
                            </thead>
                            @foreach ($ventas as $ven)
                            <tr>
                                <td>{{ $ven->fecha_hora}}</td>
                                <td>{{ $ven->nombre}}</td>
                                <td>{{ $ven->tipo_comprobante.': '.$ven->serie_comprobante.'-'.$ven->num_comprobante}}</td>
                                <td>{{ $ven->impuesto}}</td>
                                <td>{{ $ven->total_venta}}</td>
                                <td>{{ $ven->estado}}</td>
                                <td class="text-right">
                                    <a href="{{URL::action('VentaController@show',$ven->idventa)}}">
                                    <button class="btn bg-primary margin">Detalles</button>
                                    </a>
    
                                    <a href="" data-target="#modal-delete-{{$ven->idventa}}" data-toggle="modal">
                                    <button class="btn bg-maroon margin">Anular</button>
                                    </a>
                                </td>
                            </tr>
                            @include('ventas.venta.modal')
                            @endforeach
                        </table>
                    </div>   
                    {{$ventas->render()}}
        
            
        </div>
</div>
@endsection
