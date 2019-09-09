
function contrasena(){ 
    var contrasena1=(document.getElementById('Contrasena').value);
    var contrasena2=(document.getElementById('Contrasena2').value);

    if (contrasena1 === contrasena2) {
        console.log('bueno');
        } else {
            alert("las contrasenas no coinciden");
            return false;
                }
                
}

