 
       
<section class="seccion contendor">
           
           <?php 
               try {
                   require_once('includes/funciones/bd_conexiones.php');
                   $sql = "SELECT * FROM `invitados`;";
                   $resultado = $conn->query($sql);
               } catch (expection $th) {
                   $error = $th->getmessage();
               }
           ?>
        
                 
            
                <section  class="invitados contendor seccion">
                <h2>Nuestros Invitados</h2>
                    <ul class="lista-invitados clearfix">
                <?php 
                    //lo trae todo en un sql grande
                        while ($invitados = $resultado->fetch_assoc()) {?>
                                    <li>
                                        <div class="invitado">
                                            <a class="invitado-info" href="#invitado<?php echo $invitados['invitado_id'];?>">
                                                <img src="/img/<?php echo $invitados['url_imagen'];?>" alt="imagen del invitado">
                                                <p><?php echo $invitados['nombre_invitado']. " ". $invitados['apellido_invitado'];?></p>
        
                                            </a>
                                        </div>
                                    </li>  
        
                         <div style="display:none;">
                             <div class="invitado-info" id="invitado<?php echo $invitados['invitado_id'];?>">
                                    <h2><?php echo $invitados['nombre_invitado']. " ". $invitados['apellido_invitado'];?></h2>
                                    <img src="/img/<?php echo $invitados['url_imagen'];?>" alt="imagen del invitado">
                                    <p><?php echo $invitados['descripcion_invitado'];?></p>
                            </div>
                        </div>
                        <?php }?><!--fin del while-->                      
                    </ul>
                </section><!--final de invitados--> 
        
                
                     
             <?php
                $conn->close();
             ?>          
        
        </section><!---fin del seccion-->