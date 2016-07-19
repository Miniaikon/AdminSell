<div class="modal fade" id="ped" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        @include('tablas.formularios.pedido')
      </div>
      <div class="modal-footer">
       {!!Form::open(['method'=>'POST','route'=>'pedido.store','class'=>'form-inline'])!!}
       <div class="form-group">
        <label for="productos">Productos:</label>
         <input type="text" name="nombre_producto" class="form-control form-black" id="nombre_producto">
       </div>
       <div class="form-group">
         <input type="text" name="cantidad" id="cantidad">
         <input type="text" name="costo_unitario" id="costo_unitario">
         <input type="text" name="costo_total" id="costo_total">
         <button type="submit" class="btn btn-yellow">Ingresar</button>
       </div>
       {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>