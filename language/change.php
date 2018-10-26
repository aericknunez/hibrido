<?php 
session_start(); 

if($_REQUEST["op"] == "2"){
	$_SESSION["language"] = "2";
}
else{
	$_SESSION["language"] = "1";
}

header("location: ../");
 ?>