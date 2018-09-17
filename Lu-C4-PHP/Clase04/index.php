<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejercicio Subir Archivo en PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="archivo.php" method="POST" enctype="multipart/form-data">
        <div>
            <label>Nombre:</label> <input type="text" name="txtNombre" id="txtNombre"/><br><br>
            <label>Elija una imagen:</label>
            <input type="file" name="archivo" id="archivo" accept="images/*"/><br><br>

            <div>
            <input type="submit" value="Subir archivo"/>
            </div>
        </div>
    </form>
    
</body>
</html>