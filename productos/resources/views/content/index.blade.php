@section('title','Tablas | Venta de productos')

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
	      	@include('tablas.formularios.pedido')
			</div>
			</div>
		</div>

	<div class="row">
		<div class="col-md-4">
			<!-- Panel Ganancia -->
			<div class="panel panel-black">
				<div class="panel-heading">Venta diaria </div>
				<div class="panel-table" style="overflow-y: scroll; height: 200px;">
					@include('tablas.ganancia')
				</div>
				
			</div>
		</div>
		<div class="col-md-8">
			<div class="panel panel-black">
				<div class="panel-heading">Deudores 
				</div>
				<div class="panel-table" style="overflow-y: scroll; height: 200px;">
					@include('tablas.deudas')
				</div>
			</div>
		</div>
	</div>
	</div>

	<!-- Modal Deuda -->
	<div class="modal fade 1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="gridSystemModalLabel">Nueva deuda</h4>
	      </div>
	    	<div class="modal-body">
	      	@include('tablas.formularios.deuda')
	    		
	    	</div>
	    </div>
	  </div>
	  </div>