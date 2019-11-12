<?php if(isset($_POST['submit'])):
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];   
$regalo = $_POST['regalo'];
$total = $_POST['total_pedido'];
$fecha = date('y-m-d H:i:s');
//pedido
$boletos = $_POST['boleto'];
$camisas = $_POST['pedido_camisa'];
$etiqueta = $_POST['pedido_etiqueta'];
include_once 'includes/funciones/funciones.php';//para llamar a la funcion 
//y se ejecute
$pedidos =  productos_JSON($boletos,$camisas,$etiqueta);//funcion con argumento
//eventos
$eventos = $_POST['registro'];
$registro = json_eventos($eventos);
try {
//esta forma insertamos los datos a la mysql de forma que no se pueda hackearr por un inyection
//se pone la misma cantidad de signo como de columna se encuentren
//y con el bind-param() se agregan los parametros
//hace mas segura y mas eficientes las consultas a la base de datos
require_once('includes/funciones/bd_conexiones.php');
$stmt = $conn->prepare("INSERT INTO `registrados` (`nombre_registrado`,`apellido_registrado`,`email_registrado`,`fecha_registro`,`pases_articulos`,`talleres_registrados`,`regalo`,`total_pagado`) VALUES(?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssis",$nombre,$apellido,$email,$fecha,$pedidos,$registro,$regalo,$total);                    
$stmt->execute();//PARA QUE pueda inserta se tiene que ejecutar
//hay que serrar el stmt y la conexion
$conn->close();
$stmt->close();
header('location: validacion_registro.php?exitoso=1');
//cambiar o redirrecionar un sitio web, debe ser antes de cualquier cosa que mandes//
//con esto evita que al recargar la pagina se inserte otra vez los valores que ya se enviaron
header('location: validacion_registro.php?exitoso=1');
} catch (expection $th) {
$error = $th->getmessage();
}
?> 

 <!--isset en caso de que la variable exista se hace todo lo de adentro-->
 <?php endif; ?>
                    
<?php include_once 'includes/templates/header.php'; ?>


            <section class="contendor seccion">
                <h2>Registro de usuario</h2>
                 
                    <?php
                        if (isset($_GET['exitoso'])):
                            if($_GET['exitoso'] == 1):
                                  echo "<h1>registro exitoso </h1>"  ;
                            endif;
                 endif;?>   
                    
                    

                </section>


<?php include_once 'includes/templates/footer.php'; ?>