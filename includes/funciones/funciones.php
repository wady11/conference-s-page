<?php
//& se utiliza para hacer referencia
function productos_JSON(&$boleto, &$camisas = 0, &$etiqueta= 0){
    $dia = array(0 => 'pase_dia' , 1 => 'pase_completo', 2=>'pase_2dias' );//asignar los boletos
    //a una array para identificarlos
    $total_boletos = array_combine($dia,$boleto );//combina 2 array en 1
    $json = array();//creo la variable jason array
    
    //el foreach para recoger boletos para que si este en 0 no lo agrege a la base de datos
    foreach ($total_boletos as $key => $boleto):
        //si es mayor que sero como es un array asosiativo que lo guarde en valor de boleto
        if ((int)$boleto > 0  ):
            $json[$key] = (int) $boleto;
        endif;
    endforeach;

    $camisas = (int)$camisas;//conviente a entero
    if ($camisas > 0):
        $json['camisas'] = $camisas;
     endif;

     $etiqueta = (int)$etiqueta;
     if ($etiqueta> 0): 
     $json['etiqueta'] = $etiqueta;  
     endif;

  return json_encode($json);//siempre que quieras usar json_encode debe ser un arreglo
}

function json_eventos(&$eventos){
    $json_eventos = array();

    foreach($eventos as $evento):
            $json_eventos['eventos'] [] = $evento;
            endforeach; 
      return json_encode($json_eventos);   //lo vuelve un cadena de texto ue es mas facil inserta en la base de datos
        
}


