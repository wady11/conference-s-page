<footer class="site-footer">
          <div class="contendor clearfix">
            <div class="ultima-informacion">
              <h3>sobre <span> gldwecamp</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus esse, ad totam ipsa maiores repellendus ex voluptatum ut sapiente natus? Rem ex, neque! Totam reprehenderit temporibus expedita nam officiis. Corporis!</p>
            </div>
            <div class="ultimos-tweets">
              <h3>Ultimos  <span> Tweets</span></h3>
              <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
              </ul>

            </div>
            <div class="menu">
              <h3>Redes <span>Sociales</span></h3>
                <nav class="redes-sociales">
                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </nav>

            </div >
              
          </div>
         
        </footer>
        <p class="copyright">
            Todos los derechos reservados &copy;
          </p>

  <!-- Add your site or application content here -->
  <script src="/js/script.js"></script>
  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.lettering.js"></script>
  <script src="js/jquery.waypoints.js"></script>

  <?php 

  //con eta condicion solo utilizamos los estilos donde se usan pues!
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php", "",$archivo);
      if ($pagina == 'invitados' || $pagina == 'indexe') {
             echo '<script src="js/jquery.colorbox-min.js"></script>';
      }else if ($pagina == 'conferencia')
      {
        echo '<script src="js/lightbox.min.js"></script>';
      }
  
  
  ?>

  
  


  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
