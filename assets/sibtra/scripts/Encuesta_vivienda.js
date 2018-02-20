/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$("#libreta_anio").hide();
$("#monto_ahorro").hide();

$(document).ready(function () {
//Libreta (Encuesta/Vivienda)
    $("#libreta2").click(function () {
        $("#txt_libreta_anio").val("");
        $("#txt_monto_ahorro").val("");
        $("#libreta_anio").hide();
        $("#monto_ahorro").hide();

    });

    $("#libreta1").click(function () {
        $("#libreta_anio").show();
        $("#monto_ahorro").show();
    });
});