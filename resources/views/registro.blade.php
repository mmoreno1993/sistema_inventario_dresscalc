@extends('master.head')
@section('title')
DressCalc
@endsection
@section('registro')
active
@endsection
@section('content')
<form method="POST" action="/registro">
		@csrf
    <div class="panel panel-primary" style="background: white;">
      <div class="panel-heading"><h3>CREA UNA CUENTA</h3></div>
      <div class="panel-body">
				<div class="form-group">
					<label for="txtNombres">Nombres</label>
					<input type="text" class="form-control" id="txtNombres" name="txtNombres" placeholder="Ingrese sus nombres">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Correo electrónico</label>
					<input name="txtEmail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">Nunca revelaremos tus datos</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Contraseña</label>
					<input name="txtPassword" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				@if ($error === true)
					<div class="form-group">
						<div class="alert alert-danger" role="alert">
							{{ $message }}
						</div>
					</div>
				@endif
				<div style="text-align: center;">
					<button type="submit" class="btn btn-primary">Registrate</button>  		
				</div>
			</div>
      <div class="panel-footer">Ya tienes una cuenta? <a href="/login">Inicia sesión</a></div>
    </div>
</form>
@endsection