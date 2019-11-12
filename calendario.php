
<?php include_once('includes/templates/header.php'); ?>

    
       
         <section class="seccion contendor">
            <h2>Calendario de Eventos</h2>

                    
            <?php 
                try {
                    require_once('includes/funciones/bd_conexiones.php');
                    $sql = "SELECT `evento_id`,`nombre_evento`,`fecha_evento`,`hora_evento`,`cat_evento`,`nombre_invitado`,`apellido_invitado`";
                    $sql .=" FROM `eventos`";
                    $sql .=" INNER JOIN `categoria_evento`";
                    $sql .=" ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                    $sql .= "INNER JOIN `invitados`";
                    $sql .="ON eventos.id_inv = invitados.invitado_id;";
                    $resultado = $conn->query($sql);
                } catch (expection $th) {
                    $error = $th->getmessage();
                }
            ?>

                  
             
                <div class="calendario">
                 <?php 
                    //lo trae todo en un sql grande
                      while ($evento = $resultado->fetch_all(MYSQLI_ASSOC)) {?>

                    <?php $dias = array();?>
                        <?php 
                        //para agregar informcacion de una variable de le pone los corchete al array
                            foreach ($evento as $eventos) {
                                $dias[] = $eventos['fecha_evento'];
                            }  ?>

                                <!--este metodo traje los arreglos que no se repiten
                            arry_value que encarga de renumerar los indices-->
                                <?php $dias =array_values(array_unique($dias)); ?>
                                <!--contador-->
                                <?php $contador = 0;?>
                                
                        <!--para poder mostrar los datos tienes que manejar array-->
                     <?php foreach($evento as $eventos): ?>
                         <?php $dia_actual = $eventos['fecha_evento']; ?>

                            <?php if($dia_actual == $dias[$contador]):?> 
                                 <h3><i class="fas fa-calendar-alt">
                                     <?php echo $eventos['fecha_evento'];?>
                                    </i> </h3>

                                   <?php $contador++; ?> 

                            <?php endif;?><!--final del if-->

                            <div class="dia">
                                <p class="titulo"><?php echo $eventos['nombre_evento']; ?></p>
                                <p class="hora"><i class="fas fa-clock " aria-hidden = "true" ></i><?php echo  $eventos['fecha_evento'] . " ". $eventos['hora_evento'] . " hrs" ;?></p>

                                <p>
                                        <?php $resultado_cate = $eventos['cat_evento'];?>
                                      <?php
                                        switch ($resultado_cate) {
                                            case 'Talleres':
                                                echo '<i class="fas fa-code"></i> Talleres';
                                              break;
                                            case 'Seminario':
                                                echo '<i class="fas fa-university"></i> Seminario';
                                              break;    
                                             case 'Conferencia':
                                                echo '<i class="fas fa-comment"></i> Conferencia';
                                             break;
                                            default:
                                                # code...
                                                break;
                                        } ?>   
                                </p><!--final de switch-->

                                     <p><i class="fas fa-user"></i>
                                        <?php
                                            echo  $eventos['nombre_invitado'] . " ". $eventos['apellido_invitado'];
                                        ?>
                                    <p>
                             </div><!--find de dia-->
                         <?php endforeach; ?><!--final del foreach-->
                    </div> <!--fin calendario-->               
              <?php }?><!--fin del while-->                      
                
                   
                      
                        
  
         </section><!---fin del seccion-->
            


           
<?php include_once('includes/templates/footer.php'); ?>