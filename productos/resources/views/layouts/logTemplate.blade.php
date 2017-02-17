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
  @yield('content')
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