$(document).click(function(){
	$('#nota').on('click', function(){
        $("#content").load('/note');
});
	$('#index').on('click', function(){
		$("#content").load('/');
	})
});


