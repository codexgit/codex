/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//FAMILIA_DATOS 

//Trabajo
$("#fam_sit_contrato").hide();
$("#fam_sit_nolaboral").hide();
$('#fam_grupo_pension1').hide();
$('#fam_grupo_pension2').hide();
$('#fam_grupo_pension3').hide();
$("#meses_cesante").hide();


$(document).ready(function () {

    //FAMILIA_DATOS ENCUESTA/TRABAJO

    $("#trabajando1").click(function () {
        $("#txt_meses_cesante").val("");
        $('fam_grupo_pension input:checkbox').removeAttr('checked');
        
        
        $("#fam_sit_nolaboral input:radio").removeAttr('checked');
        $("#fam_sit_contrato").show();
        $("#fam_sit_nolaboral").hide();
        $('#fam_grupo_pension1').hide();
        $('#fam_grupo_pension2').hide();
        $('#fam_grupo_pension3').hide();
        

    });

    $("#trabajando2").click(function () {
        $("#fam_sit_contrato input:radio").removeAttr('checked');
        $("#fam_sit_contrato").hide();
        $("#fam_sit_nolaboral").show();
        $("#meses_cesante").hide();
        


    });

    //Dueña de casa
    $("#sit_nolaboral1").click(function () {
        $("#txt_meses_cesante").val("");
        $('#fam_grupo_pension2 input:checkbox').removeAttr('checked');
        $('#fam_grupo_pension3 input:checkbox').removeAttr('checked');
        $('#fam_grupo_pension1').show();
        $('#fam_grupo_pension2').hide();
        $('#fam_grupo_pension3').hide();
        $("#meses_cesante").hide();
    });

    //Estudiante
    $("#sit_nolaboral2").click(function () {
        $('#fam_grupo_pension input:checkbox').removeAttr('checked');
        $("#txt_meses_cesante").val("");
        $('#fam_grupo_pension1').hide();
        $('#fam_grupo_pension2').hide();
        $('#fam_grupo_pension3').hide();
        $("#meses_cesante").hide();
    });

    //Jubilado
    $("#sit_nolaboral3").click(function () {
        $("#txt_meses_cesante").val("");
        $('#fam_grupo_pension1 input:checkbox').removeAttr('checked');
        $('#fam_grupo_pension3 input:checkbox').removeAttr('checked');
        $("#fam_grupo_pension1").hide();
        $("#fam_grupo_pension2").show();
        $("#fam_grupo_pension3").hide();
        $("#meses_cesante").hide();
    });
    //Cesante
    $("#sit_nolaboral4").click(function () {
        $('#fam_grupo_pension1 input:checkbox').removeAttr('checked');
        $('#fam_grupo_pension2 input:checkbox').removeAttr('checked');
        $("#fam_grupo_pension1").hide();
        $("#fam_grupo_pension2").hide();
        $("#fam_grupo_pension3").show();
        $("#meses_cesante").show();
    });
    //Otro
    $("#sit_nolaboral5").click(function () {
        $('#fam_grupo_pension input:checkbox').removeAttr('checked');
        $("#txt_meses_cesante").val("");
        $("#fam_grupo_pension1").hide();
        $("#fam_grupo_pension2").hide();
        $("#fam_grupo_pension3").hide();
        $("#meses_cesante").hide();
    });
});