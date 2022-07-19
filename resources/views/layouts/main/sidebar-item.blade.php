<li class="nav-item {{ Route::is($activePattern ?? null) ? 'active' : '' }}">
	<a class="nav-link" href="{{ $url }}">
		<img class="icon" src="{{ $iconUrl }}">
		<span>{{ $title }}</span>
	</a>
</li>