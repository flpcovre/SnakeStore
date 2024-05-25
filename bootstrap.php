<?php
require "app/config/config.php";
require "autoload.php";
session_start();
/**
 * @implements constants
*/
define("__BASEPATH__", "/SnakeStore/");
define("__APP__", "app/");
/**
 * @implements paths
*/
$mPath = "model/";
$vPath = "view/";
$cPath = "controller/";
/** 
 * @implements url
*/
if (isset($_GET['url'])) {
  $path = $_GET['url'];
} else {
  $path = '';
}
$pUrl = explode("/", $path);
/**
 * @implements validPaths
*/
$validPaths = array(
  "" => array("folder" => "site/", "path" => "")
);
/*
 * defining paths
*/
if (array_key_exists($pUrl[0], $validPaths)) {
  define('__PATH__', __BASEPATH__ . $validPaths[$pUrl[0]]['path']);
  $folderPath = $validPaths[$pUrl[0]]['folder'];
  $pathUrl = $validPaths[$pUrl[0]]['path'];
} else {
  define('__PATH__', __BASEPATH__);
  $folderPath = $validPaths['']['folder'];
  $pathUrl = $validPaths['']['path'];
}
/*
 * get Params
*/
if ($pathUrl != '') {
  $param = preg_replace("#^{$pathUrl}?#i", "", $path);
} else {
  $param = $path;
}
/** 
 * @requires path
*/
try {
  $request = new Request($param);
  
  $view['module'] = ($request->get('module') != '' ? $request->get('module') : 'home');

  if ($view['module'] == 'ajax' && file_exists(__APP__ . $cPath . $folderPath . "ajax.php")) {
    require __APP__ . $cPath . $folderPath . "ajax.php";
  } else {
    require __APP__ . $cPath . $folderPath . "core.php";
    require __APP__ . $vPath . $folderPath . "index.php";
  }
  
} catch (Exception $e) {
  echo "Error:" . $e->getMessage();
}
/*
 *
*/
?>