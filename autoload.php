<?php

spl_autoload_register(function($class) {
  require "app/model/". $class . ".class.php";
});

?>
