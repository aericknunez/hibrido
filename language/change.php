<?php 
session_start(); 

if($_SESSION["language"] == NULL){
	$_SESSION["language"] = "1";
} else {
	 unset($_SESSION["language"]);
}

header("location: ../");
 ?>