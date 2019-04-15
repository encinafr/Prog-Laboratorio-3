
namespace Empleados{

    export abstract class Persona {
        protected _apellido:string;
        protected _nombre:string;
        protected _dni:number;
        protected _sexo:string;
    
        constructor(nombre:string, apellido:string, dni:number, sexo:string) {
            this._nombre = nombre;
            this._apellido = apellido;
            this._dni = dni;
            this._sexo = sexo;
        }

        public GetApellido():string {
            return this._apellido;
        }

        public GetNombre():string {
            return this._nombre;
        }

        public GetDni():number {
            return this._dni;
        }

        public GetSexo():string {
            return this._sexo;
        }

        public abstract Hablar(idioma:string):string;

        public ToString():string
        {
            return this.GetNombre()+"-"+this.GetApellido()+"-"+this.GetSexo()+"-"+this.GetDni();
        }
        
    }
}
