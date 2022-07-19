<div class="modal fade" id="createCarModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
            <form method="post" action="{{ route('createCar') }}">
                @csrf
                <div class="modal-header">
					<h5 class="modal-title">Vytvorenie Auta</h5>
					<button class="close" type="button" data-dismiss="modal">
						<span>&times;</span>
					</button>
				</div>
                <div class="modal-body">
					<label>Názov Auta</label>
					<input type="text" name="name">
				</div>
                <div class="modal-body">
					<label>Registračné číslo</label>
					<input type="text" name="registration_number">
				</div>
                <div class="modal-body">
					<label>Je auto registrované?</label>
					<input type="checkbox" value="On" name="is_register">
				</div>
                <div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Zrušiť</button>
					<button type="submit" class="btn btn-red">Vytvoriť</button>
				</div>
            </form>
        </div>
    </div>
</div>