<?php

class SayHelloController extends BaseController {

    function __construct($path) {
        parent::__construct($path);
    }

    function action() {
        parent::action();
        if ($this -> request -> valid()) {
            $this -> response -> setDto(new SayHelloDto($this -> request));
        } else {
            $this -> response -> setError($this -> request -> getErrors());
        }
    }

}

?>