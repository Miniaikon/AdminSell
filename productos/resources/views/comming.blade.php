@extends('layouts.templateTable')

@section('title','Dashboard')

@section('header')

@include('components.graphics.ventas')

@endsection

@section('content')

<div class="col-md-8">
<div class="panel panel-black">
	<div class="panel-heading"><span class="title">Grafica de ventas diarias | Úiltimos 30 dias</span></div>
	<div class="panel-body">
		<div id="chartContainer" style="height: 210px; width: 100%;"></div>
	</div>
</div>
</div>
<?php $mas = 0; ?>
				@foreach($Money as $Moneys)
				<?php 
					if ($Moneys->ganancia > $mas) {
						$mas = $Moneys->ganancia;
						$fecha = $Moneys->created_at;
					}
				 ?>
				@endforeach
<div class="col-md-4">
	<div class="black">
	<span class="heading">Mejor ganancia.</span>
		<span class="money">{!!number_format($mas, 2, ',', '.')!!}</span>
		<span class="footer">{!!date("D d",strtotime($fecha))!!} de {!!date("M",strtotime($fecha))!!} del {!!date("Y",strtotime($fecha))!!}</span>
	</div>
</div>
<div class="col-md-9">
	<div class="panel panel-black">
		<div class="panel-heading"><span class="title">Ventas diarias desde el último pedido</span></div>
		<div class="panel-table">
			@include('tablas.ganancia')
		</div>
	</div>
</div>

@endsection