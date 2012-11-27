$(document).ready(function(){

	$("#confirm_dialog").dialog({
		buttons: [ 
			{ text: "Borrar", click: function() { $( this ).dialog( "close" ); }},
			{ text: "Cancelar", click: function() { $( this ).dialog( "close" ); }} 
		],
		autoOpen: false,
		resizable: false,
		modal: true,
		show: "fold",
		hide: "fold"
	});

	$(".borrar_tutor").click(function(){
		/*var element = $(this);
		$.get(element.attr("href"), function(){
			element.parent().parent().remove();
		});*/
		$( "#confirm_dialog" ).dialog( "open" );
		return false;
	});
	$(".borrar_alumno").click(function(){
		var element = $(this);
		$.get(element.attr("href"), function(){
			element.parent().parent().remove();
		});
		return false;
	});
});