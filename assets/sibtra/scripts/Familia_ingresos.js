/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

("#grupo_ingresos_pension").hide();
("#grupo_ingresos_otros").hide();



$(document).ready(function () {

//FAMILIA_DATOS ENCUESTA/TRABAJO

    $("#rec_otros1").click(function () {        
        ("#grupo_ingresos_pension").show();
        
    });
    $("#rec_otros2").click(function () {
        $("#txt_pension_mes3").val("");
        $("#txt_pension_mes2").val("");
        $("#txt_pension_mes1").val("");
        ("#grupo_ingresos_pension").hide();
    });
    $("#rec_pension1").click(function () {        
        ("#grupo_ingresos_otros").show();
    });
    $("#rec_pension2").click(function () {
        $("#txt_otros_mes3").val("");
        $("#txt_otros_mes2").val("");
        $("#txt_otros_mes1").val("");
        ("#grupo_ingresos_otros").hide();
    });

});