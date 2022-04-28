var vector = [];
function capturar(){ 
    this.Nombre = document.getElementById("nombre").value;
    this.Edad = document.getElementById("edad").value;
    this.Genero = document.getElementById("genero").value; 
}
function registrar(){
    persona = new capturar();
    vector.push(persona);
    concat();
}
function concat(){ 
    document.getElementById("tabla").innerHTML += '<tbody><td>'+persona.Nombre+'</td><td>'+persona.Edad +'</td><td>'+persona.Genero+'</td></tbody>';
}