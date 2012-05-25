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
        $output .= exec('whoami').'<br />'; // Console command
        $output .= exec('ls');
        $output .= $this->footer;
        return $output;
    }

}
?>
