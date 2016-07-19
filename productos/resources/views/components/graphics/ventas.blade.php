	<script type="text/javascript">
		window.onload = function () {
			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled: true,
				animationDuration: 2000,
				data: [{
					type: "column",
					dataPoints: [
			@foreach($Money as $Moneys)
						{ y: {!!$Moneys->ganancia!!}, label: "{!!date("D d",strtotime($Moneys->created_at))!!}" },
			@endforeach
					]
				}]
			});
			chart.render();
		}
	</script>
	<script src="componente/canvasjs.min.js"></script>
