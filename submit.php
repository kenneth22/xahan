<?php

require_once('hubClass.php');

//set exceptions -- input post keys which will not be 
// included in field submission

$exceptions = array('form_id','btn-submit');
$hub		= new breezehub($exceptions);
/*TEST DATA
$data       = array("comment"=>"test",
					"name"=> "test",
					"email"=> "test@yahoo.com",
					"phone"=> "13123123",
					"form_id"=> 2325);*/
echo $hub->submitPost($_POST);

