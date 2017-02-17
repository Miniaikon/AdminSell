@extends('layouts.templateTable')

@section('title','Tablas | Venta de productos')

@section('scripts')

<script>
	var monto = 0;
	function Mostrar(btn){
		var route = "http://localhost:8000/deuda/"+btn.value+"/edit";

		$.get(route, function(res){
			$("#id").val(res.id);
			$("#abono_deuda").val(res.abono_deuda);
			monto = res.monto_deuda - res.abono_deuda;
		});
	};

	$("#actualizar").click(function(){
		if($('#abono').val() > monto){
			alert('No puedes abonar más de lo que se debe');
		}else{
			var value = $("#id").val();
			var dato = $("#abono").val();
			var dato2 = $('#abono_deuda').val();
			var route = "http://localhost:8000/deuda/"+value+"";
			var token = $("#token").val();

			$.ajax({
				url: route,
				headers: {'X-CSRF-TOKEN': token},
				type: 'PUT',
				dataType: 'json',
				data: {abonado: dato,
				abono_deuda: dato2},
				success: function(res){
				$('#'+res.id).html('<td style="text-transform: uppercase;">'+res.nombre_deuda+'</td><td>Bs.'+res.monto_deuda+'</td><td>Bs.'+res.abono_deuda+'</td><td>'+res.created_at+'</td><td><button value="'+res.id+'" class="btn btn-orange btn-sm" data-toggle="modal" data-target="#myModal" OnClick="Mostrar(this);"><span class="glyphicon glyphicon-piggy-bank"></span></button> <a href="deuda/'+res.id+'/destroy" class="btn btn-red btn-sm"><span class="glyphicon glyphicon-remove"></span></a></td>');
				}
			});
		};
	});
	$("#deudaA").on('click',function(){
		var dato = $("#nombre_deuda").val();
		var dato2 = $('#monto_deuda').val();
		var route = "/deuda";
		var token = $("#token").val();

		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN': token},
			type: 'POST',
			dataType: 'json',
			data: {nombre_deuda: dato,
				monto_deuda: dato2},
			success: function(res){
					$('#deuda:first').before('<tbody id="deuda"><tr><td style="text-transform: uppercase;">'+res.nombre_deuda+'</td><td>Bs.'+res.monto_deuda+'</td><td>Bs.'+res.abono_deuda+'</td><td>'+res.created_at+'</td><td><button value="'+res.id+'" class="btn btn-orange btn-sm" data-toggle="modal" data-target="#myModal" OnClick="Mostrar(this);"><span class="glyphicon glyphicon-piggy-bank"></span></button> <a href="deuda/'+res.id+'/destroy" class="btn btn-red btn-sm"><span class="glyphicon glyphicon-remove"></span></a></td></tr></tbody>');
				},
		});

	});
	$("#deudaRem").on('click', function(){
		var valor = $("#clearIdD").val();
		var value = $("#clearIdD").val();
		var route = "http://localhost:8000/deuda/"+value+"";
		var token = $("#token").val();

		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN': token},
			type: 'DELETE',
			dataType: 'json',
			data: {id: value},
			success: function(res){
				$('#'+value).remove();
			}
		});
	});
	




	
</script>

@endsection

@section('content')
<div id="content">
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

		<div class="panel panel-black">
		  <div class="panel-heading">Lista con los ultimos pedidos </div>
		  <div class="panel-table" style="overflow-y: scroll; height: 200px;">
			@include('tablas.pedidos')
			</div>
			<div class="panel-footer">
			<div class="pull-center">
	      	<button class="btn btn-blue" data-toggle="modal" data-target="#ped">Nuevo pedido</button>
			</div>
			</div>
		</div>

	<div class="row">
		<div class="col-md-4">
			<!-- Panel Ganancia -->
			<div class="panel panel-black">
				<div class="panel-heading">Venta diaria </div>
				<div class="panel-table" style="overflow-y: scroll; height: 200px;" >
					@include('tablas.ganancia')
				</div>
				
			</div>
		</div>
		<div class="col-md-8">
			<div class="panel panel-black">
				<div class="panel-heading">Deudores 
				</div>
				<div class="panel-table" style="overflow-y: scroll; height: 200px;" id="deudaTabla">
					@include('tablas.deudas')
				</div>
			</div>
		</div>
	</div>
	</div>

	
	  @include('components.modal.abono')
	  @include('components.modal.pedido')
@endsection