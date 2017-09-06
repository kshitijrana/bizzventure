<?php
session_start();
include("included_functions.php");
//check if $_POST is set
if(isset($_POST["submit"]))
{
	//first check if the team_size is zero or not
	$team_size = $_POST["team_size"];
	if($team_size == 0)
	{
		$_SESSION["team_wrong"] = 1;
		redirect_to("../public/team.php");
	}
	else
	{
		//validate all the values
		for($i = 0;$i < $team_size;$i++)
		{
			//trim all the values and validate them from functions in included_functions.php
			$name = trim($_POST["t_".$i."_name"]);
			$branch = trim($_POST["t_".$i."_branch"]);
			$inst = trim($_POST["t_".$i."_inst"]);
			$sem = trim($_POST["t_".$i."_sem"]);
			$phone = trim($_POST["t_".$i."_phone"]);
			$email = trim($_POST["t_".$i."_email"]);
			//remove illegal characters from the email string
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);
			//check the format of all the variables the variables
			$name_check = check_name($name);
			$branch_check = check_branch_inst($branch);
			$inst_check = check_branch_inst($inst);
			$phone_check = check_phone($phone);
			$email_check = filter_var($email, FILTER_VALIDATE_EMAIL);
			//if any of them does not match, redirect back to the form
			if(!($name_check && $branch_check && $inst_check && $phone_check && $email_check))
			{
				$_SESSION["team_wrong"] = 1;
				redirect_to("../public/team.php");
			}
		}
		//control comes here, means everything was right. so, save everything in the session
		$_SESSION["team_size"] = $team_size;
		for($i = 0;$i < $team_size;$i++)
		{
			//trim all the values and validate them from functions in included_functions.php
			$name = trim($_POST["t_".$i."_name"]);
			$branch = trim($_POST["t_".$i."_branch"]);
			$inst = trim($_POST["t_".$i."_inst"]);
			$sem = trim($_POST["t_".$i."_sem"]);
			$phone = trim($_POST["t_".$i."_phone"]);
			$email = trim($_POST["t_".$i."_email"]);
			$_SESSION["t_".$i."_name"] = $name;
			$_SESSION["t_".$i."_branch"] = $branch;
			$_SESSION["t_".$i."_inst"] = $inst;
			$_SESSION["t_".$i."_sem"] = $sem;
			$_SESSION["t_".$i."_phone"] = $phone;
			$_SESSION["t_".$i."_email"] = $email;
		}
		redirect_to("../public/mentor.php");
	}
}
?>