<?php
require_once "vendor/autoload.php";
use App\classes\HelloWorld;

if (isset($_GET['page'])) {
    if ($_GET['page']=='home') {
        $student = new HelloWorld();
        include "pages/home.php";
    }
}



?>