<ul class="navbar-nav sidebar accordion pt-5 toggled" id="accordionSidebar">

	@include('layouts.main.sidebar-item', [
		'url' => route('homepage'),
		'activePattern' => '',
		'iconUrl' => asset('images/icons/home.svg'),
		'title' => 'Inventár',
	])

	<hr class="sidebar-divider">


	<li class="nav-item mt-auto">
		<div class="nav-link toggle logout">
			<button class="btn btn-side w-100" data-toggle="modal" data-target="#logout-modal">
				<span class="text">Odhlásenie</span>
				<img class="icon" src="{{ asset('images/icons/logout.svg') }}">
			</button>
		</div>
	</li>
</ul>