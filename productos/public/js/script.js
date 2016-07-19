
$('#btnPedAgregar').click(function(){
	var value = $('#pedId').val();
	var route = "http://localhost:8000/pedido/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#nombre_producto").val($('#nombre_producto').val + res.nombre_producto + "/");
		$("#cantidades").val($("#cantidad").val() + res.cantidad + "/");
		$("#costo_unitario").val($("costo_unitario").val() + res.costo_unitario + "/");
		$("#costo_total").val($("costo_total") + (res.costo_unitario * $('#cantidad').val()));
	});
});


