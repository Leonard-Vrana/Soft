@extends('layouts.empty')

@section('body')
	<div id="wrapper">
		@include('layouts.main.sidebar')
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<div class="container-fluid px-4 pt-4">
					@include('components.messages')
				</div>
				<div class="container-fluid p-4">
					@yield('main')
				</div>
				<div class="container-fluid px-4 footer my-4">
					<div class="row">
						<div class="col-12 text-right">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('layouts.main.modal-logout')
	@stack('modals')
@endsection