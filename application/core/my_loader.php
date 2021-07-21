<?php
class MY_Loader extends CI_Loader {
	function __construct()
    {
        parent::__construct();
    }

    function myview($view, $vars = array(), $return = FALSE)
    {
        $this->view("header.php");
    	$this->view($view, $vars, $return);
        $this->view("footer.php");
    }

}