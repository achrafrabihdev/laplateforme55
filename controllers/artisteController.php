<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
extract($_GET);
extract($_POST);
if($a=='artistespage'){
    $artistes = Artiste::all();
    var_dump($artistes);
}