@extends('master.layout')
@section('title')
DressCalc
@endsection
@section('balance')
active
@endsection
@section('content')

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
						<form action="#" method="POST">
							<div class="form-group">
								<label for="cbCategoria">Categoría prenda</label>
								<select id="cbCategoria" name="cbCategoria" class="form-control">
									<option value="0" selected>Abrigos</option>
									<option value="1">Chompas</option>
									<option value="2">Polos</option>
								</select>
							</div>
							<div class="form-group">
								<label for="txtCosto">Costo</label>
								<input name="txtCosto" type="number" min="0.01" step="any" class="form-control" id="txtCosto" placeholder="Ingrese el costo" />
							</div>
							<div class="form-group">
								<label for="txtProveedor">Proveedor</label>
								<input name="txtProveedor" maxlength="200" type="text" class="form-control" id="txtProveedor" placeholder="Ingrese el proveedor" />
							</div>
							<div style="text-align: center;">
								<button type="submit" class="btn btn-primary">Crear compra</button>  		
							</div>
						</form>
					</div>
					<div class="tab-pane" id="tbVentas">
			        	<form action="#" method="POST">
							<div class="form-group">
								<label for="txtPrenda">Prenda</label>
								<input name="txtPrenda" type="text" class="form-control" id="txtPrenda" placeholder="Ingrese nombre de la prenda" />
								<label for="cbTipo">Tipo</label>
								<select id="cbTipo" name="cbTipo" class="form-control">
									<option value="0" selected>Abrigos</option>
									<option value="1">Chompas</option>
									<option value="2">Polos</option>
								</select>
							</div>
							<div class="form-group">
								<label for="txtPrecio">Precio</label>
								<input name="txtPrecio" type="number" min="0.01" step="any" class="form-control" id="txtPrecio" placeholder="Ingrese el precio" />
							</div>
							<div class="form-group">
								<label for="txtCliente">Cliente</label>
								<input name="txtCliente" maxlength="200" type="text" class="form-control" id="txtCliente" placeholder="Ingrese el cliente" />
							</div>
							<div style="text-align: center;">
								<button type="submit" class="btn btn-primary">Crear venta</button>  		
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-footer">&nbsp;</div>
</div>

@endsection