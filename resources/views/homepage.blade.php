@extends('layouts.main',[
	'pageTitle' => 'Home ',
])

@section('main')
	<h1>Autá</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Názov</th>
				<th>
					<div class="d-flex">
						<div class="btn-group btn-group-sm ml-auto">
							<button data-toggle="modal" data-target="#createCarModal" class="btn btn-red">Pridať <x-icons.add /></button>
						</div>
					</div>
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cars as $car)
				<tr>
					<td>
						{{ $car->id }}
					</td>
					<td>
						{{ $car->name }}
					</td>
					<td>
						<div class="d-flex">
							<div class="btn-group btn-group-sm ml-auto">
								<a href="{{ route('detail.show', $car->id) }}" class="btn btn-secondary">Zobraziť diely<x-icons.eye /></a>
								<button data-toggle="modal" data-target="#editCarModal" data-id="{{ $car->id }}" data-name="{{ $car->name }}" data-registration-number="{{ $car->registration_number }}" class="btn btn-azure">Upraviť <x-icons.edit /></button>
								<button data-toggle="modal" data-target="#deleteCarModal" data-id="{{ $car->id }}" data-name="{{ $car->name }}" class="btn btn-red no-margin"><x-icons.bin /></button>
							</div>
						</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
@push('modals')
	@include('components.modal-create-car')
	@include('components.modal-edit-car')
	@include('components.modal-delete-car')
@endpush
