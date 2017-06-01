$("#add_experiencia_profissional").click(function(){
	var emp = $("#empresa").val();
	var car = $("#cargo").val();
	var att = $("#atividade_exercida").val();
	
	var res = "<tr><td>" + emp + "</td><td>" + car + "</td><td>" + att + "</td></tr>";

	$("#experiencias").append(res);
	//var old = $("#experiencia_profissional").val();
	//if(!(old.length == 0)){
	//	old += ",";
	//}
	//$("#experiencia_profissional").val(old + "{emp:'" + emp + "', car:'" + car + "', att:'" + att + "'}");
});

$("#add_formacao_academica").click(function(){
	var cur = $("#curso").val();
	var ins = $("#instituicao").val();
	var est = $("#estado").val();
	
	var res = "<tr><td>" + cur + "</td><td>" + ins + "</td><td>" + est + "</td></tr>";
	
	$("#formacao").append(res);
});