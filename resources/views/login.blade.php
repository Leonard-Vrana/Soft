@extends('layouts.empty',[
	'pageTitle' => 'Prihlásenie ',
])

@section('body')
	<section id="login">
		<div class="container">
			<div class="row">
				<div class="col-md-4 d-flex wh-100 mx-auto">
					<div class="m-auto">
						@include('components.messages')
						<form method="post" action="{{ route("login") }}">
							@csrf
							<label for="email" class="mt-3">E-mail*</label>
							<input id="email" type="email" name="email">
							<label for="password" class="mt-3">Heslo*</label>
							<input id="password" type="password" name="password">
							<div class="col-12 text-center">
								<button class="mt-4 btn btn-red" type="submit">Prihlásiť sa</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection