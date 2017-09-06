<?php
session_start();
include("included_functions.php");
//check if $_POST is set
if(isset($_POST["submit"]))
{
	//validate all the values
	for($i = 0;$i < 5;$i++)
	{
		if(isset($_POST["title_".$i]))
		{	//trim all the values and validate them from functions in included_functions.php
			$title = trim($_POST["title_".$i]);
			$contribution = trim($_POST["contribution_".$i]);
			//validate the values further from functions in included_functions.php
			$check_title = check_title($title);
			$check_contribution = check_contribution($contribution);
			//if any of them does not match, redirect back to the form
			if(!($check_title && $check_contribution))
			{
				$_SESSION["des3_wrong"] = 1;
				redirect_to("../public/idea_des3.php");
			}
			else
			{
				//save in the session
				$_SESSION["title_".$i] = $title;
				$_SESSION["cont_".$i] = $contribution;
			}
		}
		else
		{
			//team member does not exist, add null to the session
			$_SESSION["title_".$i] = NULL;
			$_SESSION["cont_".$i] = NULL;
			continue;
		}
	}
	//check for team head's title and contribution
	$h_title = trim($_POST["h_title"]);
	$h_contribution = trim($_POST["h_contribution"]);
	//validate the values further from functions in included_functions.php
	$check_title = check_title($title);
	$check_contribution = check_contribution($contribution);
	if(!($check_title && $check_contribution))
	{
		$_SESSION["des3_wrong"] = 1;
		redirect_to("../public/idea_des3.php");
	}

	$_SESSION["title_h"] = $h_title;
	$_SESSION["cont_h"] = $h_contribution;
	redirect_to("sorted.php");
}
?>