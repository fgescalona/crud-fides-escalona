@extends('layouts.app')

@section('content')

<div class="container">

	<h1>Lista de bienes</h1>


	<!-- Imprime Mensaje al crear, editar o eliminar un registro -->
	@if(Session::has('mensaje')) 
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{ Session::get('mensaje') }}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
		</div> 
	@endif


	<a href="{{ url('goods/create') }}" class="btn btn-success">Agregar Bien</a>	

	<br/><br/>

	<table class="table table-light table-hover">

		<thead class="thead-light">
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Precio</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>
			@foreach($bienes as $bien)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$bien->name}}</td>
					<td>{{$bien->description}}</td>
					<td>{{$bien->value}}</td>
					<td>
						<a href="{{ url('goods/' . $bien->id . '/edit') }}" class="btn btn-primary">Editar</a>
						<form method="POST" action="{{ url('/goods/' . $bien->id) }}" style="display: inline;">

							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button type="submit" onclick="return confirm('¿Está seguro que desea eliminar este registro?');" class="btn btn-danger">Eliminar</button>

						</form>
					</td>
				</tr>
			@endforeach
		</tbody>

	</table>

	{{ $bienes->links() }}

</div>

@endsection