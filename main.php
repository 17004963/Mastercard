

<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="mastercard.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
    <link rel="icon" 
      type="image/png" 
      href="logo.png" />
    <title>Mastercard</title>
</head>

<body class="fondo">
    <div class="row justify-content-center" style="height:100%;">

        <div class="col-6 text-center "> 



                <div id="carouselExampleFade" class="carousel slide carousel-fade h-100" data-ride="carousel" data-interval="2000">
                        <div class="carousel-inner">
                          <div class="carousel-item active" style="width: 45%; height: 100%; position: fixed;">
                            <img class="d-block w-100 h-100 borde" src="imagenes/1.jpg" alt="First slide">
                          </div>
                          <div class="carousel-item" style="width: 45%; height:100%; position: fixed;">
                            <img class="d-block w-100 h-100 borde" src="imagenes/2.jpg" alt="Second slide">
                          </div>
                          <div class="carousel-item" style="width: 45%; height:100%; position: fixed;">
                            <img class="d-block w-100 h-100 borde" src="imagenes/3.jpg" alt="Third slide">
                          </div>
                        </div>
                      </div>
        </div>

        <div class="col-6">
            
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4  " style="margin-bottom: 9%;">
 
    </div>
    
    
    <div class="row justify-content-center " >
    
    
      
    
        <div class="col-10  justify-content-center" style=" margin-left: -10%; margin-top: 15%" >
                <div>
            <img src="logo.png" style="width: 30%; height: 30%; margin-left: 30%;">
                </div>
            <form method="GET" action="iniciado.php" onsubmit="return verificar()">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Em@il" id="email" required>
                </div>

                <div class="form-group">
                    <div class="form-group ">
                        <label for="Contrasena">Constrasena</label>
                        <input type="password" class="form-control form-control-sm" id="Contrasena" required>
                    </div>

                <button type="submit" class="btn btn-danger btn-block">Submit</button>
            </form>
            <p></p>
            <a href="registro.html"> <p class="abajo">Crea una Cuenta!!</p></a>
        </div>
    
    
    </div>

        </div>

    </div>

</body>
<script src="https://kit.fontawesome.com/76a63bf81f.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
