<div class="modal fade" id="editCarModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
            <form method="post" action="{{ route("partEdit") }}">
                @csrf
                <input class="id" name="id" type="hidden" value="0">
                <input class="car_id" name="car_id" type="hidden" value="0">
                <div class="modal-header">
                    <h5 class="modal-title">Editácia dielu <span class="name"></span></h5>
                    <button class="close" type="button" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
					<label>Názov Dielu</label>
					<input type="text" class="name" name="name">
				</div>
                <div class="modal-body">
					<label>Sériové číslo</label>
					<input type="text" class="serial-number" name="serial_number">
				</div>
                <div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Zrušiť</button>
					<button type="submit" class="btn btn-red">Upraviť</button>
				</div>
            </form>
        </div>
    </div>
</div>