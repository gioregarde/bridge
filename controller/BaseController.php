<?php

class BaseController {

    protected $layout;
    protected $view;
    protected $css;
    protected $js;
    protected $request;
    protected $response;

    protected $user_id;

    function __construct($path = null) {
        $this -> request = new BaseRequest();
        $this -> response = new BaseResponse();
        $this -> view = 'page/index.php';
        $this -> css = '';
        $this -> js = '';
        $this -> layout = 'default.php';
        if ($path != null) {
            $request_name = join($path).Properties::get(Properties::FILE_EXT_REQUEST);
            $response_name = join($path).Properties::get(Properties::FILE_EXT_RESPONSE);
            $view_name = Properties::get(Properties::PATH_PAGE).strtolower(join(Properties::PATH_DIV, $path).Properties::PATH_EXT_PHP);
            $css_name = Properties::get(Properties::PATH_CSS).strtolower(join(Properties::PATH_DIV, $path).Properties::PATH_EXT_CSS);
            $js_name = Properties::get(Properties::PATH_JS).strtolower(join(Properties::PATH_DIV, $path).Properties::PATH_EXT_JS);

            if (file_exists(Properties::get(Properties::PATH_REQUEST).parseClassPath($request_name).Properties::PATH_EXT_PHP)) $this -> request = new $request_name();
            if (file_exists(Properties::get(Properties::PATH_RESPONSE).parseClassPath($response_name).Properties::PATH_EXT_PHP)) $this -> response = new $response_name();
            if (file_exists($view_name)) $this -> view = $view_name;
            if (file_exists($css_name)) $this -> css = $css_name;
            if (file_exists($js_name)) $this -> js = $js_name;
        }
    }

    function action() {
        // common logic
    }

    function render() {
        $this -> action();
        $response = $this -> response;
        $dto = $this -> response -> getDto();
        $dto_array = $this -> response -> getDtoArray();
        require_once('page/layout/base.php');
    }

}

?>