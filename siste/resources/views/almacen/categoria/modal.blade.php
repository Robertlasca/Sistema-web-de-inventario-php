<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$cat->idcategoria}}">
	<form action="{{ action('CategoriaController@destroy', $cat->idcategoria) }}" method="POST">
    @method('DELETE')
    @csrf
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">

						<span aria-hidden="true">
							X
						</span>
						
					</button>

					<h4 class="modal-title">
						Eliminar categoría
					</h4>
					
				</div>

				<div class="modal-body">
					<p> COnfirme si deses eliminar la categoría</p>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal-body">
						Cerrar
					</button>

					<button type="submit" class="btn btn-primary">
						Confirmar
					</button>
				</div>
			</div>
		</div>
		
	</form>
	
</div>
