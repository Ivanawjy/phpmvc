<?php 
include 'database.php';
$db = new database();

$act = $_GET['act'];
 if($act == "add"){
 	$db->add($_POST['name'],$_POST['address'],$_POST['age']);
 	header("location:show.php");
 }elseif($act == "delete"){ 	
 	$db->delete($_GET['id']);
	header("location:show.php");
 }elseif($act == "update"){
 	$db->update($_POST['id'],$_POST['name'],$_POST['address'],$_POST['age']);
 	header("location:show.php");
 }
?>