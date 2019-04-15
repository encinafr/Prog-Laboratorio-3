/// <reference path="Empleado.ts" />
 function Click():void
{
    let nombre : string = (<HTMLInputElement> document.getElementById("nombre")).value; 
    let apellido : string = (<HTMLInputElement> document.getElementById("apellido")).value; 
    let sexo : string = (<HTMLInputElement> document.getElementById("sexo")).value; 
    let dni : number = parseInt((<HTMLInputElement> document.getElementById("dni")).value); 
    let legajo : number = parseInt((<HTMLInputElement> document.getElementById("legajo")).value); 
    let sueldo : number = parseInt((<HTMLInputElement> document.getElementById("sueldo")).value); 
    let emp = new Empleados.Empleados(legajo,sueldo,nombre, apellido, dni, sexo);
    
       alert(emp.ToString());
       alert(emp.Hablar("Ingles"));
}


