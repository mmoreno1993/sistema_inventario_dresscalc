@extends('master.head')
@section('title')
DressCalc
@endsection
@section('login')
active
@endsection
@section('content')
<form method="POST" action="/login">
	@csrf
	<div class="panel panel-primary" style="background: white;">
		<div class="panel-heading"><h3>INICIA SESIÓN</h3></div>
		<div class="panel-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Correo electrónico</label>
				<input name="txtEmail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su email">
				<small name="emailHelp" class="form-text text-muted">Nunca revelaremos tus datos</small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Contraseña</label>
				<input name="txtPassword" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div style="text-align: center;">
				<button type="submit" class="btn btn-primary">Ingresar</button>  		
			</div>
		</div>
		<div class="panel-footer">No tienes cuenta? <a href="/registro">Regístrate</a></div>
	</div>
</form>
@endsection