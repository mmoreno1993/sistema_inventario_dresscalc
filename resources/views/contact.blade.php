@extends('master.layout')
@section('title')
DressCalc
@endsection
@section('contact')
active
@endsection
@section('content')
<div class="panel panel-primary" style="background: white;">
	<div class="panel-heading"><h3>Reportes</h3></div>
	<div class="panel-body">
		<div id="exTab1" class="container">	
				<div class="form-group" style="text-align:center;">
					<div class="row">
						<div class="col-sm-6">
							<a style="width: 40%" href="/contact/ventas" target="_blank" class="btn btn-primary">Ventas</a>
						</div>
						<div class="col-sm-6">
							<a style="width: 40%" href="/contact/gastos" target="_blank" class="btn btn-primary">Gastos</a>
						</div>
						
					</div>
					
					
				</div>
		</div>
	</div>
</div>
<div class="panel panel-primary" style="background: white;">
	<div class="panel-heading"><h3>&nbsp;</h3></div>
	<div class="panel-body">
		<div id="exTab1" class="container">	
			<div class="col-sm-11">
				<div class="form-group">
					<label for="txtMotivo">Motivo</label>
					<input name="txtMotivo" type="text" class="form-control" id="txtMotivo" placeholder="Ingrese el motivo" />
				</div>
				<div class="form-group">
					<label for="txtDescripcion">Descripción</label>
					<textarea name="txtDescripcion" id="txtDescripcion" class="form-control" rows="5"></textarea>
				</div>
				<div style="text-align: center;">
					<button id="btnEnviar" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
						Enviar
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title modal-primary" id="exampleModalLongTitle">Mensaje</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="txtMensaje">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				<!--<button type="button" class="btn btn-primary">Save changes</button>-->
			</div>
		</div>
	</div>
</div>
<script>
	$('#btnEnviar').click(function(){
		if($('#txtDescripcion').val() == '' || $('#txtMotivo').val() == '')
			$('#txtMensaje').text('Debe llenar los campos motivo y descripción');
		else{
			$('#txtDescripcion').val('');
			$('#txtMotivo').val('');
			$('#txtMensaje').text('Información recibida, pronto nos pondremos en contacto con usted');	
		}
	});
</script>
@endsection