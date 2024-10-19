<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/www.png" type="image/x-icon">
    <link rel="stylesheet" href="css/c.css">
    <link rel="icon" type="image/x-icon" href="mediaa/icons8-favicon-16 (1).png">
    
    <title>SIYECA</title>
</head>
<body>
    <style>body{background-image: url(mediaa/maxresdefault.jpg);
    background-size: cover;
    background-attachment: fixed;}
    </style>
    <main id="principal">
        <header>
    <div class="Menu container">
        <a href="#" class="logo">AYUNTAMIENTO</a>
        <input type="checkbox" id="Menu">
        <label for="Menu">
            <ing src="media/Menu.png" class="Menu-icono" alt="">
        </label>

        <nav class="navbar">

            <ul>
                <li><a href="index.html">Salir</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="tablas.html">Bajas</a> </li>
                <li><a href="galery.html">Modificaciones</a></li>
                <li><a href="index.html">Seleccionar</a></li>
            </ul>

        </nav>

    </div>   

    </header>
    <div class="contentcontainer">

        <div class="content" id = "content">
        </div class="wrapper">
        <img src="mediaa/images.jfif" alt=" " width="10%" height="10%"> 
        <div class="text-box">
            <h2>Altas de empleados </h2>
        </div>
        </div> 
       <div class="sy">
        <h1>(SIYECA) </h1>
       </div>
            
            
            <img src="image/shutterstock-51313744_sm.webp" alt="">
        </div>
    </div> 
       <div class="form-content">
        <h2>Enviar tu solicitud</h2>
        <form acción="" método="POST">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name">


            <?php
            $nombrev = $_POST['name'];
            echo =['name'];

            ?>
<!--
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" value="18" minlength="18" maxlength="60" >

            <label for="CURP">CURP</label>
            <input type="CURP" name="CURP" id="CURP" maxlength="18">

            <label for="NM">NUMERO DE TELEFONÓ</label>
            <input type="number" name="numer" id="numer" maxlength="10">

            <label>Nacionalidad:</label>
            <input type="radio" name="m">Mexicano
            <input type="radio" name="m">Extranjero

            <label>Genero:</label>
            <input type="radio" name="g">Hombre
            <input type="radio" name="g">Mujer
            <input type="radio" name="g">Otro

            <label for="dire">Direccion:</label>
            <input type="textarea">

            <label for="pro">Profesión:</label>
            <input type="text" name="pro" id="pro">

            <label for="ocu">Ocupación:</label>
            <input type="text" name="ocu" id="ocu">

            <label for="sa">Tipo de sangre</label>
            <select name="sa" id="sa">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>

            </select>

            <label for="rfc">RFC</label>
            <input type="text" name="rcf" id="rfc">

            <label>Estado civil</label>
            <input type="radio" name="c">casado
            <input type="radio" name="c">soltero
            <input type="radio" name="c">divorciado
            <input type="radio" name="c">viudo
            <input type="radio" name="c">union libre
            
            <label for="tel">NUMERO Tel emergencia</label>
            <input type="number" name="numer" id="numer" maxlength="10">

            <label for="sa">Area o dependencia a trabajar</label>
            <select name="sa" id="sa">
                <option value="a">Obras publicas</option>
                <option value="a">Registro civil</option>
                <option value="a">Seguridad</option>
                <option value="a">Trancito</option>
                <option value="a">Juridico</option>
                <option value="a">Proteccion civil</option>
                <option value="a">Desarrollo social</option>
                <option value="a">Proteccion civil</option>

            </select>
        -->
   <br>
            <input class="btn" type="submit" value="Registrar">
            <input type="hidden" name="_next" value="">

            <input class="btn" type="submit" value="Otros datos">
            <input type="hidden" name="_next" value="">
        </form>

    </div>

</body>
</html>