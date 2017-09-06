<?php
session_start();
include("included_functions.php");
//check if $_POST is set
if(isset($_POST["submit"]))
{
	$competition = trim($_POST["competition"]);
	$risk = trim($_POST["risk"]);
	$mark_strgy = trim($_POST["mark_strgy"]);
	$all_good = check_idea2_variables($competition,$risk,$mark_strgy);
	if(!$all_good)
	{
		$_SESSION["des2_wrong"] = 1;
		redirect_to("../public/idea_des2.php");
	}
	else
	{
		//everything is good, add the variables in the session to add to the database later
		$_SESSION["compet"] = $competition;
		$_SESSION["risk"] = $risk;
		$_SESSION["mark_strgy"] = $mark_strgy;
		//go to the next page
		redirect_to("../public/idea_des3.php");
	}
}
?>