<div id="modalCreateClientes" class="modal fade" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>
                    <i class="voyager-plus"></i> Nuev@: {{ $dataType->display_name_singular }}
                </h4>
			</div>

			<form id="frmCliente">
				{{-- class="frmCliente" role="form" action="{{ route('voyager.bg_customers.store') }}" method="POST" enctype="multipart/form-data" --}}
				<div class="modal-body">
					<div class="row">						
						<div class="col-md-6">
							<div class="form-group">
								<label>Tipo Persona:</label>
								<select class="form-control" id="ddlTipoPersona" name="ddlTipoPersona" data-placeholder="Seleccionar Tipo Persona">
					                <option></option>
					                <option value="Natural">
					                    Natural
					                </option>
					                <option value="Juridica">
					                    Juridica
					                </option>                
					            </select>
		                    </div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Nombre:</label>
								<input type="text" id="txtEmpresa" name="txtEmpresa" placeholder="Empresa" class="form-control">
		                    </div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>NIT:</label>
								<input type="text" id="txtNIT" name="txtNIT" placeholder="NIT" class="form-control">
		                    </div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Nombre del Cliente:</label>
								<input type="text" id="txtCliente" name="txtCliente" placeholder="Cliente" class="form-control">
		                    </div>
						</div>
						
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Correo:</label>
								<input type="text" id="txtCorreo" name="txtCorreo" placeholder="Correo" class="form-control">
		                    </div>		                    
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Dirección:</label>
								<input type="text" id="txtDireccion" name="txtDireccion" placeholder="Dirección" class="form-control">
		                    </div>		                    
						</div>	
					</div>


					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Celular:</label>
								<input type="text" id="txtCelular" name="txtCelular" placeholder="Celular" class="form-control">
		                    </div>		                    
						</div>
						<div class="col-md-6">							
							<div class="form-group">
								<label>Telefono:</label>
								<input type="text" id="txtTelefono" name="txtTelefono" placeholder="Telefono" class="form-control">
		                    </div>
						</div>						
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-sm  btn-primary" id="btnRegistrar" data-dismiss="modal"><i class="voyager-edit"></i> {{ __('voyager::generic.save') }}</button>
					{{-- <button type="submit" id="button_submit" class="btn btn-sm  btn-primary"><i class="voyager-edit"></i> {{ __('voyager::generic.save') }}</button> --}}
					<button type="button" data-dismiss="modal" class="btn btn-sm btn-success"><i class="voyager-double-left"></i>Cancelar</button>				
				</div>
			</form>
		</div>
	</div>
</div>