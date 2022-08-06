<?php

    class Main extends Controller
    {

        function __construct()
        {
            parent::__construct();
            $this->view->Vista('main/index');
        }

    }

?>