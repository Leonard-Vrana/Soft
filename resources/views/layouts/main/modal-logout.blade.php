<div class="modal fade" id="logout-modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="post" action="{{ route("logout") }}">
				@csrf
				<div class="modal-header">
					<h5 class="modal-title">Odhlásenie</h5>
					<button class="close" type="button" data-dismiss="modal">
						<span>&times;</span>
					</button>
				</div>
				<div class="modal-body">Naozaj sa chcete odhlásiť?</div>
				<div class="modal-footer">
					<button class="btn btn-dark" type="button" data-dismiss="modal">Zrušiť</button>
					<button class="btn btn-red" type="submit">Odhlásiť sa</button>
				</div>
			</form>
		</div>
	</div>
</div>