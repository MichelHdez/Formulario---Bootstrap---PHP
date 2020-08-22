<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto con PHP</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
  </head>

  <body>

  <div class="container">
   <h1 class="form">Contacto</h1>
   <!--la propiedad enctype permite el envío de archivos adjuntos en el formulario. -->    
    <form id="form1" class="well col-lg-12" action="procesa.php" method="post" name="form1" enctype="multipart/form-data">
      <div class="row">
       <div class="col-lg-6">
        <!-- <label>Nombre*</label> <input id="Nombre" class="form-control" type="text" name="name" />  -->
        <!-- <label>Email*</label> <input id="Email" class="form-control" type="email" name="email" /> -->
       </div>
        <!-- <div class="col-lg-6"><label>Mensaje*</label> 
         <textarea id="Mensaje" class="form-control" name="mensaje"></textarea>
        </div> -->
    <div class="col-lg-12">
    <label for="file">Adjuntar archivo</label>
    <input type="file" name="file" id="archivo-adjunto">
  </div>
      <button type="submit" name="submit" class="btn btn-primary ml-3 mt-1">Enviar</button>
      </div>
    </form>
  </div>
    <!-- javascript para confirmar datos del formulario.
    ================================================== -->
    <!-- La página carga más rapido si estan situados al final del documento. -->
  </body>
</html>