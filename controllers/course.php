<?php 

    class Course extends Controller{

        function __construct(){

            parent:: __construct();
            $this->view->Vista('course/index');
        }

    }

?>