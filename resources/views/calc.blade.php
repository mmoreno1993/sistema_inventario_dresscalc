@extends('master.layout')
@section('title')
DressCalc
@endsection
@section('calc')
active
@endsection
@section('content')
<div class="panel panel-success" style="background: white;">
	<div class="panel-heading"><h3>&nbsp;</h3></div>
	<div class="panel-body">
		<div id="exTab1" class="container">	
			<div class="col-sm-11">
				<div class="form-group">
					<label for="txtCosto">Costo</label>
					<input name="txtCosto" type="number" min="0.01" step="any" class="form-control" id="txtCosto" placeholder="Ingrese el costo" />
				</div>
				<div class="form-group">
					<label for="txtMargen">Margen Bruto(%)</label>
					<input name="txtMargen" type="number" min="0.01" step="any" class="form-control" id="txtMargen" placeholder="Ingrese el margen bruto" />
				</div>
				<div style="text-align: center;">
					<button id="btnCalcular" class="btn btn-success">Calcular</button>  		
				</div>
				<hr>
				<div class="form-group">
					<label for="txtPrecioVenta">El precio a vender es</label>
					<input name="txtPrecioVenta" type="number" min="0.01" step="any" disabled class="form-control" id="txtPrecioVenta" />
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$('#btnCalcular').click(function(){
		var costo = $('#txtCosto').val();
		var margen = $('#txtMargen').val();
		var precioVenta = (parseFloat(costo) + parseFloat((costo*margen)/100));
		$('#txtPrecioVenta').val(precioVenta);
	});
</script>
@endsection