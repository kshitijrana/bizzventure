<?php
session_start();
include("included_functions.php");
//check the optional session variables. that is is mentor details have been entered or not. team member details
//if the details haven't been entered make the session variable null

if(!isset($_SESSION["m_name"]))
{
	//make the mentor values null
	$_SESSION["m_name"] = NULL;
	$_SESSION["m_branch"] = NULL;
	$_SESSION["m_inst"] = NULL;
	$_SESSION["m_phone"] = NULL;
	$_SESSION["m_email"] = NULL;
}
//check the first team member number which is not entered, and make it zero and also the ones following
for($i = 0; $i < 5;$i++)
{
	if(!isset($_SESSION["t_".$i."_name"]))
	{
		$_SESSION["t_".$i."_name"] = NULL;
		$_SESSION["t_".$i."_branch"] = NULL;
		$_SESSION["t_".$i."_inst"] = NULL;
		$_SESSION["t_".$i."_sem"] = NULL;
		$_SESSION["t_".$i."_phone"] = NULL;
		$_SESSION["t_".$i."_email"] = NULL;
		$_SESSION["title_".$i] = NULL;
		$_SESSION["cont_".$i] = NULL;
	}
}
//add all the session info to the database
redirect_to("add_to_database.php");
?>