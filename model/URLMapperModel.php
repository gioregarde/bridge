<?php

class URLMapperModel {

    private $controller;

    function view() {
        $this -> controller -> action();
        $form = $this -> controller -> getForm();
        $layout = $this -> controller -> getLayout();
        $view = $this -> controller -> getView();
        require_once('page/layout/base.php');
    }

    function setController($par) {
        $this->controller = $par;
    }

    function getController() {
        return $this->controller;
    }

}

?>