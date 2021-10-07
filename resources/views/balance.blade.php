@extends('master.layout')
@section('title')
DressCalc
@endsection
@section('balance')
active
@endsection
@section('content')
@csrf
<div class="panel panel-primary" style="background: white;">
	<div class="panel-heading"><h3>&nbsp;</h3></div>
	<div class="panel-body">
		<div id="exTab1" class="container">	
			<div class="col-sm-11">
				<ul class="nav nav-pills">
					<li class="active">
				    	<a href="#tbGastos" data-toggle="tab">Gastos</a>
					</li>
					<li>
						<a href="#tbVentas" data-toggle="tab">Ventas</a>
					</li>
				</ul>
				<div class="tab-content clearfix">
					<div class="tab-pane active" id="tbGastos">
						<form id="frmGastos" method="POST">
							<div class="form-group">
								<label for="cbCategoria">Categoría prenda</label>
								<select id="cbCategoria" name="cbCategoria" class="form-control">
									@foreach ($type_clothe as $value)
									    @if ($loop->first)
									        <option value="{{ $value->id }}" selected>{{ $value->description }}</option>
									    @else
									    	<option value="{{ $value->id }}">{{ $value->description }}</option>
									    @endif
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label for="txtCosto">Costo</label>
								<input name="txtCosto" value="0" type="number" min="0.01" step="any" class="form-control" id="txtCosto" placeholder="Ingrese el costo" />
							</div>
							<div class="form-group">
								<label for="txtProveedor">Proveedor</label>
								<input name="txtProveedor" maxlength="200" type="text" class="form-control" id="txtProveedor" placeholder="Ingrese el proveedor" />
							</div>
						</form>
							<div style="text-align: center;">
								<button id="btnCompra" name = "btnCompra" class="btn btn-primary">Crear compra</button>  		
							</div>
						
					</div>
					<div class="tab-pane" id="tbVentas">
			        	<form id="frmVentas" method="POST">
							<div class="form-group">
								<label for="txtPrenda">Prenda</label>
								<input name="txtPrenda" type="text" class="form-control" id="txtPrenda" placeholder="Ingrese nombre de la prenda" />
								<label for="cbTipo">Tipo</label>
								<select id="cbTipo" name="cbTipo" class="form-control">
									@foreach ($type_clothe as $value)
									    @if ($loop->first)
									        <option value="{{ $value->id }}" selected>{{ $value->description }}</option>
									    @else
									    	<option value="{{ $value->id }}">{{ $value->description }}</option>
									    @endif
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label for="txtPrecio">Precio</label>
								<input name="txtPrecio" value="0" type="number" min="0.01" step="any" class="form-control" id="txtPrecio" placeholder="Ingrese el precio" />
							</div>
							<div class="form-group">
								<label for="txtCliente">Cliente</label>
								<input name="txtCliente" maxlength="200" type="text" class="form-control" id="txtCliente" placeholder="Ingrese el cliente" />
							</div>
						</form>
						<div style="text-align: center;">
							<button id="btnVenta" name="btnVenta" class="btn btn-primary">Crear venta</button>  		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-footer">&nbsp;</div>
</div>
<script>
$('#btnCompra').click(function(){
	var formData = {
		txtProveedor : $('#txtProveedor').val(),
		cbCategoria : $('#cbCategoria option:selected').val(),
		txtPrecio : $('#txtCosto').val(),
		entry: 1,
		_token : $('[name=_token]').val(),
	}
	$.ajax({
		type: "POST",
		url: "balance/save",
		data: formData,
		dataType: "json",
		encode: true,
	}).done(function (data) {
		if(data.error === true){
			alert(data.message)
			return false;
		}
		$('#txtProveedor').val('');
		$('#txtCosto').val(0);
		alert(data.message);
	});
});
$('#btnVenta').click(function(){
	var formData = {
		txtCliente: $('#txtCliente').val(),
		cbCategoria: $('#cbTipo option:selected').val(),
		txtPrecio: $('#txtPrecio').val(),
		txtPrenda: $('#txtPrenda').val(),
		entry: 0,
		_token : $('[name=_token]').val(),
	}
	$.ajax({
		type: "POST",
		url: "balance/save",
		data: formData,
		dataType: "json",
		encode: true,
	}).done(function (data) {
		if(data.error === true){
			alert(data.message)
			return false;
		}
		$('#txtCliente').val('');
		$('#txtPrecio').val(0);
		$('#txtPrenda').val('');
		alert(data.message);
	});
});
</script>
@endsection