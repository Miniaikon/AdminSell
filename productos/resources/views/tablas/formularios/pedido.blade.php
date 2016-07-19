<div class="form-group">
	<label for="nombre_producto" class="sr-only">Nombre del producto</label>
	<?php $p = \Productos\Productos::orderBy('nombre_producto', 'asc')->get(); ?>
	<div class="caja"><select name="nombre_producto" placeholder="Seleccione un producto" class="form-control form-black" tabindex="2">
			<option id="pedId">Seleccionar</option>
			@foreach($p as $P)
            	<option value="{!!$P->id!!}">{!!$P->nombre_producto!!}</option>
            @endforeach 
    </select>
	</div>
</div>
<div class="form-group">
	<label for="cantidad" class="sr-only">Cantidad</label>
	{!!Form::number('cantidad', null, ['class'=>'form-control form-black', 'placeholder'=>'Cantidad', 'id'=>'cantidad'])!!}
</div>
<div class="form-group">
	<button id="btnPedAgregar" class="btn btn-blue">Agregar</button>
</div>