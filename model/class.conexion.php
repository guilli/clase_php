<?php class MySQL{

  private $conexion;
  private $total_consultas;


  public function  __construct() {      
    if(!isset($this->conexion)){
      $this->conexion = (mysql_connect("127.0.0.1","root"))
        or die(mysql_error());
      mysql_select_db("clase_1",$this->conexion) or die(mysql_error());
    }
  }

  public function consulta($consulta){
    $this->total_consultas++;
    $resultado = mysql_query($consulta,$this->conexion);
    if(!$resultado){
      echo 'MySQL Error: ' . mysql_error();
      exit;
    }
    return $resultado; // Cursor to iterate the results
  }

  public function fetch_array($consulta){ // this parameter receives the cursor
   return mysql_fetch_array($consulta, MYSQL_ASSOC); // MYSQL_ASSOC tells me to now show the row number
  }

  public function num_rows($consulta){ // gets if there are rows returned
   return mysql_num_rows($consulta);
  }

  public function getTotalConsultas(){ // gets the total of queries (this is by page by object)
   return $this->total_consultas;
  }

}?>