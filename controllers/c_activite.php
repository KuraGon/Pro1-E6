<?php

$article = $_REQUEST['article'];

switch ($article) {
	case 'mucem':
		include("./views/v_mucem.php");
		break;

		case 'criee':
		include("./views/v_criee.php");
		break;

		case 'ferrie':
		include("./views/v_ferrie.php");
		break;
	}

?>