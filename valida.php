<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <?php $resultado = $_POST;?>
        <?php $Nombre = $resultado['nombre'];?>
        <?php $Apellido = $resultado['apellido'];?>
        

        <p>Nombre: <?php echo $resultado ['nombre']; ?> </p>
        <p>Apellido: <?php echo $resultado ['apellido']; ?> </p>
        <p>Usuario: <?php echo $resultado ['validationServerUsername']; ?> </p>
        <p>Ciudad: <?php echo $resultado ['validationServer03']; ?> </p>
        <p>Region: <?php echo $resultado ['validationServer04']; ?> </p>
        <p>Provincia: <?php echo $resultado ['validationServer05']; ?> </p>
        <p>Nombre: <?php echo $resultado ['invalidCheck3']; ?> </p>



    </div>

    
</body>
</html>