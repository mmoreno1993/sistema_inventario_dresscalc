@extends('master.layout')
@section('title')
DressCalc
@endsection
@section('earn')
active
@endsection
@section('content')
<div class="panel panel-warning" style="background: white;">
	<div class="panel-heading"><h3>&nbsp;</h3></div>
	<div class="panel-body">
		<div id="exTab1" class="container">	
			<div class="col-sm-11">
				<div class="form-group">
					<label for="txtPrecioVenta">Precio de Venta</label>
					<input name="txtPrecioVenta" type="number" min="0.01" step="any" class="form-control" id="txtPrecioVenta" placeholder="Ingrese el precio de venta" />
				</div>
				<div class="form-group">
					<label for="txtPrecioCosto">Precio de Costo</label>
					<input name="txtPrecioCosto" type="number" min="0.01" step="any" class="form-control" id="txtPrecioCosto" placeholder="Ingrese el precio de costo" />
				</div>
				<div style="text-align: center;">
					<button id="btnCalcular" class="btn btn-warning">Calcular</button>  		
				</div>
				<hr>
				<div class="form-group">
					<label for="txtGanancia">Tu ganancia es</label>
					<input name="txtGanancia" type="number" min="0.01" step="any" disabled class="form-control" id="txtGanancia" />
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$('#btnCalcular').click(function(){
		var precioVenta = $('#txtPrecioVenta').val();
		var precioCosto = $('#txtPrecioCosto').val();
		var ganancia = precioVenta - precioCosto;
		$('#txtGanancia').val(ganancia);
	});
</script>
@endsection