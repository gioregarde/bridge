<?php 

    require_once('Properties.php');

    // load core files
    foreach (scandir($_SERVER['DOCUMENT_ROOT'].Properties::PATH_DIV.Properties::get(Properties::PATH_CORE)) as $file) {
        if (strpos($file,Properties::PATH_EXT) !== false) {
            require_once(Properties::get(Properties::PATH_CORE).Properties::PATH_DIV.$file);
        }
    }

    $mapper = new URLMapperModel();

    try {
        $path = explode(Properties::PATH_DIV, parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $controller_name = ucwords($path[1]).Properties::get(Properties::FILE_EXT_CONTROLLER);
        $mapper -> setController(new $controller_name());
    } catch (Exception $e) {
        console($e);
        $mapper -> setController(new BaseController());
    }

    $mapper -> view()

?>