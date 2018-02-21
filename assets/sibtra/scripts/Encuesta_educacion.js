/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$("#grupo_ult_curso1").hide();
$("#grupo_ult_curso2").hide();
$("#grupo_ult_curso3").hide();
$("#grupo_ult_curso4").hide();
$("#grupo_ult_curso5").hide();
$("#tipo_est").hide();
$("#anio_egreso").hide();
$("#grupo_becas").hide();

$("#grupo_ult_curso1").prop("disabled",true);
$("#grupo_ult_curso2").prop("disabled",true);
$("#grupo_ult_curso3").prop("disabled",true);
$("#grupo_ult_curso4").prop("disabled",true);
$("#grupo_ult_curso5").prop("disabled",true);
$("#tipo_est").prop("disabled",true);
$("#anio_egreso").prop("disabled",true);
$("#grupo_becas").prop("disabled",true);


$(document).ready(function () {

    //Estudiando->Becas (Encuesta/Educación)
    $("#estudiando2").click(function () {
        $("#grupo_becas").hide();
        $("#grupo_ult_curso5").hide();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso1").hide();
        
        
        $("#grupo_becas").prop("disabled",true);
              
        $("#grupo_ult_curso1").prop("disabled",true);
        $("#grupo_ult_curso2").prop("disabled",true);
        $("#grupo_ult_curso3").prop("disabled",true);
        $("#grupo_ult_curso4").prop("disabled",true);
        $("#grupo_ult_curso5").prop("disabled",true);
        

    });


    $("#estudiando1").click(function () {
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#grupo_becas").show();
        $("#grupo_becas").prop("disabled",false);
        $("#grupo_ult_curso5").hide();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso1").hide();
    });

    //Nivel de Educación
    
    //Analfabeto
    $("#nivel_esc1").click(function () { 
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#tipo_est").hide();
        $("#anio_egreso").hide();
        $("#grupo_ult_curso1").hide();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso5").hide();

    });
    // Alfabetismo Informal
    $("#nivel_esc2").click(function () {
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#tipo_est").hide();
        $("#anio_egreso").hide();
        $("#grupo_ult_curso1").hide();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso5").hide();
    });

    // Básica Incompleta
    $("#nivel_esc3").click(function () {
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#grupo_ult_curso1").show();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso5").hide();
        $("#tipo_est").show();
        $("#anio_egreso").show();

    });

    //Básica Completa
    $("#nivel_esc4").click(function () {
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#tipo_est").show();
        $("#anio_egreso").show();
        $("#grupo_ult_curso5").hide();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso1").hide();
    });

    //Media Incompleta
    $("#nivel_esc5").click(function () {
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#tipo_est input:radio").removeAttr('checked');
        $("#grupo_ult_curso2").show();
        $("#grupo_ult_curso1").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso5").hide();
        $("#tipo_est").show();
        $("#anio_egreso").show();
    });

    //Media Completa
    $("#nivel_esc6").click(function () {
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#tipo_est input:radio").removeAttr('checked');
        $("#tipo_est").show();
        $("#anio_egreso").show();
        $("#grupo_ult_curso5").hide();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso1").hide();
    });

    //Liceo Técnico Incompleto

    $("#nivel_esc7").click(function () {
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#tipo_est input:radio").removeAttr('checked');
        $("#grupo_ult_curso2").show();
        $("#grupo_ult_curso1").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso5").hide();
        $("#tipo_est").hide();
        $("#anio_egreso").show();

    });

    //Liceo Técnico Completo
    $("#nivel_esc8").click(function () {
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#tipo_est input:radio").removeAttr('checked');
        $("#tipo_est").hide();
        $("#anio_egreso").show();
        $("#grupo_ult_curso5").hide();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso1").hide();
        
    });
    
    //CFT Incompleto

    $("#nivel_esc9").click(function () {
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#tipo_est input:radio").removeAttr('checked');
        $("#grupo_ult_curso4").show();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso1").hide();
        $("#grupo_ult_curso5").hide();
        $("#tipo_est").hide();
        $("#anio_egreso").show();

    });
    
    //CFT Completo
    $("#nivel_esc10").click(function () {
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#tipo_est input:radio").removeAttr('checked');
        $("#tipo_est").hide();
        $("#anio_egreso").show();
        $("#grupo_ult_curso5").hide();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso1").hide();
    });
    
    //Instituto Profesional Incompleto
    $("#nivel_esc11").click(function () {
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#tipo_est input:radio").removeAttr('checked');
        $("#grupo_ult_curso3").show();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso1").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso5").hide();
        $("#tipo_est").hide();
        $("#anio_egreso").show();

    });

    //Instituto Profesional Completo
    $("#nivel_esc12").click(function () {
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#tipo_est input:radio").removeAttr('checked');
        $("#tipo_est").hide();
        $("#anio_egreso").show();
        $("#grupo_ult_curso5").hide();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso1").hide();
    });
    
    //Universidad Incompleta
    $("#nivel_esc13").click(function () {
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#tipo_est input:radio").removeAttr('checked');
        $("#grupo_ult_curso1").show();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso5").hide();
        $("#tipo_est").hide();
        $("#anio_egreso").show();

    });
    
    //Universidad Completa
    $("#nivel_esc14").click(function () {
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#tipo_est input:radio").removeAttr('checked');
        $("#tipo_est").hide();
        $("#anio_egreso").show();
        $("#grupo_ult_curso5").hide();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso1").hide();
    });
    
    ///Post Grado Incompleto
    $("#nivel_esc15").click(function () {
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#tipo_est input:radio").removeAttr('checked');
        $("#grupo_ult_curso5").show();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso1").hide();
        $("#tipo_est").hide();
        $("#anio_egreso").show();

    });
    
    //Post Grado Completo
    $("#nivel_esc16").click(function () {
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#tipo_est input:radio").removeAttr('checked');
        $("#tipo_est").hide();
        $("#anio_egreso").show();
        $("#grupo_ult_curso5").hide();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso1").hide();
    });

    //Especialidades Fuerzas Armadas
    $("#nivel_esc17").click(function () {
        $('#grupo_becas input:checkbox').removeAttr('checked');
        $("#grupo_ult_curso1 input:radio").removeAttr('checked');
        $("#grupo_ult_curso2 input:radio").removeAttr('checked');
        $("#grupo_ult_curso3 input:radio").removeAttr('checked');
        $("#grupo_ult_curso4 input:radio").removeAttr('checked');
        $("#grupo_ult_curso5 input:radio").removeAttr('checked');
        $("#tipo_est input:radio").removeAttr('checked');
        $("#tipo_est").hide();
        $("#anio_egreso").show();
        $("#grupo_ult_curso5").hide();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso1").hide();
    });


});


