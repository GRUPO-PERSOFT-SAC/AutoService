@extends ('layouts.admin')
@section ('contenido')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <div class="mdc-layout-grid__cell--span-12">
        <div class="mdc-card">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3>Editar Articulo: {{ $articulo->nombre }}</h3>
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
            </div>

			{!!Form::model($articulo,['method'=>'PATCH','route'=>['articulo.update',$articulo->idarticulo],'files'=>'true'])!!}
            {{Form::token()}}
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" required values="{{$articulo->nombre}}" class="form-control">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label>Categoria</label>
                        <select name="idcategoria" class="form-control">
                            @foreach ($categorias as $cat)
                                @if ($cat->idcategoria==$articulo->idcategoria)
                                    <option value="{{$cat->idcategoria}}" selected>{{$cat->nombre}}</option>
                                    @else
                                    <option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="codigo">Código</label>
                        <input type="text" name="codigo" required values="{{$articulo->codigo}}" class="form-control">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="text" name="stock" required values="{{$articulo->stock}}" class="form-control">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input type="text" name="descripcion" required values="{{$articulo->descripcion}}" class="form-control">
                    </div>
                </div>


                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <button class="mdc-button mdc-button--raised filled-button--success mdc-ripple-upgraded" type="submit">Guardar</button>
                        <button class="mdc-button mdc-button--raised filled-button--secondary mdc-ripple-upgraded" type="reset">Cancelar</button>
                    </div>
                </div>
            </div>
			{!!Form::close()!!}		
        </div>
    </div>
</div>
@endsection