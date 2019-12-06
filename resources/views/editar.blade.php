@extends('layouts.app')

@section('content')

<div class="container">

	<h1>Editar Bien</h1>

	<form action="{{ url('/goods/' . $bien->id) }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PATCH') }}

		<div class="form-group">
			<label for="name" class="control-label">Nombre</label>
			<input class="form-control" type="text" id="name" name="name" value="{{ $bien->name }}"></input>
		</div>
		
		<div class="form-group">
			<label for="description" class="control-label">Descripción</label>
			<textarea class="form-control" name="description" rows="10" cols="50">{{ $bien->description }}</textarea>
		</div>

		<div class="form-group">
			<label for="value" class="control-label">Valor</label>
			<input class="form-control" type="number" id="value" name="value" step="0.01" value="{{ $bien->value }}"></input>
		</div>

		<input type="submit" value="Editar" class="btn btn-success">

		<a href="{{ url('goods') }}" class="btn btn-primary">Lista de bienes</a>
	</form>

</div>

@endsection