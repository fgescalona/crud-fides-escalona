@extends('layouts.app')

@section('content')

	<div class="container">

		<h1>Crear Bien</h1>

		<form action="{{ url('/goods') }}" method="POST" class="form-horizontal">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="name" class="control-label">Nombre</label>
				<input type="text" id="name" name="name" class="form-control"></input>
			</div>

			<div class="form-group">
				<label for="description" class="control-label">Descripción</label>
				<textarea name="description" rows="10" cols="50" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<label for="value" class="control-label">Valor</label>
				<input type="number" id="value" name="value" step="0.01" class="form-control"></input>
			</div>
			
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{{ url('goods') }}" class="btn btn-primary">Lista de bienes</a>
		</form>
	
	</div>

@endsection