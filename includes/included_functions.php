<?php

function redirect_to($new_location) 
{
		header("Location: " . $new_location);
		exit;
}

function make_connection($dbname)
{
	//connect to the database
	$connection = mysqli_connect("localhost","root","catastrophicMiley69","{$dbname}");
	//check if connection was successful
	if(mysqli_connect_errno($connection))
	{
		die("Database connection failed.");
	}
	else
	{
		return $connection;
	}
}

//function to check the name field
function check_name($name)
{
	//the name should contain at least 2 alphabets
	if(strlen($name) < 2)
		//not valid
		return 0;
	//check if the string contains any invalid characters
	for($i = 0;$i < strlen($name);$i++)
	{
		if(!(($name[$i] >= 'A' && $name[$i] <= 'Z') || ($name[$i]>='a' && $name[$i] <= 'z') || ($name[$i] == ' ') || ($name[$i] == "'")))
			return 0;
	}
	return 1;
}

//function to check the branch and institution field
function check_branch_inst($text)
{
	//the text should contain at least 3 alphabets
	if(strlen($text) < 3)
		//not valid
		return 0;
	//check if the string contains any invalid characters
	for($i = 0;$i < strlen($text);$i++)
	{
		if(!(($text[$i] >= 'A' && $text[$i] <= 'Z') || ($text[$i]>='a' && $text[$i] <= 'z') || ($text[$i] == ' ')))
			return 0;
	}
	return 1;
}

//function to check the phone field
function check_phone($text)
{
	//the text should contain at least 10 digits
	if(strlen($text) < 10)
		//not valid
		return 0;
	//check if the phone number contains any invalid characters
	for($i = 0;$i < strlen($text);$i++)
	{
		if(!(($text[$i] >= '0' && $text[$i] <= '9') || ($text[$i] == ' ') || ($text[$i] == '-') || ($text[$i] == '[') || ($text[$i] == ']')))
			return 0;
	}
	return 1;
}

//function to validate idea_des1.php data
function check_idea1_variables($e_summary,$product,$market)
{
	//change the 10 to 100 before uploading the portal
	if((strlen($e_summary) < 10) or (strlen($product) < 10) or (strlen($market) < 10))
		return 0;
	//check if the variables contain = or +  or | or \ or ~ or `
	for($i = 0; $i < strlen($e_summary);$i++)
	{
		if($e_summary[$i] == "=" or $e_summary == "+" or $e_summary == "|" or $e_summary == "~" or $e_summary == "`")
			return 0;
	}
	for($i = 0; $i < strlen($product);$i++)
	{
		if($product[$i] == "=" or $product == "+" or $product == "|" or $product == "~" or $product == "`")
			return 0;
	}
	for($i = 0; $i < strlen($market);$i++)
	{
		if($market[$i] == "=" or $market == "+" or $market == "|" or $market == "~" or $market == "`")
			return 0;
	}
	return 1;
}

//function to validate idea_des2.php data
function check_idea2_variables($competition,$risk,$mark_strgy)
{
	//change the 10 to 100 before uploading the portal
	if((strlen($competition) < 10) or (strlen($risk) < 10) or (strlen($mark_strgy) < 10))
		return 0;
	//check if the variables contain = or +  or | or \ or ~ or `
	for($i = 0; $i < strlen($competition);$i++)
	{
		if($competition[$i] == "=" or $competition == "+" or $competition == "|" or $competition == "~" or $competition == "`")
			return 0;
	}
	for($i = 0; $i < strlen($risk);$i++)
	{
		if($risk[$i] == "=" or $risk == "+" or $risk == "|" or $risk == "~" or $risk == "`")
			return 0;
	}
	for($i = 0; $i < strlen($mark_strgy);$i++)
	{
		if($mark_strgy[$i] == "=" or $mark_strgy == "+" or $mark_strgy == "|" or $mark_strgy == "~" or $mark_strgy == "`")
			return 0;
	}
	return 1;
}

//function to check the title field
function check_title($text)
{
	//at least 3 characters, like CEO, CFO, etc
	if(strlen($text) < 3)
		//not valid
		return 0;
	//check if the string contains any invalid characters
	for($i = 0;$i < strlen($text);$i++)
	{
		if(!(($text[$i] >= 'A' && $text[$i] <= 'Z') || ($text[$i]>='a' && $text[$i] <= 'z') || ($text[$i] == ' ')))
			return 0;
	}
	return 1;
}

//function to check the contribution field
function check_contribution($text)
{
	//the text should contain at least 10 characters
	if(strlen($text) < 10)
		//not valid
		return 0;
	//check if the string contains any invalid characters
	for($i = 0;$i < strlen($text);$i++)
	{
		if(!(($text[$i] >= 'A' && $text[$i] <= 'Z') || ($text[$i]>='a' && $text[$i] <= 'z') || ($text[$i] == ' ') || ($text[$i] == "'")))
			return 0;
	}
	return 1;
}

//TO DO: make a function which processes a every field, that is removes all the characters like =,~,`,\,/ from the entered fields
?>