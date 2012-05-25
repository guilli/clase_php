<?php

include("globals.php"); // Includes configuration

$db = new MySQL();

echo '<pre>';

$consulta = $db->consulta("SELECT * FROM users");

// if($db->num_rows($consulta)>0){ // Check if returned something
//   while($resultados = $db->fetch_array($consulta)){
//    print_r($resultados);
//    //echo $resultados['nombre'].'<br />';
//  }
// }

$foo =  new vista();

echo $foo->get_content();
