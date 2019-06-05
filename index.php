<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css"> 

    <!-- Estilos de la master -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>
    <h1 id="logo">Formulario de Ingreso</h1>
    <div class="contenedor">
    <form class="fila" action="valida.php" method="POST">
      <div class="form-row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <label for="validationServer01">Nombre</label>
          <input type="text" class="form-control is-valid" id="validationServer01" name="nombre" placeholder="Nombre" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <label for="validationServer02">Apellido</label>
          <input type="text" class="form-control is-valid" id="validationServer02" name="apellido" placeholder="Apellido" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
          <label for="validationServerUsername">Usuario</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend3">@</span>
            </div>
            <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Usuario" aria-describedby="inputGroupPrepend3" required>
            <div class="invalid-feedback">
              Ingresa usuario válido.
            </div>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <label for="validationServer03">Ciudad</label>
          <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Ciudad" required>
          <div class="invalid-feedback">
            Ingresa ciudad válida.
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
          <label for="validationServer04">Región</label>
          <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Región" required>
          <div class="invalid-feedback">
            Ingresa región válida.
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
          <label for="validationServer05">Provincia</label>
          <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Provincia" required>
          <div class="invalid-feedback">
            Ingresa provincia válida.
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
          <label class="form-check-label" for="invalidCheck3">
            Acepto los términos y condiciones.
          </label>
          <div class="invalid-feedback">
            Debes aceptar antes de ingresar.
          </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Enviar formulario </button>
    </form>
    </div>
</body>
</html>