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
}