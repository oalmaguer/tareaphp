<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3" style="text-align: center;">
    <div class="jumbotron">
        <h1 class="display-3">Primer Tarea</h1>
        <p class="lead">Escriba "maestro"</p>
        <hr class="my-2">
        <form action="index.php" method="POST">
            <input type="text" name="usuario" placeholder="maestro" id="usuario">
            <br />
            <button class="btn btn-primary btn-lg mt-3" name="btnMaestro" value="btnMaestro" type="submit">Submit Maestro</button>
        </form>
    </div>
        </div>
        <?php
        $style = '';
        $usuario = $_POST['usuario'];
        if (isset($_POST['btnMaestro'])) {
        if ($usuario == "maestro") {
            echo '<h1 style="text-align:center;">Bienvenido Maestro!</h1>';
            $style = 'display: block;';
        } else {
            echo '<h1 style="text-align:center;">Usted no es el maestro</h1>';
            $style = 'display: none;';
        }
    }

        $arreglo = ['Interstellar', 'Seniales', 'Senior de los anillos'];
    ?>
       <div class="container" style="text-align: center; <?php echo $style; ?>">    
            <form action="index.php" method="POST" id="peliculas">
              <select name="peliculas" >
              <?php 
                    $i = 0;
                    foreach ($arreglo as $val) {
                         echo "<option value='".$val."'>".$val."</option>";
                     }

                     function displayNombrePelicula($nombrePelicula) {
                        echo '<h1 class="mt-3">'.strtoUpper($nombrePelicula).'</h1>';
                        echo '<div class="container imgMovie" style="text-align: center;"><img src=/images/'.$nombrePelicula.'.jpg>';
                     }

              ?>
              
              </select>
                <br />
                <button class="btn btn-primary btn-sm mt-3" name="btnPelicula" value="btnPelicula" type="submit">Enviar mi Seleccion de pelicula</button>
            </form>

                     <?php
                     
                     $pelicula = $_POST['peliculas'];
                     if (isset($pelicula)) {
                         $pelicula = str_replace(' ', '', $pelicula);
                         displayNombrePelicula($pelicula);
                     }

                     ?>
        
        </div>
</body>
</html>


