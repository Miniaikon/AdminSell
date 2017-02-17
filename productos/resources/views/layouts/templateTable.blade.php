<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	{!!Html::style('css/bootstrap.min.css')!!}
  {!!Html::style('css/style.css')!!}
  {!!Html::style('css/font-awesome.min.css')!!}
  @yield('header')
	<meta name="viewport" content="initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body class="bg-success">	
<nav class="navbar navbar-inverse navbar-black navbar-static-top">
 <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Productos de limpieza</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{!!route('inventory.index')!!}">Productos <span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- Dropdown Notas -->
        <li class="dropdown">
         {!!$Nota = \Productos\Nota::orderBy('created_at', 'desc')->paginate(5)!!}
          <a href="#" class="dropdown-toggle" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" title="<a href='{!!route('note.index')!!}' class='btn btn-default'>New</a>" data-content="<div id='online'>
          <table class='table table-striped'> 
      @foreach($Nota as $Note)
      <tr>
        <td>
          <div class='media'>
        <div class='media-left'>
          <a href='#'>
            <img class='media-object' width='32px' height='32px' src='img/note.png'>
          </a>
        </div>
        <div class='media-body'>
              <h6 class='media-heading'>{!!$Note->created_at!!} 
              </h6>
              {!!$Note->nota!!}
            </div>
      </div>
</td>
      </tr>
      @endforeach
      </table></div>
"><span class="glyphicon glyphicon-pushpin"></span></a>
        </li>
        <!-- Dropdown Usuario -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Cambiar clave</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Cerrar sesion</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div class="container-fluid">
		<div class="col-md-12">
			@yield('content')
		</div>
	</div>

{!!Html::script('js/jquery-1.12.4.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/script.js')!!}
@yield('scripts')
<script>
	$(function () {
 $('[data-toggle="popover"]').popover({ html : true });
})
</script>	

</body>
</html>