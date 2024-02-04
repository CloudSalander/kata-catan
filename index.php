<?php

include 'classes/Player.php';
include 'classes/Resource.php';

$resources = ['wood'=> 3, 'wool' => 2, 'clay' => 1, 'metal' => 1, 'wheat' => 2];
$player = new Player($resources);
var_dump($resources);



?>