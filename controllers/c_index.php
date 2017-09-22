<?php

if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'accueil';
}
$action = $_REQUEST['action'];

switch($action){
	case 'accueil':{
		include("./views/v_accueil.php");
		break;	
	}
	case 'activite':{
		include("./views/v_activite.php");
		break;	
	}
	case 'contact':{
		include("./views/v_accueil.php");
		break;	
	}
	case 'histoire':{
		include("./views/v_histoire.php");
		break;	
	}
}
?>