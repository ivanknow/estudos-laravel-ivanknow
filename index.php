<?php

require 'vendor/autoload.php';

date_default_timezone_set ( "America/Recife" );

\Slim\Slim::registerAutoloader ();

$app = new \Slim\Slim ();


$app->get ( '/test/', 'getTest' );


$app->run ();

function getTest(){
}
