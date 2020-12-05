<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Tarea PHP</title>
</head>
<body>
            <!-- navbar  -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">UNIR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">Sobre Nosotros <span class="sr-only"></span></a>
      </li>
     
    </ul>
  </div>
</nav>
            <!-- /navbar  -->


    <div class="container mt-3" style="text-align: center;">
    <div class="jumbotron bg-dark">
    <h2 style="color: white;">Peliculas</h2>
        <div class="row hero">
            <div class="col-md-6 col-xs-12">
               <img src="/images/movienight.svg" class="mt-5" style="width: 350px">
            </div>
            <div class="col-md-6 col-xs-12">
                <p class="mt-5 text-justify"><span class="align-middle">
                    <h3>Requerimientos</h3>
                <br />
                • Se utilizó la estructura de control If para escoger la pelicula y un ForEach para mostrar las peliculas en la selección.
                <br />
                • Se utilizó un arreglo donde se insertaron las 3 peliculas.
                <br />
                • Se utilizo una función para mostrar la carta con la pelicula, agregar el nombre y link que te lleva a su página de IMDB
                <br />
                • Se utilizó la función de cadenas strToUpper para mostrar el nombre en mayusculas dentro de la carta y tambien se dio uso a strReplace para remover espacios en blanco en peliculas con mas de una palabra.

                </span>
                </p>
            </div>
        </div>
    </div>
        </div>
        <?php
        
        //array
        $arreglo = ['Interstellar', 'Seniales', 'Senior de los anillos'];
    ?>
       <div class="container" style="text-align: center; <?php echo $style; ?>">    
            <form action="index.php" method="POST" id="peliculas">
                <h3>Escoge tu pelicula</h3>
              <select class="custom-select" name="peliculas" style="width: 50%;">
              <?php 
                    $i = 0;
                    //estructura de control
                   
                    foreach ($arreglo as $val) {
                         echo "<option value='".$val."'>".$val."</option>";
                     }
                     
                     //funcion
                     function displayNombrePelicula($nombrePelicula, $imdbLink) {
                         echo '<div class="card mt-5 mx-auto " style="width: 18rem;">
                         <img class="card-img-top" src=/images/'.$nombrePelicula.'.jpg>'.' >
                         <div class="card-body">
                           <h5 class="card-title">'.strtoUpper($nombrePelicula).'</h5>
                           <p class="card-text">Texto que se puede expandir en un futuro con el uso the una API que nos brinde la informacion de la pelicula.</p>
                           <a href='.$imdbLink.' class="btn btn-primary" target="_blank">Ver mas informacion</a>
                         </div>
                       </div>';
                        
                     }
              ?>
              
              </select>
                <br />
                <button class="btn btn-primary mt-3" name="btnPelicula" value="btnPelicula" type="submit">Enviar mi Seleccion de pelicula</button>
            </form>

                     <?php
                     
                     $pelicula = $_POST['peliculas'];
                     if (isset($pelicula)) {
                         //funcion de cadena
                         $pelicula = str_replace(' ', '', $pelicula);
                         if ($pelicula == 'Interstellar') {
                             $imdbLink = "https://www.imdb.com/title/tt0816692/?ref_=fn_al_tt_1";
                            }

                            else if ($pelicula == 'Seniales') {
                                $imdbLink = "https://www.imdb.com/title/tt0286106/";
                            }
                            
                            else if ($pelicula == "Seniordelosanillos") {
                                 $imdbLink = "https://www.imdb.com/title/tt0120737/?ref_=fn_al_tt_1";
                             }
                         }
                         displayNombrePelicula($pelicula, $imdbLink);
                     

                     ?>
        
        </div>

        <!-- footer  -->

        <div class="card mb-0 text-center container-fluid">
    <div class="card-header">
    Featured
    </div>
    <div class="card-body bg-dark card-footer">
        <h5 class="card-title">Footer</h5>
        <p class="card-text">Se planea mejorar, por ahora solo es para presentar los requerimientos de la tarea</p>
    </div>

        </div>

<!-- footer  -->
</body>
</html>


