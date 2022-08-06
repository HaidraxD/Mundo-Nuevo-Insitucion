<?php

class Rutas{

    function __construct()
    {
        // echo "<p>Nueva Ruta</p>";

        // $url = $_GET['url'];
        $url = isset($_GET['url']) ? $url = $_GET['url'] : null;
        //para que se elimine todo a la derecha de la url
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        // var_dump($url); //array

        // $count = count($url);

        // echo $hora;

        if(empty($url[0])){
            require_once 'controllers/main.php';
            $controller = new Main();
            $controller->loadModel('Main');
            return false;

        // }elseif (!empty($url[1])) {
        //     require_once 'controllers/notfound.php';
        //     $controller = new Notfound();
        //     return false;
        }
        // elseif($count > 1) {

        //     require_once 'controllers/notfound.php';
        //     $controller = new Notfound();
        //     return false;
                
            
        // }

        $archivoController = 'controllers/'. $url[0]. '.php';

        

        if(file_exists($archivoController)){

            require_once $archivoController;
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            if(isset($url[1])){

                if(!method_exists($controller, $url[1])){

                    
                }else{
                    $controller->{$url[1]}();
                }
                
              
            }

            
        
        }else{
            // administrar errores
            require_once 'controllers/notfound.php';
            $controller = new Notfound();
        }

        //Para que no se muestre los index

        

    }
}

?>