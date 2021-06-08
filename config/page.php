<?php 
  if(isset($_GET['page'])){
    switch ($page = $_GET['page']) {
    	case 'home':
    		$menu0 = "active";
    		break;
    	case '1A':
    		$menu1A = "active";
    		break;
    	case '2A':
    		$menu2A = "active";
    		break;
    	case '3A':
    		$menu3A = "active";
    		break;

    	
    	default:
    		# code...
    		break;
    }
  }
?>