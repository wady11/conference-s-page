<?php include_once 'includes/templates/header.php'; ?>

        <section class="seccion contendor">
          <h2>
            LA MEJOR CONFERENCIA DE DISEÑO WEB EN ESPAÑOL
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus esse, ad totam ipsa maiores repellendus ex voluptatum ut sapiente natus? Rem ex, neque! Totam reprehenderit temporibus expedita nam officiis. Corporis!
          </p>
         </section><!---fin del seccion-->

         <section class="programa">
         <div class="contenedor-video">
            <video autoplay loop poster="img/bg-talleres.jpg">
              <source src="videos/video3.mp4" type="video/mp4">
              <source src="videos/video1.webm" type="video/webm">
               <source src="videos/video2.ogv" type="video/ogv">

            </video>
          </div><!--contenedor-video-->

          <div class="contenido-programa">
              <div class="contendor">
                  <div class="programa-evento">
                    <h2>programa del evento</h2>

                        <?php 
                          try {
                              require_once('includes/funciones/bd_conexiones.php');
                              $sql = "SELECT * FROM `categoria_evento`;";
                              $resultado = $conn->query($sql);
                          } catch (expection $th) {
                              $error = $th->getmessage();
                          }
                      ?>
                      <!-- <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>-->

                    <nav class="contenedor-programa">
                      <?php while ($cat = $resultado->fetch_array(MYSQLI_ASSOC)) {?>
                          <?php $categoria = $cat['cat_evento'];?>
                        <a href="#<?php echo strtolower($categoria)?>">
                        <i class="fas <?php echo $cat['icono'];?>"></i>
                        <?php echo $cat['cat_evento']; ?>
                        </a>
                       
                     <?PHP } ?> 
                    </nav>

                    <?php 
                    try {
                        require_once('includes/funciones/bd_conexiones.php');
                          $sql = "SELECT`evento_id`,`nombre_evento`,`fecha_evento`,`hora_evento`,`cat_evento`,`nombre_invitado`,`apellido_invitado`";
                          $sql .=" FROM `eventos`";
                          $sql .=" INNER JOIN `categoria_evento`";
                          $sql .=" ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                          $sql .="INNER JOIN `invitados`";
                          $sql .="ON eventos.id_inv = invitados.invitado_id AND id_cat_evento = 1 ORDER BY `evento_id` limit 2;";
                          $sql .= "SELECT`evento_id`,`nombre_evento`,`fecha_evento`,`hora_evento`,`cat_evento`,`nombre_invitado`,`apellido_invitado`";
                          $sql .=" FROM `eventos`";
                          $sql .=" INNER JOIN `categoria_evento`";
                          $sql .=" ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                          $sql .="INNER JOIN `invitados`";
                          $sql .="ON eventos.id_inv = invitados.invitado_id AND id_cat_evento = 2 ORDER BY `evento_id` limit 2;";
                          $sql .= "SELECT`evento_id`,`nombre_evento`,`fecha_evento`,`hora_evento`,`cat_evento`,`nombre_invitado`,`apellido_invitado`";
                          $sql .=" FROM `eventos`";
                          $sql .=" INNER JOIN `categoria_evento`";
                          $sql .=" ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                          $sql .="INNER JOIN `invitados`";
                          $sql .="ON eventos.id_inv = invitados.invitado_id AND id_cat_evento = 3 ORDER BY `evento_id` limit 2;";

                    } catch (expection $th) {
                        $error = $th->getmessage();
                    }
                    ?>

                      <?php $conn->multi_query($sql);?>

                      <?php
                            do {
                                $resultado =$conn->store_result();
                                $row =$resultado->fetch_all(MYSQLI_ASSOC); ?>
                                    <?php $i = 0;?>
                                  <?php foreach ($row as $value):?>
                                  <?php if($i % 2 == 0): ?>
                                   <div class="info-curso ocultar clearfix" id="<?php echo strtolower($value['cat_evento'])?>">
                                   <?php endif;?>
                                      <div class="detalle-evento">
                                        <h3><?php echo $value['nombre_evento']?></h3>
                                        <p><i class="fa fa-clock"></i><?php echo $value['hora_evento']?></p>
                                        <p><i class="fa fa-calendar-alt"></i><?php echo $value['fecha_evento']?></p>
                                        <p><i class="fa fa-user"></i><?php echo $value['nombre_invitado']." ".$value['apellido_invitado'];?></p>
                                      </div>
                                     
                                      
                                       <?php if($i % 2 == 1):?>
                                       <a href="/calendario.php" class="button float-right ">Ver todos</a>
                                    </div><!--end talleres-->
                                <?php endif; ?>
                                    <?php $i++;?>
                            <?php endforeach;?>
                            <!--se utiliza free cuando utilizamos una multi_query-->
                            <?php $resultado->free();?>
                       <?php } while($conn->more_results() && $conn->next_result());
                      
                      ?>
                      
                       
                     



                   
                  </div><!--end eventos-->
              </div><!--end contenedor-->
          </div><!--end contenido-programa-->
         </section><!--programa-->

         <?php include_once('includes/templates/invitado.php'); ?>

          <div class="contador paralax">
            <div class="contendor">
              <ul class="resumen-evento clearfix">

                <li><p class="numero"></p> invitados</li>
                <li><p class="numero"></p>Talleres</li>
                <li><p class="numero"></p>Dias</li>
                <li><p class="numero"></p> conferencia</li>

              </ul>
            </div>
          </div><!--final del contador-->
          
            <section class="precios seccion">
              <h2>Precios</h2>
                  <div class="contendor">
                      <ul class="lista-precio clearfix">
                        <li>
                          <div class="tabla-precio">
                            <h3>Pase por dia  </h3>
                            <p class="numero">$30</p>
                            <ul>
                             <li><i class="fas fa-check"></i>bocadillos gratis</li>
                             <li><i class="fas fa-check"></i> todas las conferencias</li>
                             <li><i class="fas fa-check"></i> todos los talleres</li>
                             <a href="#" class="button hallow"> Comprar </a>
                            </ul>
                          </div>
                        </li>
                        <li>
                            <div class="tabla-precio">
                              <h3>Todos los dias  </h3>
                              <p class="numero">$50</p>
                              <ul>
                               <li><i class="fas fa-check"></i>bocadillos gratis</li>
                               <li><i class="fas fa-check"></i> todas las conferencias</li>
                               <li><i class="fas fa-check"></i> todos los talleres</li>
                               <a href="#" class="button "> Comprar </a>
                              </ul>
                            </div>
                          </li>

                          <li>
                              <div class="tabla-precio">
                                <h3>Pase por  2 dias </h3>
                                <p class="numero">$45</p>
                                <ul>
                                 <li><i class="fas fa-check"></i>bocadillos gratis</li>
                                 <li><i class="fas fa-check"></i> todas las conferencias</li>
                                 <li><i class="fas fa-check"></i> todos los talleres</li>
                                 <a href="#" class="button hallow"> Comprar </a>
                                </ul>
                              </div>
                            </li>

                      </ul>
                  </div>

            </section>

            <div class="mapa" id="mapa">

            </div>
          
        <section class="seccion">  
          <h2>testimoniales</h2> 
          <div class="testimoniales contendor clearfix"">
          <div class="testimonial ">
            <blockquote >  
                <i class="fas fa-quote-left coma"></i><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quasi illum, labore saepe ipsa blanditiis optio ex iste veniam modi, error voluptates. Accusantium pariatur vero, deleniti reiciendis earum dicta amet.</p>
              <footer class="info-testimonial clearfix">
                <img src="/img/fhany.jpg" width="146px" height="30px"      alt="testimonial">
                <cite>Wady Nicudemos <span>Ingeniero en chase</span></cite>
              </footer>
            </blockquote>
          </div><!--testimoniales-->
          <div class="testimonial ">
              <blockquote >  
                <i class="fas fa-quote-left coma"></i> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quasi illum, labore saepe ipsa blanditiis optio ex iste veniam modi, error voluptates. Accusantium pariatur vero, deleniti reiciendis earum dicta amet.</p>
                <footer class="info-testimonial clearfix">
                  <img src="/img/fhany.jpg" width="46px" height="30px"      alt="testimonial">
                  <cite>Wady Nicudemos <span>Ingeniero en chase</span></cite>
                </footer>
              </blockquote>
            </div><!--testimoniales-->
            
            <div class="testimonial ">
                <blockquote >  
                  <i class="fas fa-quote-left coma"></i><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quasi illum, labore saepe ipsa blanditiis optio ex iste veniam modi, error voluptates. Accusantium pariatur vero, deleniti reiciendis earum dicta amet.</p>
                  <footer class="info-testimonial clearfix  " >
                    <img src="/img/fhany.jpg" width="146px" height="30px"      alt="testimonial">
                    <cite>Wady Nicudemos <span>Ingeniero en chase</span></cite>
                  </footer>
                </blockquote>
              </div><!--testimoniales-->
        </div>
        </section><!--fin de tesmoniales-->


        <div class="newsletter paralax">
          <div class="contenido contendor"> 
              <p>registrate al newsletter:</p>
              <h3>gdlwebcamp</h3>
              <a href="#" class="button transparente">Registro</a>
          </div>

        </div><!--newsletter fin-->

        <section class="seccion"> 
          <h2>Faltan</h2>
          <div class="cuenta-regresiva contendor">
            <ul class="clearfix">
              <li> <p id="dias" class="numero"></p>Dias</li>
              <li> <p id="horas"  class="numero"></p> Horas</li>
              <li> <p  id="minutos" class="numero"></p> Minutos</li>
              <li> <p id="segundos"  class="numero"></p> Segundos</li>
            </ul>
          </div>
        </section><!--Final del contador-->
        
        <!--no se podra mostrar el footer pro que no te tiene la bd-->
        <?php include_once 'includes/templates/footer.php'; ?>