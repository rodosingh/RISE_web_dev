<?php

class con {

    protected $con;

    public function __construct() {
        $this->con = new mysqli("localhost", "root", "", "");
        date_default_timezone_set("Asia/Kolkata");
        //$this->con = new mysqli("localhost", "ssnonl_tpmnick", "Nick@7849", "ssnonl_tpm");
    }

    protected function close() {
        $this->con->close();
    }

}

?>

