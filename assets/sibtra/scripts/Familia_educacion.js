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


$("#ult_promedio").hide();
$("#grupo_financiamiento").hide();



$(document).ready(function () {

    //Parvularia
    $("#nivel_educ1").click(function () {
        //$("#txt_meses_cesante").val("");
        $('#grupo_financiamiento input:checkbox').removeAttr('checked');
        $("#grupo_fam_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso5 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso6 input:radio").removeAttr('checked');
        
        $("#grupo_fam_tipo_est1 input:radio").removeAttr('checked');
        $("#grupo_fam_tipo_est2 input:radio").removeAttr('checked');
        $("#grupo_fam_tipo_est3 input:radio").removeAttr('checked');
        
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").hide();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").hide();
        $("#grupo_fam_tipo_est2").hide();
        $("#grupo_fam_tipo_est3").hide();
        $("#grupo_financiamiento").hide();
    });

    //Básica
    $("#nivel_educ2").click(function () {
        //$("#txt_meses_cesante").val("");
        $('#grupo_financiamiento input:checkbox').removeAttr('checked');
       
        $("#grupo_fam_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso5 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso6 input:radio").removeAttr('checked');
        
        
        $("#grupo_fam_tipo_est2 input:radio").removeAttr('checked');
        $("#grupo_fam_tipo_est3 input:radio").removeAttr('checked');
        
        
        $("#grupo_fam_ult_curso1").show();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").hide();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").show();
        $("#grupo_fam_tipo_est2").hide();
        $("#grupo_fam_tipo_est3").hide();
        $("#grupo_financiamiento").hide();
    });

    //Media
    $("#nivel_educ3").click(function () {
        //$("#txt_meses_cesante").val("");
        $('#grupo_financiamiento input:checkbox').removeAttr('checked');
        $("#grupo_fam_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso2 input:radio").removeAttr('checked');
       
        $("#grupo_fam_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso5 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso6 input:radio").removeAttr('checked');
        
        
        $("#grupo_fam_tipo_est2 input:radio").removeAttr('checked');
        $("#grupo_fam_tipo_est3 input:radio").removeAttr('checked');
        
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").show();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").show();
        $("#grupo_fam_tipo_est2").hide();
        $("#grupo_fam_tipo_est3").hide();
        $("#grupo_financiamiento").hide();
    });

    //Liceo Técnico Profesional
    $("#nivel_educ4").click(function () {
        //$("#txt_meses_cesante").val("");
        $('#grupo_financiamiento input:checkbox').removeAttr('checked');
        
        $("#grupo_fam_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso2 input:radio").removeAttr('checked');
        
        $("#grupo_fam_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso5 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso6 input:radio").removeAttr('checked');
        
        
        $("#grupo_fam_tipo_est2 input:radio").removeAttr('checked');
        $("#grupo_fam_tipo_est3 input:radio").removeAttr('checked');
        
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").show();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").show();
        $("#grupo_fam_tipo_est2").hide();
        $("#grupo_fam_tipo_est3").hide();
        $("#grupo_financiamiento").hide();
    });

    //Educación Especial
    $("#nivel_educ5").click(function () {
        //$("#txt_meses_cesante").val("");
        $('#grupo_financiamiento input:checkbox').removeAttr('checked');
        $("#grupo_fam_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso5 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso6 input:radio").removeAttr('checked');
        
        $
        $("#grupo_fam_tipo_est2 input:radio").removeAttr('checked');
        $("#grupo_fam_tipo_est3 input:radio").removeAttr('checked');
        
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").hide();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").show();
        $("#grupo_fam_tipo_est2").hide();
        $("#grupo_fam_tipo_est3").hide();
        $("#grupo_financiamiento").hide();
    });

    //CFT
    $("#nivel_educ6").click(function () {
        //$("#txt_meses_cesante").val("");
        $('#grupo_financiamiento input:checkbox').removeAttr('checked');
        $("#grupo_fam_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso3 input:radio").removeAttr('checked');
        
        $("#grupo_fam_ult_curso5 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso6 input:radio").removeAttr('checked');
        
        $("#grupo_fam_tipo_est1 input:radio").removeAttr('checked');
       
        $("#grupo_fam_tipo_est3 input:radio").removeAttr('checked');
        
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").hide();
        $("#grupo_fam_ult_curso4").show();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").hide();
        $("#grupo_fam_tipo_est2").show();
        $("#grupo_fam_tipo_est3").hide();
        $("#grupo_financiamiento").hide();
    });

    //IP
    $("#nivel_educ7").click(function () {
        //$("#txt_meses_cesante").val("");
        // $('input:checkbox').removeAttr('checked');
        $("#grupo_fam_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso2 input:radio").removeAttr('checked');
        
        $("#grupo_fam_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso5 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso6 input:radio").removeAttr('checked');
        
        $("#grupo_fam_tipo_est1 input:radio").removeAttr('checked');
        
        $("#grupo_fam_tipo_est3 input:radio").removeAttr('checked');
        
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").show();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").hide();
        $("#grupo_fam_tipo_est2").show();
        $("#grupo_fam_tipo_est3").hide();
        $("#grupo_financiamiento").show();
    });

    //Universidad
    $("#nivel_educ8").click(function () {
        //$("#txt_meses_cesante").val("");
        // $('input:checkbox').removeAttr('checked');
        $("#grupo_fam_ult_curso1 input:radio").removeAttr('checked');
        
        $("#grupo_fam_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso5 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso6 input:radio").removeAttr('checked');
        
        $("#grupo_fam_tipo_est1 input:radio").removeAttr('checked');
        $("#grupo_fam_tipo_est2 input:radio").removeAttr('checked');
        
        
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").show();
        $("#grupo_fam_ult_curso3").hide();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").hide();
        $("#grupo_fam_tipo_est2").hide();
        $("#grupo_fam_tipo_est3").show();
        $("#grupo_financiamiento").show();
    });

    //Post Grado
    $("#nivel_educ9").click(function () {
        //$("#txt_meses_cesante").val("");
        $('#grupo_financiamiento input:checkbox').removeAttr('checked');
        $("#grupo_fam_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso4 input:radio").removeAttr('checked');
        
        $("#grupo_fam_ult_curso6 input:radio").removeAttr('checked');
        
        $("#grupo_fam_tipo_est1 input:radio").removeAttr('checked');
        
        $("#grupo_fam_tipo_est3 input:radio").removeAttr('checked');
        
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").hide();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").show();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").hide();
        $("#grupo_fam_tipo_est2").show();
        $("#grupo_fam_tipo_est3").hide();
        $("#grupo_financiamiento").hide();
    });

    //Especial FA
    $("#nivel_educ10").click(function () {
        //$("#txt_meses_cesante").val("");
        $('#grupo_financiamiento input:checkbox').removeAttr('checked');
        $("#grupo_fam_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso5 input:radio").removeAttr('checked');
        $("#grupo_fam_ult_curso6 input:radio").removeAttr('checked');
        
        $("#grupo_fam_tipo_est1 input:radio").removeAttr('checked');
        $("#grupo_fam_tipo_est2 input:radio").removeAttr('checked');
        $("#grupo_fam_tipo_est3 input:radio").removeAttr('checked');
        
        $("#grupo_fam_ult_curso1").hide();
        $("#grupo_fam_ult_curso2").hide();
        $("#grupo_fam_ult_curso3").hide();
        $("#grupo_fam_ult_curso4").hide();
        $("#grupo_fam_ult_curso5").hide();
        $("#grupo_fam_ult_curso6").hide();
        $("#grupo_fam_tipo_est1").hide();
        $("#grupo_fam_tipo_est2").hide();
        $("#grupo_fam_tipo_est3").hide();
        $("#grupo_financiamiento").hide();
    });
});