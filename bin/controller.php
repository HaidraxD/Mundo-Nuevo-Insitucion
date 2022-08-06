<?php

class Controller{
    
    function __construct()
    {
        // echo "<p>soy el controller</p>";

        $this->view = new View();
    }

    function loadModel($model){
        $url = 'models/'. $model. 'model.php';

        if (file_exists($url)) {
            require $url;

            $modelName= $model. 'Model';
            $this->model= new $modelName();
        }
    }
}
?>