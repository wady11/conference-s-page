<!doctype html>
<html class="no-js" lang="">

<head>

  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="progma" content="no-cache">

  <meta charset="utf-8">
  <title>La mejor conferencia</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/all.css">

  <?php 
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php", "",$archivo);
      if ($pagina == 'invitados' || $pagina == 'indexe') {
          echo '<link rel="stylesheet" href="css/colorbox.css">';
      }else if ($pagina == 'conferencia')
      {
        echo '<link rel="stylesheet" href="css/lightbox.min.css">';
      }
  
  
  ?>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
  <meta name="theme-color" content="#fafafa">
</head>

<body class="<?php echo $pagina;?>">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
        <header class="site-header">
            <div class="hero">
              <div class="contenido-header">

                <nav class="redes-sociales">
                  <a href="#"><i class="fa fa-facebook-f"></i></a>
                  <a href="#"><i class="fa fa-pinterest-p"></i></a>
                  <a href="#"><i class="fa fa-youtube"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </nav>

                  <div class="informacion-evento"> 
                    <div class="clearfix">
                        <p class="fecha"><i class="fa fa-calendar-alt"></i>  10-12-Abril</p>
                        <p class="ciudad"><i class="fa fa-map-marker"></i> R. Dominicana </p>
                    </div>
                      <h1 class="nombre-sitio">Gdlwebcamp</h1>
                      <p class="slogan">el mejor sitio de <span>diseño web</span></p>
                  </div><!--Informacion envento-->
                
                
               
              </div>
           </div><!--hero-->
        </header>
        <div class="barra">
          <div class="contendor clearfix">
            <div class="logo">
             <a href="/conference-page/indexe.php"><img src="img/logo.png"></a> 
            </div>
            
            <div class="menu-mobil">
              <span></span>
              <span></span>
              <span></span>
             
            </div>

            <nav class="navegacion-principal clearfix">
              <a href="/conference-page/conferencia.php">Conferencia</a>
              <a href="/conference-page/calendario.php">Calendario</a>
              <a href="/conference-page/invitados.php">Invitados</a>
              <a href="/conference-page/resevacion.php">Reservaciones</a>
            </nav>

          </div><!--fin contenedor-->
        </div><!--End de barra-->