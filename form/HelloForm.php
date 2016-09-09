<?php

class HelloForm extends BaseForm {

    private $name;

    function __construct() {
        parent::__construct();
        $this -> name = $this -> getParam("name");
    }

    function setName($par) {
        $this -> name = $par;
    }

    function getName() {
        return $this -> name;
    }

    // do validation
    function valid() {
        return $this -> name != null;
    }

}

?>