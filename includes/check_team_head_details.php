<?php
session_start();
include("included_functions.php");
//check if POST is set
if(isset($_POST["submit"]))
{
	//get the variables from POST and trim them
	$name = trim($_POST["name"]);
	$branch = trim($_POST["branch"]);
	$inst = trim($_POST["inst"]);
	$sem = trim($_POST["sem"]);
	$phone = trim($_POST["phone"]);
	$email = trim($_POST["email"]);
	//remove illegal characters from the email string
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	//check the format of all the variables the variables
	$name_check = check_name($name);
	$branch_check = check_branch_inst($branch);
	$inst_check = check_branch_inst($inst);
	$phone_check = check_phone($phone);
	$email_check = filter_var($email, FILTER_VALIDATE_EMAIL);
	if($name_check && $branch_check && $inst_check && $phone_check && $email_check)
	{
		//everything is correct, put it in session and move on to the next page
		$_SESSION["h_name"] = $name;
		$_SESSION["h_branch"] = $branch;
		$_SESSION["h_inst"] = $inst;
		$_SESSION["h_sem"] = $sem;
		$_SESSION["h_phone"] = $phone;
		$_SESSION["h_email"] = $email;
		redirect_to("../public/team.php");
	}
	else
	{
		//something was wrong, get the details again
		$_SESSION["h_wrong"] = 1;
		echo '<script type="script/javascript">alert("Please make valid entries.");window.location.href = "../public/index.php";</script>';
	}
}
?>