@extends('layouts.main',[
	'pageTitle' => $car->name,
])

@section('main')
	<h1>Diely pre auto {{ $car->name; }}</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Názov</th>
				<th>
					<div class="d-flex">
						<div class="btn-group btn-group-sm ml-auto">
							<button data-toggle="modal" data-target="#createPartModal" class="btn btn-red">Pridať <x-icons.add /></button>
						</div>
					</div>
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach($parts as $part)
				<tr>
					<td>
						{{ $part->id }}
					</td>
					<td>
						{{ $part->name }}
					</td>
					<td>
						<div class="d-flex">
							<div class="btn-group btn-group-sm ml-auto">
								<button data-toggle="modal" data-target="#editCarModal" data-car_id="{{ $car->id }}" data-id="{{ $part->id }}" data-name="{{ $part->name; }}" data-serial-number="{{ $part->serial_number }}" class="btn btn-azure">Upraviť <x-icons.edit /></button>
							</div>
							<button data-toggle="modal" data-target="#deletePartModal" data-id="{{ $part->id }}" data-car_id="{{ $car->id }}" data-name="{{ $part->name }}" class="btn btn-red no-margin"><x-icons.bin /></button>
						</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
@push('modals')
	@include('components.modal-create-part')
	@include('components.modal-edit-part')
	@include('components.modal-delete-part')
@endpush
