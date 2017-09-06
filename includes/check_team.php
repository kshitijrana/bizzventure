<?php
session_start();
include("included_functions.php");
//check if $_POST is set
if(isset($_POST["submit"]))
{
	$j=0;
	//validate all the values
	for($i = 0;$i < 5;$i++)
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
		if($name==""){
			$j=$j+1;
			echo $j;
		}
		//if any of them does not match, redirect back to the form
		if(!($name_check && $branch_check && $inst_check && $phone_check && $email_check))
		{
			$_SESSION["team_wrong"] = 1;
			echo '<script type="script/javascript">alert("Please make valid entries");window.location.href = "../public/team.php";</script>';
		}
	}
	$team_size=(5-$j);
	$_SESSION["team_size"] = $team_size;
	//control comes here, means everything was right. so, save everything in the session
	// $_SESSION["team_size"] = $team_size;
	for($i = 0;$i < 5;$i++)
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
?>