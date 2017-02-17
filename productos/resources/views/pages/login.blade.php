@extends('layouts.logTemplate')

@section('title' , 'Iniciar sesion')

@section('content')
<div class="row" style="margin-top: 100px;">
	<div class="col-md-4 col-md-offset-4">
		<img src="{!!asset('img/logo.png')!!}" alt="" class="img-responsive">
	</div>
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				Inicia Sesión
			</div>
			<div class="panel-body">
				<form action="#" class="">
					<div class="form-group">
						<label class="sr-only" for="Usuario">Nombre de usuario</label>
						{!!Form::text('username', null,['class'=>'form-control', 'placeholder'=>'Nombre de usuario'])!!}
					</div>
					<div class="form-group">
						<label for="Contraseña" class="sr-only">Contraseña</label>
						{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'contraseña'])!!}
					</div>
					<div class="form-group">
						<button class="btn btn-success">Ingresar</button>
						<a href="#">Registrarse</a>
					</div>
					<div class="form-group">
						<center><a href="#" class="center pull-center">¿Olvidaste tu contraseña?</a></center>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection