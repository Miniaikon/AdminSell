@extends('layouts.templateTable')

@section('title', 'Abonas a '.$Deudas->nombre_deuda)

@section('content')
<div class="col-md-4 col-md-offset-4">
	<div class="panel panel-info">
		<div class="panel-heading">Abonar a {!!$Deudas->nombre_deuda!!}</div>
		<div class="panel-body">
	{!!Form::model($Deudas, ['route'=>['deuda.update', $Deudas->id], 'method'=>'PUT'])!!}
		<div class="form-group">
			<label for="abono_deuda" class="sr-only">Cantidad a abonar</label>
			{!!Form::number('abono_deuda', 0, ['class'=>'form-control', 'placeholder'=>'Ej: 1000', 'Max'=>$Deudas->monto_deuda - $Deudas->abono_deuda, 'required'])!!}
			{!!Form::hidden('abonado', $Deudas->abono_deuda)!!}
		</div>
		<a class="btn btn-danger" href="/">Cancelar</a>
		<button class="btn btn-primary" type="submit">Abonar</button>
	{!!Form::close()!!}
		</div>
	</div>
</div>
	<div class="col-md-12">
		<div class="panel panel-success">
			<div class="panel-heading">
				Tabla completa
			</div>
			<div class="panel-table">
				@include('tablas.deudas')
			</div>
		</div>
	</div>
@endsection