@extends ('layouts.admin')
@section ('contenido')

	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Editar categoría: {{$categoria->nombre}} </h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>

				@foreach($errors-> all() as $error)
				<li> {{$error}}</li>

				@endforeach
			</ul>
		</div>
		@endif

		
		<form method="POST" action="{{ route('almacen.categoria.update', $categoria->idcategoria) }}">
    	@method('PATCH')
		@csrf
			<div class="form-group">
				<label for="nombre">
					Nombre
				</label>
				<input type="text" name="nombre" class="form-control" value="{{$categoria->nombre}}" placeholder="Servicio">
			</div>

			<div class="form-group">
				<label for="descripcion">
					Descripcion
				</label>
				<input type="text" name="descripcion" class="form-control" value="{{$categoria->descripcion}}"placeholder="Descripcion">
			</div>

			<div class="form-group">
				<button class="btn btn-primary" type="submit">
					Guardar
				</button>
				<button class="btn btn-danger" type="reset">
					Limpiar
				</button>
			</div>
			
		</form>
		
	</div>
@endsection

