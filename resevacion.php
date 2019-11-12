<?php include_once 'includes/templates/header.php'; ?>

                  <section class="contendor seccion">
                      <h2>Registro de usuario</h2>
                      
                        <form action="/conference-page/validacion_registro.php" id="registro" class="registro" method="POST">
                            <div id="datos_usuarios" class="registro caja clearfix">
                                    <div class="campo">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" name="nombre" id="nombre" placeholder="escriba su nombre"  />
                                    </div> 
                                    <div class="campo">
                                            <label for="apellido">Apellido:</label>
                                            <input type="text" name="apellido" id="apellido" placeholder="escriba su apellido"  />
                                     </div> 
                                     <div class="campo">
                                            <label for="email">Email:</label>
                                            <input type="email" name="email" id="email" placeholder="escriba Tu email"  />
                                     </div> 

                                     <div id="error">

                                     </div><!--fin de error-->
                                     
                            </div><!--final de datos usuarios-->

                            <div id="paquetes" class="paquetes">
                                <h3>Elige el numero de boletos</h3>
                                <ul class="lista-precio clearfix">
                                        <li>
                                          <div class="tabla-precio">
                                            <h3>Pase por dia (Viernes)  </h3>
                                            <p class="numero">$30</p>
                                            <ul>
                                             <li><i class="fas fa-check"></i>bocadillos gratis</li>
                                             <li><i class="fas fa-check"></i> todas las conferencias</li>
                                             <li><i class="fas fa-check"></i> todos los talleres</li>
                                             <div class="orden">
                                                    <label for="pase_dia">Boletos deseados</label>
                                                    <input type="number" id="pase_dia" min="0" name="boleto[]" placeholder="0"  size="3" />
                                             </div>
                                             
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
                                               <div class="orden">
                                                    <label for="pase_completo">Boletos deseados</label>
                                                    <input type="number" id="pase_completo" min="0"  name="boleto[]" placeholder="0"  size="3" />
                                             </div>
                                              </ul>
                                            </div>
                                          </li>
                
                                          <li>
                                              <div class="tabla-precio">
                                                <h3>Pase por  2 dias (Sabado Y Domingo) </h3>
                                                <p class="numero">$45</p>
                                                <ul>
                                                 <li><i class="fas fa-check"></i>bocadillos gratis</li>
                                                 <li><i class="fas fa-check"></i> todas las conferencias</li>
                                                 <li><i class="fas fa-check"></i> todos los talleres</li>
                                                 <div class="orden">
                                                        <label for="pase_2dias">Boletos deseados</label>
                                                        <input type="number" id="pase_2dias" min="0" name="boleto[]" placeholder="0"  size="3" />
                                                 </div>
                                                </ul>
                                              </div>
                                            </li>
                
                                      </ul>

                            </div><!--final de paquetes-->

                            <div id="eventos" class="eventos clearfix">
                                    <h3>Elige tus talleres</h3>
                                    <div class="caja">
                                          <div id="viernes" class="contenido-dia clearfix">
                                              <h4>Viernes</h4>
                                                  <div>
                                                      <p>Talleres:</p>
                                                      <label><input type="checkbox" name="registro[]" id="taller_01" value="taller_01"><time>10:00</time> Responsive Web Design</label>
                                                      <label><input type="checkbox" name="registro[]" id="taller_02" value="taller_02"><time>12:00</time> Flexbox</label>
                                                      <label><input type="checkbox" name="registro[]" id="taller_03" value="taller_03"><time>14:00</time> HTML5 y CSS3</label>
                                                      <label><input type="checkbox" name="registro[]" id="taller_04" value="taller_04"><time>17:00</time> Drupal</label>
                                                      <label><input type="checkbox" name="registro[]" id="taller_05" value="taller_05"><time>19:00</time> WordPress</label>
                                                  </div>
                                                  <div>
                                                      <p>Conferencias:</p>
                                                      <label><input type="checkbox" name="registro[]" id="conf_01" value="conf_01"><time>10:00</time> Como ser Freelancer</label>
                                                      <label><input type="checkbox" name="registro[]" id="conf_02" value="conf_02"><time>17:00</time> Tecnologías del Futuro</label>
                                                      <label><input type="checkbox" name="registro[]" id="conf_03" value="conf_03"><time>19:00</time> Seguridad en la Web</label>
                                                  </div>
                                                  <div>
                                                      <p>Seminarios:</p>
                                                      <label><input type="checkbox" name="registro[]" id="sem_01" value="sem_01"><time>10:00</time> Diseño UI y UX para móviles</label>
                                                  </div>
                                          </div> <!--#viernes-->

                                          <div id="sabado" class="contenido-dia clearfix">
                                              <h4>Sábado</h4>
                                              <div>
                                                    <p>Talleres:</p>
                                                    <label><input type="checkbox" name="registro[]" id="taller_06" value="taller_06"><time>10:00</time> AngularJS</label>
                                                    <label><input type="checkbox" name="registro[]" id="taller_07" value="taller_07"><time>12:00</time> PHP y MySQL</label>
                                                    <label><input type="checkbox" name="registro[]" id="taller_08" value="taller_08"><time>14:00</time> JavaScript Avanzado</label>
                                                    <label><input type="checkbox" name="registro[]" id="taller_09" value="taller_09"><time>17:00</time> SEO en Google</label>
                                                    <label><input type="checkbox" name="registro[]" id="taller_10" value="taller_10"><time>19:00</time> De Photoshop a HTML5 y CSS3</label>
                                                    <label><input type="checkbox" name="registro[]" id="taller_11" value="taller_11"><time>21:00</time> PHP Medio y Avanzado</label>
                                              </div>
                                              <div>
                                                    <p>Conferencias:</p>
                                                    <label><input type="checkbox" name="registro[]" id="conf_04" value="conf_04"><time>10:00</time> Como crear una tienda online que venda millones en pocos días</label>
                                                    <label><input type="checkbox" name="registro[]" id="conf_05" value="conf_05"><time>17:00</time> Los mejores lugares para encontrar trabajo</label>
                                                    <label><input type="checkbox" name="registro[]" id="conf_06" value="conf_06"><time>19:00</time> Pasos para crear un negocio rentable</label>
                                              </div>
                                              <div>
                                                    <p>Seminarios:</p>
                                                    <label><input type="checkbox" name="registro[]" id="sem_02" value="sem_02"><time>10:00</time> Aprende a Programar en una mañana</label>
                                                    <label><input type="checkbox" name="registro[]" id="sem_03" value="sem_03"><time>17:00</time> Diseño UI y UX para móviles</label>
                                              </div>
                                          </div> <!--#sabado-->
                                          <div id="domingo" class="contenido-dia clearfix">
                                              <h4>Domingo</h4>
                                              <div>
                                                    <p>Talleres:</p>
                                                    <label><input type="checkbox" name="registro[]" id="taller_12" value="taller_12"><time>10:00</time> Laravel</label>
                                                    <label><input type="checkbox" name="registro[]" id="taller_13" value="taller_13"><time>12:00</time> Crea tu propia API</label>
                                                    <label><input type="checkbox" name="registro[]" id="taller_14" value="taller_14"><time>14:00</time> JavaScript y jQuery</label>
                                                    <label><input type="checkbox" name="registro[]" id="taller_15" value="taller_15"><time>17:00</time> Creando Plantillas para WordPress</label>
                                                    <label><input type="checkbox" name="registro[]" id="taller_16" value="taller_16"><time>19:00</time> Tiendas Virtuales en Magento</label>
                                              </div>
                                              <div>
                                                    <p>Conferencias:</p>
                                                    <label><input type="checkbox" name="registro[]" id="conf_07" value="conf_07"><time>10:00</time> Como hacer Marketing en línea</label>
                                                    <label><input type="checkbox" name="registro[]" id="conf_08" value="conf_08"><time>17:00</time> ¿Con que lenguaje debo empezar?</label>
                                                    <label><input type="checkbox" name="registro[]" id="conf_09" value="conf_09"><time>19:00</time> Frameworks y librerias Open Source</label>
                                              </div>
                                              <div>
                                                    <p>Seminarios:</p>
                                                    <label><input type="checkbox" name="registro[]" id="sem_04" value="sem_04"><time>14:00</time> Creando una App en Android en una tarde</label>
                                                    <label><input type="checkbox" name="registro[]" id="sem_05" value="sem_05"><time>17:00</time> Creando una App en iOS en una tarde</label>
                                              </div>
                                          </div> <!--#domingo-->
                                      </div><!--.caja-->
                                </div> <!--#eventos-->

                                <div id="resumen" class="resumen clearfix">

                                </div>
                                
                                <div class="resumen" id="resumen">
                                    <h3>Pagon extra</h3>
                                    <div class="caja clearfix">
                                        <div class="extra">

                                            <div class="orden">
                                                <label for="camisa_evento">Camisa del evento<small>  promocion de 7% desc </small></label>
                                                <input type="number" placeholder="0" id="camisa_evento" name="pedido_camisa" min="0" value="0"  />
                                            </div><!--orden-->
                                            <div class="orden">
                                                    <label for="etiquetas">paquete de 10 etiquetas $2<small>(html5,css,javascript,chrome)</small></label>
                                                    <input type="number" placeholder="0" id="etiquetas" min="0" name="pedido_etiqueta" value="0"  />
                                            </div><!--orden-->
                                            
                                            <div class="orden">
                                                <label for="regalo">Seleccione un regalo</label><br>
                                                <select id="regalo" name="regalo"  required>
                                                    <option value="">--seccion un regalor--</option>
                                                    <option value="1">Pulsera</option>   
                                                    <option value="2">etiqueta</option>   
                                                    <option value="3">plumas</option>

                                                </select> 
                                                
                                            </div><!--orden-->

                                            <input type="button" id="calcular" class="button" value="Calcular">
                                        </div><!--extra-->

                                        <div class="mostrar" >
                                        
                                            <p>Resumen:</p>
                                            <div id="lista_productos">

                                            </div>

                                            <p>Total:</p>
                                            <div id="suma-total">

                                            </div>
                                            <input type="hidden" name="total_pedido" id="total_pedido" >
                                            <input type="submit" class="button"  name="submit" id="btnregistro" value="Pagar" />
                                        </div><!--total-->

                                    </div><!--caja-->
                                </div><!--resumen-->

                        </form><!--fin del form-->

                  </section><!--fin de la Section-->
        
                  <?php include_once 'includes/templates/footer.php'; ?>