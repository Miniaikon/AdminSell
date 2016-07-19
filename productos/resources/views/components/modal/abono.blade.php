<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" id="id">
        <input type="hidden" id="abono_deuda">
        @include('tablas.formularios.abono')
      </div>
      <div class="modal-footer">
        {!!link_to('#deudaTabla', $title='Actualizar', $attributes = ['id'=>'actualizar', 'class'=>'btn btn-primary','data-dismiss'=>'modal'], $secure = null)!!}
      </div>
    </div>
  </div>
</div>