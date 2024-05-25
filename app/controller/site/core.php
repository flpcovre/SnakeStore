<?php

$view['logged'] = true;
$view['module'] = (file_exists(dirname(__FILE__) . '/module.' . $view['module'] . '.php') ? $view['module'] : '404');

include dirname(__FILE__) . "/module." . $view['module'] . ".php";
