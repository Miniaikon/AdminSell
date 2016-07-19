<table class="table table-striped">	
			foreach($Nota as $Note)
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
			{!!Form::open(['route'=>['note.destroy', $Note->id], 'method'=>'DELETE', 'class'=>'pull-right'])!!}
				<button class="btn btn-default btn-sm"><span aria-hidden="true">&times;</span></button>
			{!!Form::close()!!}

					    </h4>
					    {!!$Note->nota!!}
					  </div>
					</div>
				</td>
			</tr>
			@endforeach
			</table>