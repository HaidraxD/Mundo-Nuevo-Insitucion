<?php

    class Notfound extends Controller
    {

        function __construct()
        {
            parent::__construct();
            $this->view->Vista('notfound/index');
        }

    }

?>