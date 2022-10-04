<?php

class Manam {
    function __construct()
    {
        $this->loadSecureLibs();
    }
    private function loadSecureLibs()
    {
        include_once(__DIR__ . "/imports/secureInclude.php");
    }
    
    public static function loadScript($script)
    {

        if (
            empty($script) ||
            !isset($script) ||
            is_bool($script)
        ) {
            return false;
        }

        $directory = __DIR__ . "/script/";
        
        $script_state = false;

		if ( is_readable($directory . $script . ".js") ) {

            $script_path = $directory . $script . ".js";

            $script_state = "script";

            $script_data = file_get_contents($script_path);
            echo "<script type='text/javascript'>" . $script_data . "</script>";

			
		} elseif( file_get_contents($script) ) {
            $script_state = "file";
            $script_data = file_get_contents($script);

            echo "<script type='text/javascript'>" . $script_data . "</script>";


        } elseif ( preg_match('<script>', $script, $match) ) {
            if (count($match) >= 1) {

                $script_state = "plain";
                echo $script;
                return true;

            }
        } 

        if ($script_state === false) {
            return false;
        }
        
    }
}