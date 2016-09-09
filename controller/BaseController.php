<?php

class BaseController {

    protected $layout;
    protected $view;
    protected $form;

    function __construct() {
        $this -> form = new BaseForm();
        $this -> view = 'page/index.php';
        $this -> layout = 'default.php';
    }

    function action() {
        // common logic
    }

    function getForm() {
        return $this -> form;
    }

    function getLayout() {
        return $this -> layout;
    }

    function getView() {
        return $this -> view;
    }

}

?>