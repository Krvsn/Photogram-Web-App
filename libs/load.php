<?php
        function load_template($name)
        {
            
            //include __DIR__."/../templates/$name.php";
            include $_SERVER['DOCUMENT_ROOT']."/app/templates/$name.php";
        }
