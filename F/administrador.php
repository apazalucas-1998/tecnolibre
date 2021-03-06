<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecnoLibre - Administrador</title>
    <link rel="stylesheet" href="css3/estilos.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css3/agregar.css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap" rel="stylesheet">
</head>
<body>
     <!-- Menu de navegacion principal -->
     <header>
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu"><i class="fas fa-bars"></i></label>

        <nav class="menu">
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="laptops.php">Laptops</a></li>
                <li><a href="historia.php">Historias</a></li>
                <li><a href="descarga.php">Descargas</a></li>
                <li><a href="administrador.php">Administrador</a></li>
                
                
                
                    
                <li style="position: relative; left: 65%;"><a href="ayuda.php" title="Ayuda" ><i style="font-size:25px;" class="fas fa-question-circle"></i></a></li>
                <li style="position: relative; left: 65%;"><a href="login.php" title="Ingresar"><i style="font-size:25px;" class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </nav>
    </header>

    <main class="contenedor">
		<article>
            
        <div class="principal">
        <div class="subprincipal">   
        <fieldset>
          <legend><h1>Ingresar como Administrador</h1></legend>  

    <form class="formulario" action="Admin/Admin.php" method="POST">
       <label for="user">Usuario:</label>
        <input type="text" name="user" required> <br>
        <label for="email">Correo Electrónico:</label>
      <input type="text" name="pass"  required > <br>
      <label for="pass">Contraseña:</label>
      <input type="text" name="pass"  required><br>
     
    
      <input type="submit" class="boton" id="btn-agregar" value="Agregar" name="agregar">
     
     
    </form>
   

    </fieldset>

 

    </div>
    <footer>Developed By © Copyright 1999-2020</footer>
    </div>


        </article>
        
    </main>
</body>
</html>