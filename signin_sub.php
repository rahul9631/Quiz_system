<?php
include("user/user.php");
$signin=new users;
extract($_POST);
if($signin->signin($e,$p))
{
	$signin->url("home.php");
}
else
{
	$signin->url("index.php?run=failed");
}
?>