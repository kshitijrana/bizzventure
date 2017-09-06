<?php
session_start();
include("included_functions.php");
//check if POST is set
if(isset($_POST["submit"]))
{
	//get the variables from POST and trim them
	$name = trim($_POST["m_name"]);
	$branch = trim($_POST["m_branch"]);
	$inst = trim($_POST["m_inst"]);
	$sem = trim($_POST["m_sem"]);
	$phone = trim($_POST["m_phone"]);
	$email = trim($_POST["m_email"]);
	//remove illegal characters from the email string
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	//check the format of all the variables
	$name_check = check_name($name);
	$branch_check = check_branch_inst($branch);
	$inst_check = check_branch_inst($inst);
	$phone_check = check_phone($phone);
	$email_check = filter_var($email, FILTER_VALIDATE_EMAIL);
	if($name_check && $branch_check && $inst_check && $phone_check && $email_check)
	{
		//everything is correct, put it in session and move on to the next page
		$_SESSION["m_name"] = $name;
		$_SESSION["m_branch"] = $branch;
		$_SESSION["m_inst"] = $inst;
		$_SESSION["m_phone"] = $phone;
		$_SESSION["m_email"] = $email;
		redirect_to("../public/idea_des1.php");
	}
	else
	{
		//something was wrong, get the details again
		$_SESSION["m_wrong"] = 1;
		echo '<script type="script/javascript">alert("Please make valid entries");window.location.href = "../public/mentor.php";</script>';
	}
}
?>