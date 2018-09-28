"use strict";
function main() {
    var json = [{ "codigoBarra": "cue 873", "nombre": "atilio", "precio": 230000 }, { "codigoBarra": "aba 793", "nombre": "fulanito", "precio": 200000 }, { "codigoBarra": "yei 157", "nombre": "pedro", "precio": 280000 },];
    alert(json[1].codigoBarra.toString() + " - " + json[0].codigoBarra.toString() + " - " + +json[2].codigoBarra.toString());
    console.log(json[1].nombre.toString() + " - " + json[0].nombre.toString() + " - " + +json[2].nombre.toString());
}
//# sourceMappingURL=main.js.map