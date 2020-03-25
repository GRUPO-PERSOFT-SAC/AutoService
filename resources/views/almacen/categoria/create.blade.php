@extends ('layouts.admin')
@section ('contenido')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Nueva Categoria</h3>
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
	    
			{!!Form::open(array('url'=>'almacen/categoria','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre...">
            </div>

            <div class="form-group col-md-6">
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" placeholder="Descripcion...">
            </div>
     
            <div class="form-group col-md-6">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
	
	</div>
</div>
@endsection