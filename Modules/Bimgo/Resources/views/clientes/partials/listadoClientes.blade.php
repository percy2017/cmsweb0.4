<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Empresa</th>
				<th>NIT</th>
				<th>Tipo de Persona</th>
				<th>Dirección</th>
				<th>Celular</th>
				<th>Telefono</th>
				<th>Nombre Cliente</th>
				<th>Correo</th>
				<th></th>				
			</tr>
		</thead>
		<tbody>
			@foreach ($datosClientes as $key => $cliente)
				<tr>
					<td>{{$key+1}}</td>
					<td>{{ $cliente->name }}</td>
					<td>{{ $cliente->nit }}</td>
					<td>{{ $cliente->type_person }}</td>
					<td>{{ $cliente->adress }}</td>
					<td>{{ $cliente->phone }}</td>
					<td>{{ $cliente->phone_number }}</td>
					<td>{{ $cliente->usuario->name }}</td>
					<td>{{ $cliente->usuario->email }}</td>
					<td>
						@can('edit', app($dataType->model_name))
							<a href="#" onClick = "fnDatoCliente({{ $cliente }});" title="Editar" class="btn btn-sm btn-primary pull-right edit" data-toggle="modal" data-target="#modalEditClientes">
					            <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Editar</span>
					        </a>
						@endcan
						@can('delete', app($dataType->model_name))					      
					        <a href="#" title="Borrar" class="btn btn-sm btn-danger pull-right delete" data-id="3" id="delete-3" onclick="ajax('{{ route('voyager.'.$dataType->name.'.destroy', $cliente->id) }}', 'delete')">
					            <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Borrar</span>
					        </a>
					    @endcan
				    </td>			
				</tr>
			@endforeach
		</tbody>
	</table>	
</div>
{{ $datosClientes ->links() }}
