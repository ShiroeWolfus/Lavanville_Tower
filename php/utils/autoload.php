<?php

spl_autoload_register ( function ($class) {
    $sources = array("Controllers/$class.php", "Core/$class.php",  "Models/$class.php", "DAO/$class.php" );
        foreach ($sources as $source) {
            if (file_exists($source)) {
                require $source;
            } 
        } 
    });