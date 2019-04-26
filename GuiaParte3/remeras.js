var Ajax = /** @class */ (function () {
    function Ajax() {
        var _this = this;
        this.Get = function (ruta, success, params, error) {
            if (params === void 0) { params = ""; }
            var parametros = params.length > 0 ? params : "";
            ruta = params.length > 0 ? ruta + "?" + parametros : ruta;
            _this._xhr.open('GET', ruta);
            _this._xhr.send();
            _this._xhr.onreadystatechange = function () {
                if (_this._xhr.readyState === Ajax.DONE) {
                    if (_this._xhr.status === Ajax.OK) {
                        success(_this._xhr.responseText);
                    }
                    else {
                        if (error !== undefined) {
                            error(_this._xhr.status);
                        }
                    }
                }
            };
        };
        this.Post = function (ruta, success, params, error) {
            if (params === void 0) { params = ""; }
            var parametros = params.length > 0 ? params : "";
            _this._xhr.open('POST', ruta, true);
            _this._xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
            _this._xhr.send(parametros);
            _this._xhr.onreadystatechange = function () {
                if (_this._xhr.readyState === Ajax.DONE) {
                    if (_this._xhr.status === Ajax.OK) {
                        success(_this._xhr.responseText);
                    }
                    else {
                        if (error !== undefined) {
                            error(_this._xhr.status);
                        }
                    }
                }
            };
        };
        this._xhr = new XMLHttpRequest();
        Ajax.DONE = 4;
        Ajax.OK = 200;
    }
    return Ajax;
}());
/// <reference path="./ajax.ts"/>
var miNamespace;
(function (miNamespace) {
    function HacerListado() {
        var ajax = new Ajax();
        ajax.Post("./administrarRemeras.php", function (resultado) {
            var arrayRemeras = JSON.parse(resultado);
            var miTabla = "<table border=1><tr><th>ID</th><th>slogan</th><th>size</th><th>price</th></tr>";
            for (var index = 0; index < 200; index++) {
                miTabla += "<tr><th>" + arrayRemeras[index].id + "</th><th>" + arrayRemeras[index]["slogan"] + "</th><th>" + arrayRemeras[index]["size"] + "</th><th>" + arrayRemeras[index]["price"] + "</th></tr>";
            }
            miTabla += "</table>";
            document.getElementById("auxDiv").innerHTML = miTabla;
        }, "", fail);
    }
    miNamespace.HacerListado = HacerListado;
    function fail(retorno) {
        console.clear();
        console.log("ERROR!!!");
        console.log(retorno);
    }
})(miNamespace || (miNamespace = {}));
