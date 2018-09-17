import {Persona} from "./Persona";

export class Alumno extends Persona{
    private _legajo : number;

    constructor (nombre : string, apellido : string, legajo : number)
    {
        super(nombre, apellido);
        this._legajo = legajo;
    }

    public get GetLegajo () : number
    {
        return this._legajo;
    }

    public set SetLegajo (value : number)
    {
        this._legajo = value;
    }

    public ToString() : string{
        return this._legajo + "-" + super.ToString();
    }

    //funcion para enviar una peticion por ajax

    public static GuardarEnArchivo(): void {

        let nombre : string = (<HTMLInputElement> document.getElementById("txtNombre")).value;
        let legajo : number = parseInt((<HTMLInputElement> document.getElementById("txtLegajo")).value);
        let apellido : string = (<HTMLInputElement> document.getElementById("txtApellido")).value;

        let alumno = new Alumno(nombre, apellido, legajo);

        let xhttp : XMLHttpRequest = new XMLHttpRequest();

        xhttp.open("GET", "gestor.php?datos="+alumno.ToString()+"&opcion=guardarEnArchivo", true);
        //probar lo mismo con Post

        xhttp.send();

        xhttp.onreadystatechange = () => {

            console.log(xhttp.readyState);

            if (xhttp.readyState == 4 && xhttp.status == 200)
            {
                if(xhttp.responseText == "true"){
                    alert("Se guardo en el archivo con existo!!");
                }
                else{
                    alert("Hubo un error");
                }
            }
        }

    }

    public static TraerDeArchivo(): void{

        let div = (<HTMLDivElement> document.getElementById("divListado"));
        let xhttp : XMLHttpRequest = new XMLHttpRequest();

        xhttp.open("GET", "gestor.php?opcion=traerDeArchivo", true);

        xhttp.send();

        xhttp.onreadystatechange = () =>{
            div.innerHTML = "";
            if()
        }

    }
}