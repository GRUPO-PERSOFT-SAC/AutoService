@extends ('layouts.admin')
@section ('contenido')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Editar Cliente: {{ $persona->nombre }}</h3>
            @if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
    </div>

    <div class="box-body">
            {!!Form::model($persona,['method'=>'PATCH','route'=>['cliente.update',$persona->idpersona]])!!}
            {{Form::token()}}
            
            <div class="form-group col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required value="{{$persona->nombre}}" class="form-control" placeholder="Nombre...">
            </div>

            <div class="form-group col-md-6">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" value="{{$persona->direccion}}" class="form-control" placeholder="Dirección...">
            </div>

            <div class="form-group col-md-6">
                <label>Documento</label>
                <select name="tipo_documento" class="form-control">
                    @if ($persona->tipo_documento=='DNI')
                        <option value="DNI" selected>DNI</option>
                        <option value="RUC">RUC</option>
                        <option value="PAS">PAS</option>
                    @elseif ($persona->tipo_documento=='RUC')
                        <option value="DNI" >DNI</option>
                        <option value="RUC" selected>RUC</option>
                        <option value="PAS">PAS</option>
                    @else
                        <option value="DNI" >DNI</option>
                        <option value="RUC">RUC</option>
                        <option value="PAS" selected>PAS</option>
                    @endif
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="num_documento">Número documento</label>
                <input type="text" name="num_documento" value="{{$persona->num_documento}}" class="form-control" placeholder="Número de Documento...">
            </div>

            <div class="form-group col-md-6">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" value="{{$persona->telefono}}" class="form-control" placeholder="Teléfono...">
            </div> 

            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{$persona->email}}" class="form-control" placeholder="Email...">
            </div>

            <div class="form-group col-md-6">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
        
    </div>
</div>
@endsection