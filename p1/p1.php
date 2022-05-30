<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="p1.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:wght@100;300;400;500&display=swap"
      rel="stylesheet"
    />
    <title>PHP</title>
</head>
<body>
    <header class="site_header centered">
      <h1 class="page_title">DATOS DEL SERVIDOR</h1>
    </header>
    <main class="contenedor_pcpal_php">
      <div class="contenedor_datos">
        <div class="datos_formulario">
          <label class="field_data">Nombre y Apellido:</label>
          <p class="data_value"><?php echo htmlspecialchars($_REQUEST['cname'])?>
        </div>
        <div class="datos_formulario">
          <label class="field_data"> Usuario:</label>
          <p class="data_value"><?php echo htmlspecialchars($_REQUEST['clogin'])?>
        </div>
        <div class="datos_formulario">
          <label class="field_data">Contraseña:</label>
          <p class="data_value"><?php echo htmlspecialchars($_REQUEST['cpasswd'])?></p>
        </div>
        <div class="datos_formulario">
          <label class="field_data">Teléfono:</label>
          <p class="data_value"><?php echo htmlspecialchars($_REQUEST['ctlph'])?></p>
        </div>
        <div class="datos_formulario">
          <label class="field_data">Email:</label>
          <p class="data_value"><?php echo htmlspecialchars($_REQUEST['cemail'])?></p>
        </div>
        <div class="datos_formulario">
          <label class="field_data">Rango de edad:</label>
          <p class="data_value"><?php echo htmlspecialchars($_REQUEST['cage'])?></p>
        </div>
        <div class="datos_formulario">
          <label class="field_data">Géneros que te interesan:</label>
          <p class="data_value"><?php 
          $selected = '';
          foreach($_REQUEST['cgenre'] as $value){
            $value = $value . ' ';
            $selected .= $value;
          }
          echo htmlspecialchars($selected)
          ?>
          </p>
        </div>
        <div class="datos_formulario">
          <label class="field_data">Tu comentario:</label>
          <p class="data_value"><?php echo htmlspecialchars($_REQUEST['ccomment']) ?></p>
        </div>
        <div class="datos_formulario">
          <label class="field_data">Proveedor de internet:</label>
          <p class="data_value"><?php echo htmlspecialchars($_REQUEST['cInternet'])?></p>
        </div>
        <div class="datos_formulario">
          <label class="field_data">Navegador</label>
          <p class="data_value"><?php echo htmlspecialchars($_REQUEST['cbrowser'])?></p>
        </div>
        <div class="datos_formulario">
          <label class="field_data">Método de envio</label>
          <p class="data_value"><?php echo htmlspecialchars($_REQUEST['method'])?></p>
        </div>
        <div class="datos_formulario">
          <label class="field_data">Método de codificación</label>
          <p class="data_value"><?php echo htmlspecialchars($_REQUEST['codification'])?></p>
        </div>
      </div>
      
    </main>
    <div id='contenedor_phpinfo'>
        <?php 
          phpinfo();
        ?>
      </div>
    <footer class="bg_black">
      <p id="copy">&copy;Isaac Naveira Comesaña</p>
    </footer>
</body>
</html>