@extends ('layouts.admin')
@section ('contenido')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Nuevo Articulo</h3>
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
	    
            {!!Form::open(array('url'=>'almacen/articulo','method'=>'POST','autocomplete'=>'off','file'=>'true'))!!}
            {{Form::token()}}
            <div class="form-group col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre...">
            </div>

            <div class="form-group col-md-6">
                <label>Categoria</label>
                <select name="idcategoria" class="form-control">
                    @foreach ($categorias as $cat)
                        <option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="codigo">Código</label>
                <input type="text" name="codigo" required value="{{old('codigo')}}" class="form-control" placeholder="Código del artículo...">
            </div>

            <div class="form-group col-md-6">
                <label for="stock">Stock</label>
                <input type="text" name="stock" required value="{{old('stock')}}" class="form-control" placeholder="Stock del artículo...">
            </div>

            <div class="form-group col-md-6">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" value="{{old('descripcion')}}" class="form-control" placeholder="Descripción del artículo...">
            </div> 

            <div class="form-group col-md-6">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" class="form-control">
            </div>
       <br>
            <div class="form-group col-md-6">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
  
			{!!Form::close()!!}		
            
	
	</div>
</div>
@endsection