<?php

class HelloController extends BaseController {

    function __construct() {
        parent::__construct();
        $this -> form = new HelloForm();
        $this -> view = 'page/hello.php';
    }

    function action() {
        parent::action();
        console(!$this -> form -> valid());
        console($this -> form -> getName());
        if (!$this -> form -> valid()) {
            $this -> view = 'page/index.php';
        }
    }

}

?>