<div class="modal fade" id="createPartModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
            <form method="post" action="{{ route('partCreate') }}">
                @csrf
                <input type="hidden" name="car_id" value="{{ $car->id }}">
                <div class="modal-header">
					<h5 class="modal-title">Vytvorenie Dielu</h5>
					<button class="close" type="button" data-dismiss="modal">
						<span>&times;</span>
					</button>
				</div>
                <div class="modal-body">
					<label>Názov Dielu</label>
					<input type="text" name="name">
				</div>
                <div class="modal-body">
					<label>Sériové číslo</label>
					<input type="text" name="serial_number" class="serial-number">
				</div>
                <div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Zrušiť</button>
					<button type="submit" class="btn btn-red">Vytvoriť</button>
				</div>
            </form>
        </div>
    </div>
</div>