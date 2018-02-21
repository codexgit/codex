/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//("#grupo_ingresos_pension").hide();
$("#ingresos_pension1").hide();
$("#ingresos_pension2").hide();
$("#ingresos_pension3").hide();
$("#ingresos_otros1").hide();
$("#ingresos_otros2").hide();
$("#ingresos_otros3").hide();
//("#grupo_ingresos_otros").hide();

$(document).ready(function () {

//FAMILIA_DATOS ENCUESTA/INGRESOS

    $("#rec_otros1").click(function () {
        // ("#grupo_ingresos_pension").show();
        $("#ingresos_pension1").show();
        $("#ingresos_pension2").show();
        $("#ingresos_pension3").show();

    });

    $("#rec_otros2").click(function () {
        $("#txt_pension_mes3").val("");
        $("#txt_pension_mes2").val("");
        $("#txt_pension_mes1").val("");
        $("#ingresos_pension1").hide();
        $("#ingresos_pension2").hide();
        $("#ingresos_pension3").hide();
        //("#grupo_ingresos_pension").hide();
    });

    $("#rec_pension1").click(function () {
        //("#grupo_ingresos_otros").show();
        $("#ingresos_otros1").show();
        $("#ingresos_otros2").show();
        $("#ingresos_otros3").show();
    });

    $("#rec_pension2").click(function () {
        $("#txt_otros_mes3").val("");
        $("#txt_otros_mes2").val("");
        $("#txt_otros_mes1").val("");
        $("#ingresos_otros1").hide();
        $("#ingresos_otros2").hide();
        $("#ingresos_otros3").hide();
        //("#grupo_ingresos_otros").hide();
    });

});