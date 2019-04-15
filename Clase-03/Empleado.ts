/// <reference path="Persona.ts" />

namespace Empleados{

export class Empleados extends Persona {
protected _legajo:number;
protected _sueldo:number;


     constructor(legajo:number, sueldo:number, nombre:string, apellido:string, dni:number, sexo:string) {
         super(nombre,apellido,dni,sexo);

         this._sueldo = sueldo;
         this._legajo = legajo;
     }

     public GetLegajo():number{
         return this._legajo;
     }

     public GetSueldo():number{
         return this._sueldo;
     }

     public Hablar(idioma:string):string{
         return "El empleado habla el idioma:"+idioma;
     }

     public ToString():string
     {
         return super.ToString()+"-"+this.GetLegajo()+"-"+this.GetSueldo();
     }
 }



}