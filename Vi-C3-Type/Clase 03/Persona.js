"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var Persona = /** @class */ (function () {
    function Persona(nombre, apellido) {
        this._apellido = apellido;
        this._nombre = nombre;
    }
    Object.defineProperty(Persona.prototype, "GetNombre", {
        get: function () {
            return this._nombre;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Persona.prototype, "SetNombre", {
        set: function (value) {
            this._nombre = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Persona.prototype, "GetApellido", {
        get: function () {
            return this._apellido;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Persona.prototype, "SetApellido", {
        set: function (value) {
            this._apellido = value;
        },
        enumerable: true,
        configurable: true
    });
    Persona.prototype.ToString = function () {
        return this._nombre + "-" + this._apellido;
    };
    return Persona;
}());
exports.Persona = Persona;
//# sourceMappingURL=Persona.js.map