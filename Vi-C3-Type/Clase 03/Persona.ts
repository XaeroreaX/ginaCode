export class Persona {
    private _nombre : string;
    private _apellido : string;

    constructor(nombre : string, apellido : string)
    {
        this._apellido = apellido;
        this._nombre = nombre;
    }

    public get GetNombre() : string{
        return this._nombre;
    }

    public set SetNombre(value : string){
        this._nombre = value;
    }

    public get GetApellido() : string{
        return this._apellido;
    }

    public set SetApellido(value : string){
        this._apellido = value;
    }

    public ToString(): string
    {
        return this._nombre + "-" + this._apellido;
    }
}