<?php

    class Login extends Controller{

        function __construct(){
            parent::__construct();
            $this->view->Vista('login/index');
        }

        function ingresar(){
            // echo "ingresaste";
            
            $email = $_POST['email'];
            $pass  = $_POST['pass'];

            $this->model->UserSingUp(['email'=> $email , 'pass'=> $pass]);
        }

    }

?>