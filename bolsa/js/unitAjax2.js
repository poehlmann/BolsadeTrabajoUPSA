$(function(){

	$("#btnDatos").click(function(evento){
//			event.preventDefault();
//			alert('BTN CLICK ACTUALIZAR');
            jQ_Ajax('resultado','ff');
   });

});


function jQ_Ajax(div,qry){
$(function(){
//		evento.preventDefault();
		var divDest = div;
//		alert("#"+divDest+"");
		var sqlqry = qry;
//		alert ('sql '+sqlqry+' par '+parjq+' comp '+idcmp);
//		$("#cargando").css("display", "inline");

		$("#"+divDest+"").load("consultaPersonaV1.php", function(){
//			$("#cargando").css("display", "none");
		});
});
}
