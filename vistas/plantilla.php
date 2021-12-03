<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Backend up</h1>
    <?php
    if (isset($_SESSION["validarSesionBackend"]) && $_SESSION["validarSesionBackend"] === "ok") {
        include "modulos/cabezote.php";
        include "modulos/menu.php";

        echo $_GET["ruta"];
        if (isset($_GET["ruta"])) {
            if ($_GET["ruta"] == "inicio" || $_GET["ruta"] == "perfil" || $_GET["ruta"] == "productos" || $_GET["ruta"] == "login") {
                include "modulos/" . $_GET["ruta"] . ".php";
            }
        }
    }else{
        include "modulos/login.php";
    }

    include "modulos/footer.php";
    ?>
</body>

</html>