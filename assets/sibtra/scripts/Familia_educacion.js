/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$("#puntaje_psu").hide();
$("#anio_psu").hide();
$("#grupo_fam_tipo_est1").hide();
$("#grupo_fam_tipo_est2").hide();
$("#grupo_fam_tipo_est3").hide();
$("#grupo_fam_ult_curso1").hide();
$("#grupo_fam_ult_curso2").hide();
$("#grupo_fam_ult_curso3").hide();
$("#grupo_fam_ult_curso4").hide();
$("#grupo_fam_ult_curso5").hide();
$("#grupo_fam_ult_curso6").hide();


$(document).ready(function () {

    //Parvularia
    $("#nivel_educ1").click(function () {
        //$("#txt_meses_cesante").val("");
        // $('input:checkbox').removeAttr('checked');
        //  $("#fam_sit_nolaboral input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").hide();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").hide();
        $("#grupo_fam_tipo_est2").hide();
        $("#grupo_fam_tipo_est3").hide();
    });
    
    //Básica
    $("#nivel_educ2").click(function () {
        //$("#txt_meses_cesante").val("");
        // $('input:checkbox').removeAttr('checked');
        //  $("#fam_sit_nolaboral input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso1").show();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").hide();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").show();
        $("#grupo_fam_tipo_est2").hide();
        $("#grupo_fam_tipo_est3").hide();
    });
    
    //Media
    $("#nivel_educ3").click(function () {
        //$("#txt_meses_cesante").val("");
        // $('input:checkbox').removeAttr('checked');
        //  $("#fam_sit_nolaboral input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").show();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").show();
        $("#grupo_fam_tipo_est2").hide();
        $("#grupo_fam_tipo_est3").hide();
    });
    
    //Liceo Técnico Profesional
    $("#nivel_educ4").click(function () {
        //$("#txt_meses_cesante").val("");
        // $('input:checkbox').removeAttr('checked');
        //  $("#fam_sit_nolaboral input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").show();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").show();
        $("#grupo_fam_tipo_est2").hide();
        $("#grupo_fam_tipo_est3").hide();
    });
    
    //Educación Especial
    $("#nivel_educ5").click(function () {
        //$("#txt_meses_cesante").val("");
        // $('input:checkbox').removeAttr('checked');
        //  $("#fam_sit_nolaboral input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").hide();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").show();
        $("#grupo_fam_tipo_est2").hide();
        $("#grupo_fam_tipo_est3").hide();
    });
    
    //CFT
    $("#nivel_educ6").click(function () {
        //$("#txt_meses_cesante").val("");
        // $('input:checkbox').removeAttr('checked');
        //  $("#fam_sit_nolaboral input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").hide();
        $("#grupo_fam_ult_curso4").show();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").hide();
        $("#grupo_fam_tipo_est2").hide();
        $("#grupo_fam_tipo_est3").show();
    });
    
    //IP
    $("#nivel_educ7").click(function () {
        //$("#txt_meses_cesante").val("");
        // $('input:checkbox').removeAttr('checked');
        //  $("#fam_sit_nolaboral input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").show();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").hide();
        $("#grupo_fam_tipo_est2").hide();
        $("#grupo_fam_tipo_est3").show();
    });
    
    //Universidad
    $("#nivel_educ8").click(function () {
        //$("#txt_meses_cesante").val("");
        // $('input:checkbox').removeAttr('checked');
        //  $("#fam_sit_nolaboral input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").show();
        $("#grupo_fam_ult_curso3").hide();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").hide();
        $("#grupo_fam_tipo_est2").show();
        $("#grupo_fam_tipo_est3").hide();
    });
    
    //Post Grado
    $("#nivel_educ9").click(function () {
        //$("#txt_meses_cesante").val("");
        // $('input:checkbox').removeAttr('checked');
        //  $("#fam_sit_nolaboral input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").hide();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").show();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").hide();
        $("#grupo_fam_tipo_est2").hide();
        $("#grupo_fam_tipo_est3").show();
    });
    
    //Especial FA
    $("#nivel_educ10").click(function () {
        //$("#txt_meses_cesante").val("");
        // $('input:checkbox').removeAttr('checked');
        //  $("#fam_sit_nolaboral input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").hide();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").hide();
        $("#grupo_fam_tipo_est2").hide();
        $("#grupo_fam_tipo_est3").show();
    });
});