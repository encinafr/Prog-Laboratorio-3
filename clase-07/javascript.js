/// <reference path="ajax.ts" />
var Ejercicio05;
(function (Ejercicio05) {
    function RecibirJson() {
        var xhttps = new Ajax();
        var backend = "mostrarColeccionJson.php";
        var comando = "comando=recibirJson";
        xhttps.Post(backend, Mostrar, comando, Fail);
    }
    Ejercicio05.RecibirJson = RecibirJson;
    function Mostrar(resultado) {
        var auxJson = JSON.parse(resultado);
        console.log(resultado);
        console.log(auxJson.codigoBarra + " - " + auxJson.nombre + " - " + auxJson.precio);
        alert(auxJson.codigoBarra + " - " + auxJson.nombre + " - " + auxJson.precio);
    }
    Ejercicio05.Mostrar = Mostrar;
    function Fail(resultado) {
        console.log("Error: " + resultado);
    }
    Ejercicio05.Fail = Fail;
})(Ejercicio05 || (Ejercicio05 = {}));
