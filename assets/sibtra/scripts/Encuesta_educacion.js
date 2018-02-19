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


$(document).ready(function () {

    //Estudiando->Becas (Encuesta/Educación)
    $("#estudiando2").click(function () {
        $("#grupo_becas").hide();

    });


    $("#estudiando1").click(function () {
        $("#grupo_becas").show();
    });

    //Nivel de Educación
    $("#nivel_esc1").click(function () {
        $("#tipo_est").hide();
        $("#anio_egreso").hide();
        $("#grupo_ult_curso1").hide();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso5").hide();

    });
    //
    $("#nivel_esc2").click(function () {
        $("#tipo_est").hide();
        $("#anio_egreso").hide();
        $("#grupo_ult_curso1").hide();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso5").hide();
    });

    //
    $("#nivel_esc3").click(function () {
        $("#grupo_ult_curso1").show();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso5").hide();
        $("#tipo_est").show();
        $("#anio_egreso").show();

    });

    //
    $("#nivel_esc4").click(function () {
        $("#tipo_est").show();
        $("#anio_egreso").show();
    });

    //
    $("#nivel_esc5").click(function () {
        $("#grupo_ult_curso2").show();
        $("#grupo_ult_curso1").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso5").hide();
        $("#tipo_est").show();
        $("#anio_egreso").show();
    });

    //
    $("#nivel_esc6").click(function () {
        $("#tipo_est").show();
        $("#anio_egreso").show();
    });

    //

    $("#nivel_esc7").click(function () {
        $("#grupo_ult_curso2").show();
        $("#grupo_ult_curso1").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso5").hide();
        $("#tipo_est").hide();
        $("#anio_egreso").show();

    });

    //
    $("#nivel_esc8").click(function () {
        $("#tipo_est").hide();
        $("#anio_egreso").show();
    });
    //		


    $("#nivel_esc9").click(function () {
        $("#grupo_ult_curso4").show();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso1").hide();
        $("#grupo_ult_curso5").hide();
        $("#tipo_est").hide();
        $("#anio_egreso").show();

    });
    //
    $("#nivel_esc10").click(function () {
        $("#tipo_est").hide();
        $("#anio_egreso").show();
    });
    //


    $("#nivel_esc11").click(function () {
        $("#grupo_ult_curso3").show();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso1").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso5").hide();
        $("#tipo_est").hide();
        $("#anio_egreso").show();

    });

    //
    $("#nivel_esc12").click(function () {
        $("#tipo_est").hide();
        $("#anio_egreso").show();
    });
    //

    $("#nivel_esc13").click(function () {
        $("#grupo_ult_curso1").show();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso5").hide();
        $("#tipo_est").hide();
        $("#anio_egreso").show();

    });
    //
    $("#nivel_esc14").click(function () {
        $("#tipo_est").hide();
        $("#anio_egreso").show();
    });
    ///
    $("#nivel_esc15").click(function () {
        $("#grupo_ult_curso5").show();
        $("#grupo_ult_curso2").hide();
        $("#grupo_ult_curso3").hide();
        $("#grupo_ult_curso4").hide();
        $("#grupo_ult_curso1").hide();
        $("#tipo_est").hide();
        $("#anio_egreso").show();

    });
    //
    $("#nivel_esc16").click(function () {
        $("#tipo_est").hide();
        $("#anio_egreso").show();
    });

    //
    $("#nivel_esc17").click(function () {
        $("#tipo_est").hide();
        $("#anio_egreso").show();
    });


});


