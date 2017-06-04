$(document).ready(function () {
	var id=0;
	
	$('#gridFormacao').DataTable({
		"order": [],
		searching: true,
		"fnCreatedRow": function (nRow, aData, iDataIndex) {
			$('td:last-child', nRow).html("<a id='btnDeleteCurriculo' href='#'><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i></a>");
		},
		"aoColumnDefs": [
		{
			'aTargets': [0],
			"mDataProp": "Instituição",
		},
		{
			'aTargets': [1],
			"mDataProp": "Curso",
		},
		{
			'aTargets': [2],
			"mDataProp": "Estado"
		},
		{
			'aTargets': [3],
			"mDataProp": "Deletar",
			"searchable": false,
			"data": null,
			'orderable': false
		}
		]
	});

	$('#gridExperiencia').DataTable({
		"order": [],
		searching: true,
		"fnCreatedRow": function (nRow, aData, iDataIndex) {
			$('td:last-child', nRow).html("<a id='btnDeleteCurriculo2' href='#'><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i></a>");
		},
		"aoColumnDefs": [
		{
			'aTargets': [0],
			"mDataProp": "Empresa",
		},
		{
			'aTargets': [1],
			"mDataProp": "Cargo",
		},
		{
			'aTargets': [2],
			"mDataProp": "AtvExercida"
		},
		{
			'aTargets': [3],
			"mDataProp": "Deletar",
			"searchable": false,
			"data": null,
			'orderable': false
		}
		]
	});

});

function showDiv(elem){
	if(elem.value == "Funcionário"){
		$("#pay_block").slideToggle("slow");

		var botao = $("#alterar_status");

		botao.text("Alterar e Salvar");
	}
	else{
		$("#pay_block").hide(1000);
	}

}

$("#add_formacao_academica").click(function(){
	var cur = $("#curso").val();
	var ins = $("#instituicao").val();
	var est = $("#estado option:selected");

	if((cur === "" || cur == null) || (ins === "" || ins == null) ||(est.val() === "" || est.val() == null)){
		window.alert("Preencha todos os campos");
		return;
	}

	var table = $('#gridFormacao').DataTable();

	table.rows.add( [ {
		"Instituição": 	cur,
		"Curso":   		ins,
		"Estado":    	est.text(),
		"Deletar": null
	}] )
	.draw();

	var args = ["curso", "instituicao", "estado"];

	limpaCampos(args);
});

$("#add_experiencia_profissional").click(function(){
	var emp = $("#empresa").val();
	var car = $("#cargo").val();
	var att = $("#atividade_exercida").val();

	if((emp === "" || emp == null) || (car === "" || car == null) ||(att === "" || att == null)){
		window.alert("Preencha todos os campos");
		return;
	}

	var table = $('#gridExperiencia').DataTable();

	table.rows.add( [ {
		"Empresa": 		  emp,
		"Cargo": 		  car,
		"AtvExercida":  att,
		"Deletar": null
	}] )
	.draw();

	var args = ["empresa", "cargo", "atividade_exercida"];

	limpaCampos(args);
});

function limpaCampos(args) {
	var data = args;

	for (var i = data.length - 1; i >= 0; i--) {
		var campos = data[i];

		$('#' + campos).val("").change();
	}
}