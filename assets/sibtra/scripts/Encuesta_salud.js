/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$("#edad_persona").hide();


$(document).ready(function () {

// Edad menor (si es que hay) (Encuesta/Salud)
    $("#cons_drogas2").click(function () {
        $("#txt_cons_drogas_d").val("");
        $("#edad_persona").hide();
        

    });

    $("#cons_drogas1").click(function () {
        $("#edad_persona").show();
    });

}); 