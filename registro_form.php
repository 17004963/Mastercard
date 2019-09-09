<?php 

$email=$_GET["email"];
$dpi=(int)$_GET["dpi"];
$nombre=$_GET["nombre"];
$apellido=$_GET['apellido'];
$direccion=$_GET['direccion'];
$telefono=(int)$_GET['telefono'];
$contrasena=$_GET['Contrasena'];


$conn = pg_connect("host=localhost dbname=Mastercard user=postgres password=admin");


$queri1="select niu from clientes where niu='$dpi'";
$result1=pg_query($conn,$queri1);


if( pg_num_rows($result1)==0 ){
    $queri2="select correo from clientes where correo='$email'";
    $result2=pg_query($conn,$queri2);
    if(pg_num_rows($result2)==0){
        $queri= "insert into clientes(niu,telefono,nombres,apellidos,direccion,contrasena,correo) values('$dpi','$telefono','$nombre','$apellido','$direccion','$contrasena','$email')";
        $result=pg_query($conn,$queri);
        if($result){
            echo "fila insertada";
        }else {
            echo "todo se fue al popo";
        }
    }else{
        echo "
        
        <!DOCTYPE html>
        <html lang='en'>
        <head>
        <meta charset='UTF-8'>

        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
        <link href='https://fonts.googleapis.com/css?family=Cinzel&display=swap' rel='stylesheet'>
    
        <link rel='stylesheet' href='mastercard.css'>
        <link rel='icon' 
         type='image/png' 
         href='logo.png' />
        <title>Registro de Usuarios</title>
        </head>

        <body class='fondo'>


        <div class='d-flex flex-column flex-md-row align-items-center p-3 px-md-4  border-bottom shadow-sm' style='margin-bottom: 9%; background-color:#FCB333'>
        <img src='logo.png' style='width: 5%;'>
        <nav class='my-2 my-md-0 mr-md-3'>
        </nav>
        <a class='btn btn-outline-secondary' href='registro.html' style='margin-left:85%'>regresar</a>
        </div> 
        
        <div class='row justify-content-center ' >
        <div class='col-2 ' style='padding:0;'>
        <img src='imagenes/6.png' class='card-img filtro' >
        <div class='card-img-overlay text-center p_registro'>
            </div>
         </div>
        
         <h1>Correo asociado a una cuenta<h1>
         <hr>
        ";
     
    }
}else{
    echo "
        
    <!DOCTYPE html>
    <html lang='en'>
    <head>
    <meta charset='UTF-8'>

    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <link href='https://fonts.googleapis.com/css?family=Cinzel&display=swap' rel='stylesheet'>

    <link rel='stylesheet' href='mastercard.css'>
    <link rel='icon' 
     type='image/png' 
     href='logo.png' />
    <title>Registro de Usuarios</title>
    </head>

    <body class='fondo'>


    <div class='d-flex flex-column flex-md-row align-items-center p-3 px-md-4  border-bottom shadow-sm' style='margin-bottom: 9%; background-color:#FCB333'>
    <img src='logo.png' style='width: 5%;'>
    <nav class='my-2 my-md-0 mr-md-3'>
    </nav>
    <a class='btn btn-outline-secondary' href='registro.html' style='margin-left:85%'>regresar</a>
    </div> 
    
    <div class='row justify-content-center ' >
    <div class='col-2 ' style='padding:0;'>
    <img src='imagenes/6.png' class='card-img filtro' >
    <div class='card-img-overlay text-center p_registro'>
        </div>
     </div>
    
     <h1>dpi asociado a una cuenta<h1>
     <hr>
    ";
}







?>

