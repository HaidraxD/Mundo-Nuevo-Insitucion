<?php

class View{
    
    function __construct()
    {
        // echo "<p>soy la vista</p>";
    }

    function Vista($nombre){

        require_once 'view/'.$nombre. '.php';
    }
}
?>