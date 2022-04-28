function Fruta(){ 
    this.Nombre = document.getElementById("fruta").value; 
}
function Verdura(){ 
    this.Nombre = document.getElementById("verdura").value; 
}
function Aceite(){ 
    this.Nombre = document.getElementById("aceite").value; 
}

function Ensalada(){
    this.f=new Fruta();   
    this.v=new Verdura();
    this.a=new Aceite();

    this.imprimirEnsalada = function(jkl){
        var tabla = '<table><tr><th> </th><th>  Gallinas  </th> <th>  Vacas  </th> <th> Ovejas  </th></tr><tr><td>' + jkl.Fruta.clase +' </td> <td>  ' + jkl.Verdura.clase +'  </td> <td> ' + jkl.Aceite.clase +'  </td></tr></table>';
        document.getElementById("tabla").innerHTML = tabla;
    }

}

/* function polo(){
    hawaina=new Ensalada();
    var hawaina = '<table><tr><th> </th><th>  fruta  </th> <th>  verdura  </th> <th> aceite  </th></tr> <tr><td> Clase </td><td>' + jkl.f.clase +' </td> <td>  ' + jkl.v.clase +'  </td> <td> ' + jkl.a.clase +'  </td></tr></table>';
    document.getElementById("tabla").innerHTML = hawaina;
} */

