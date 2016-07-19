<!DOCTYPE html>
<html>
<head>
	<title>Venta de productos</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body class="bg-info">	
	<div class="container">
		<!-- Ultimate -->
		<div class="row">
			<div class="col-md-3">
				<div class="rojo">
					<span class="money">300,00 Bsf</span>
					<div class="titulo">
						JABÓN
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="azul">
					<span class="money">300,00 Bsf</span>
					<div class="titulo">
					LAVAPLATOS
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="verde">
					<span class="money">150,00 Bsf</span>
					<div class="titulo">
						CLORO
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="naranja">
					<span class="money">200,00 Bsf</span>
					<div class="titulo">
						DESINFECTANTE
					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">Abonar a {!!$Deuda->nombre_deudor!!} <button type="button" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target=".3">Actualizar</button></div>
		  <div class="panel-table">
				{!!Form::model($Deuda->id, ['route'=>['pedido.edit', $Deuda->id], 'method'=>'put'])!!}
					<div class="form-group">
						<label for="nombre_producto">Nombre del producto</label>
						{!!Form::text('nombre_producto', null, ['class'=>'form-control', 'placeholder'=>'nombre del producto'])!!}
					</div>
					<div class="form-group">
						<label for="cantidad">Cantidad</label>
						{!!Form::number('cantidad', null, ['class'=>'form-control', 'placeholder'=>'Cantidad'])!!}
					</div>
					<div class="form-group">
						<label for="costo_unitario">Costo</label>
						{!!Form::number('costo_unitario', null, ['class'=>'form-control', 'placeholder'=>'Costo por litro'])!!}
					</div>
					<button type="submit">Agregar</button>
				{!!Form::close()!!}
		  </div>
		</div>


<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>