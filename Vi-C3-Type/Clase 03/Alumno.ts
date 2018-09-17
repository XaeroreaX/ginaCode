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
}