/// <reference path="./ajax.ts"/>
namespace miNamespace
{
    
    export function HacerListado() : void
    {
        var ajax : Ajax = new Ajax()
        ajax.Post("./administrarRemeras.php",(resultado:string)=>{
            let arrayRemeras = JSON.parse(resultado);
            let miTabla : string = "<table border=1><tr><th>ID</th><th>slogan</th><th>size</th><th>price</th></tr>";
            for (let index = 0; index < 200; index++) {
                miTabla += "<tr><th>"+arrayRemeras[index].id+"</th><th>"+arrayRemeras[index]["slogan"]+"</th><th>"+arrayRemeras[index]["size"]+"</th><th>"+arrayRemeras[index]["price"]+"</th></tr>";
            }
            miTabla += "</table>";
            (<HTMLDivElement> document.getElementById("auxDiv")).innerHTML = miTabla;
        },"",fail)

    }
    function fail(retorno:string)
{
    console.clear();
    console.log("ERROR!!!");
    console.log(retorno);
}
}