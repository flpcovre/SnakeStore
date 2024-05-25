<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set ( "America/Sao_Paulo" );

global $sgBD, $db, $dbHost, $dbUser, $dbPassword, $internalSession, $privateSession, $session, $dominio;

$dbDriver = 'MySQL';
$db = 'site_tenis';
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';

$dominio = $_SERVER['HTTP_HOST'] . '/SnakeStore';

$session = md5($dominio);
$internalSession = md5('Internal' . $session);
$privateSession = md5('Private' . $session);