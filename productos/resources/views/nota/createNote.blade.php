@extends('layouts.templateTable')

@section('title', 'Notas | Administrar')

@section('scripts')

<script>

$(document).ready(function() {

		$('#registro').on('click', function(){
	var dato = $('#nota').val();
	var route = '/note';
	var token = $('#token').val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{nota: dato},
	});
	$('#nota').val("");
	actual();
});

	$("#borrar").click(function(){
		var value = $("#clearId").val();
		var route = "http://localhost:8000/note/"+value+"";
		var token = $("#token").val();

		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN': token},
			type: 'DELETE',
			dataType: 'json',
			data: {abonado: value},
		});
		actual();
	});

    function actual(){
        $("#online").load('/note/show');
    };
});
</script>

@endsection

@section('content')
<div class=" col-md-6 col-md-offset-3">

<div class="panel panel-info ">
	<div class="panel-heading">
		Agregar Nota
	</div>
	<div class="panel-body">
		{!!Form::open()!!}
		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
			<div class="input-group">
				<label for="Nota" class="sr-only">Tu nota </label>
				{!!Form::text('nota', null,['class'=>'form-control', 'placeholder'=>'Escribe tu nota aquí.','id'=>'nota'])!!}
				<span class="input-group-btn">
				{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registro', 'class'=>'btn btn-primary'], $secure = null)!!}
				</span>
			</div>
		{!!Form::close()!!}
	</div>
</div>
</div>

<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-success">
		<div class="panel-heading">
			Notas
		</div>
		<div class="panel-table" id="online">
			<table class="table table-striped">	
			@foreach($Nota as $Note)
			<tr>
				<td>
					<div class='media'>
					  <div class='media-left'>
					    <a href='#'>
					      <img class='media-object' width="64px" height="64px" src='img/note.png'>
					    </a>
					  </div>
					  <div class='media-body'>
					    <h4 class='media-heading'>{!!$Note->created_at!!}
					    <input type="hidden" id="clearId" value="{!!$Note->id!!}">
				<button value="" id="borrar" class="btn btn-default btn-sm"><span aria-hidden="true">&times;</span></button>

					    </h4>
					    {!!$Note->nota!!}
					  </div>
					</div>
				</td>
			</tr>
			@endforeach
			</table>
		</div>
	</div>
</div>

@endsection