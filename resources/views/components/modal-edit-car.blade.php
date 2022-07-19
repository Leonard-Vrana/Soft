<div class="modal fade" id="editCarModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
            <form method="post" action="{{ route("editCar") }}">
                @csrf
                <input class="id" name="id" type="hidden" value="0">
                <div class="modal-header">
                    <h5 class="modal-title">Editácia auta <span class="name"></span></h5>
                    <button class="close" type="button" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
					<label>Názov Auta</label>
					<input type="text" class="name" name="name">
				</div>
                <div class="modal-body">
					<label>Registračné číslo</label>
					<input type="text" class="registration-number" name="registration-number">
				</div>
                <div class="modal-body">
					<label>Je auto registrované?</label>
					<input type="checkbox" value="On" class="is_register" name="is_register">
				</div>
                <div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Zrušiť</button>
					<button type="submit" class="btn btn-red">Upraviť</button>
				</div>
            </form>
        </div>
    </div>
</div>