<?php
session_start();
include("included_functions.php");
//check if $_POST is set
if(isset($_POST["submit"]))
{
	$e_summary = trim($_POST["e_summary"]);
	$product = trim($_POST["product"]);
	$market = trim($_POST["market"]);
	$all_good = check_idea1_variables($e_summary,$product,$market);
	if(!$all_good)
	{
		$_SESSION["des1_wrong"] = 1;
		redirect_to("../public/idea_des1.php");
	}
	else
	{
		//everything is good, add the variables in the session to add to the database later
		$_SESSION["e_summary"] = $e_summary;
		$_SESSION["product"] = $prodcut;
		$_SESSION["market"] = $market;
		//go to the next page
		redirect_to("../public/idea_des2.php");
	}
}
?>