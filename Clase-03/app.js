var __extends = (this && this.__extends) || (function () {
    var extendStatics = Object.setPrototypeOf ||
        ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
        function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var Empleados;
(function (Empleados) {
    var Persona = /** @class */ (function () {
        function Persona(nombre, apellido, dni, sexo) {
            this._nombre = nombre;
            this._apellido = apellido;
            this._dni = dni;
            this._sexo = sexo;
        }
        Persona.prototype.GetApellido = function () {
            return this._apellido;
        };
        Persona.prototype.GetNombre = function () {
            return this._nombre;
        };
        Persona.prototype.GetDni = function () {
            return this._dni;
        };
        Persona.prototype.GetSexo = function () {
            return this._sexo;
        };
        Persona.prototype.ToString = function () {
            return this.GetNombre() + "-" + this.GetApellido() + "-" + this.GetSexo() + "-" + this.GetDni();
        };
        return Persona;
    }());
    Empleados.Persona = Persona;
})(Empleados || (Empleados = {}));
/// <reference path="Persona.ts" />
var Empleados;
(function (Empleados_1) {
    var Empleados = /** @class */ (function (_super) {
        __extends(Empleados, _super);
        function Empleados(legajo, sueldo, nombre, apellido, dni, sexo) {
            var _this = _super.call(this, nombre, apellido, dni, sexo) || this;
            _this._sueldo = sueldo;
            _this._legajo = legajo;
            return _this;
        }
        Empleados.prototype.GetLegajo = function () {
            return this._legajo;
        };
        Empleados.prototype.GetSueldo = function () {
            return this._sueldo;
        };
        Empleados.prototype.Hablar = function (idioma) {
            return "El empleado habla el idioma:" + idioma;
        };
        Empleados.prototype.ToString = function () {
            return _super.prototype.ToString.call(this) + "-" + this.GetLegajo() + "-" + this.GetSueldo();
        };
        return Empleados;
    }(Empleados_1.Persona));
    Empleados_1.Empleados = Empleados;
})(Empleados || (Empleados = {}));
/// <reference path="Empleado.ts" />
function Click() {
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var sexo = document.getElementById("sexo").value;
    var dni = parseInt(document.getElementById("dni").value);
    var legajo = parseInt(document.getElementById("legajo").value);
    var sueldo = parseInt(document.getElementById("sueldo").value);
    var emp = new Empleados.Empleados(legajo, sueldo, nombre, apellido, dni, sexo);
    alert(emp.ToString());
    alert(emp.Hablar("Ingles"));
}
