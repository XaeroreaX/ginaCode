import {Alumno} from "./Alumno";

class Manejadora{
    public static AceptarClick(): void{
        let nombre : string = (<HTMLInputElement>document.getElementById("txtNombre")).value;
        let apellido : string = (<HTMLInputElement>document.getElementById("txtApellido")).value;
        let legajo : number = parseInt((<HTMLInputElement>document.getElementById("txtLegajo")).value);

        let alumno = new Alumno(nombre, apellido, legajo);

        alert(alumno.ToString());
    }
}