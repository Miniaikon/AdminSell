
$('#btnPedAgregar').click(function(){
	var route = "/pedido/"+$('#pedId option:selected').val()+"/edit";
	var val1 = $("#nombre_producto").val(), val2 = $("#cantidad").val(), val3 = $("#costo_unitario").val(), val4 = 0 + 0;
	val4 = $("#costo_total").val();


	$.get(route, function(res){
		var result = res.costo_producto * $('#cantidades').val();
		
		val1 = val1 + "/ " + res.nombre_producto + " ";
		val2 = val2 + "/ " + $("#cantidades").val() + " ";
		val3 = val3 + "/ " + res.costo_producto + " ";
		val4 = Number(val4) + Number(result);
		
		$("#nombre_producto").val(val1);
		$("#cantidad").val(val2);
		$("#costo_unitario").val(val3);
		$("#costo_total").val(val4);
	});
});