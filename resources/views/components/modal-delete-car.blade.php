<div class="modal fade" id="deleteCarModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="post" action="{{ route('deleteCar') }}">
				@csrf
				<input type="hidden" name="id" class="id">
				<input type="hidden" name="car_id" class="car_id">
				<div class="modal-header">
					<h5 class="modal-title">Odstránenie</h5>
					<button class="close" type="button" data-dismiss="modal">
						<span>&times;</span>
					</button>
				</div>
				<div class="modal-body">Naozaj chcete tento diel (<span class="name"></span>) vymazať?</div>
				<div class="modal-footer">
					<button class="btn btn-dark" type="button" data-dismiss="modal">Zrušiť</button>
					<button type="submit" class="btn btn-red">Odstrániť</button>
				</div>
			</form>
		</div>
	</div>
</div>