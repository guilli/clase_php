<?php

class vista {

    private $header;
    private $footer;

    public function __construct() {
        $this->header = file_get_contents(ROOT.'/view/header.php'); // Get the content of php file and save it (don't print it)
        $this->footer = file_get_contents(ROOT.'/view/footer.php');
    }

    public function get_content(){ // Create output
        $output = $this->header;
        //$output .= exec('whoami').'<br />'; // Console command
        //$output .= exec('ls');
        
        $db = new MySQL();
        
        $consulta = $db->consulta("SELECT * FROM users");
        
        if($db->num_rows($consulta)>0){ // Check if returned something
          $output .= '<table><thead><tr><th>ID</th><th>NAME</th></thead>';
          $output .= '<tbody>';
          while($resultados = $db->fetch_array($consulta)){
           //print_r($resultados);
           //echo $resultados['nombre'].'<br />';
           $output .= '<tr><td>'.$resultados['id'].'</td><td>'.$resultados['nombre'].'</td></tr>';
           //$output .= $resultados['id'].' - '.$resultados['nombre'].'<br />';
         }
         $output .= '</tbody></table>';
        }
        
        
        $output .= $this->footer;
        return $output;
    }

}
?>
