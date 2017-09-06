<?php
session_start();
include("included_functions.php");
$conn = make_connection("bizzventure");
//sql query
$query = "INSERT INTO details (H_NAME,H_BRANCH,H_INST,H_SEM,H_PHONE,H_EMAIL,T0_NAME,T0_BRANCH,T0_INST,T0_SEM,T0_PHONE,T0_EMAIL,T1_NAME,T1_BRANCH,T1_INST,T1_SEM,T1_PHONE,T1_EMAIL,T2_NAME,T2_BRANCH,T2_INST,T2_SEM,T2_PHONE,T2_EMAIL,T3_NAME,T3_BRANCH,T3_INST,T3_SEM,T3_PHONE,T3_EMAIL,T4_NAME,T4_BRANCH,T4_INST,T4_SEM,T4_PHONE,T4_EMAIL,M_NAME,M_BRANCH,M_INST,M_PHONE,M_EMAIL,E_SUMMARY,PRODUCT,MARKET,COMPET,RISK,MARK_STRGY,TITLE_0,CONT_0,TITLE_1,CONT_1,TITLE_2,CONT_2,TITLE_3,CONT_3,TITLE_4,CONT_4,TITLE_H,CONT_H) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
//make the prepare statement object
$stmt = mysqli_prepare($conn,$query);
if($stmt == false)
	die("ERROR OCCURED");

//get the escape string
$h_name = mysqli_real_escape_string($conn,$_SESSION["h_name"]);
$h_branch = mysqli_real_escape_string($conn,$_SESSION["h_branch"]);
$h_inst = mysqli_real_escape_string($conn,$_SESSION["h_inst"]);
$h_sem = mysqli_real_escape_string($conn,$_SESSION["h_sem"]);
$h_phone = mysqli_real_escape_string($conn,$_SESSION["h_phone"]);
$h_email = mysqli_real_escape_string($conn,$_SESSION["h_email"]);

$t0_name = mysqli_real_escape_string($conn,$_SESSION["t_0_name"]);
$t0_branch = mysqli_real_escape_string($conn,$_SESSION["t_0_branch"]);
$t0_inst = mysqli_real_escape_string($conn,$_SESSION["t_0_inst"]);
$t0_sem = mysqli_real_escape_string($conn,$_SESSION["t_0_sem"]);
$t0_phone = mysqli_real_escape_string($conn,$_SESSION["t_0_phone"]);
$t0_email = mysqli_real_escape_string($conn,$_SESSION["t_0_email"]);

$t1_name = mysqli_real_escape_string($conn,$_SESSION["t_1_name"]);
$t1_branch = mysqli_real_escape_string($conn,$_SESSION["t_1_branch"]);
$t1_inst = mysqli_real_escape_string($conn,$_SESSION["t_1_inst"]);
$t1_sem = mysqli_real_escape_string($conn,$_SESSION["t_1_sem"]);
$t1_phone = mysqli_real_escape_string($conn,$_SESSION["t_1_phone"]);
$t1_email = mysqli_real_escape_string($conn,$_SESSION["t_1_email"]);

$t2_name = mysqli_real_escape_string($conn,$_SESSION["t_2_name"]);
$t2_branch = mysqli_real_escape_string($conn,$_SESSION["t_2_branch"]);
$t2_inst = mysqli_real_escape_string($conn,$_SESSION["t_2_inst"]);
$t2_sem = mysqli_real_escape_string($conn,$_SESSION["t_2_sem"]);
$t2_phone = mysqli_real_escape_string($conn,$_SESSION["t_2_phone"]);
$t2_email = mysqli_real_escape_string($conn,$_SESSION["t_2_email"]);

$t3_name = mysqli_real_escape_string($conn,$_SESSION["t_3_name"]);
$t3_branch = mysqli_real_escape_string($conn,$_SESSION["t_3_branch"]);
$t3_inst = mysqli_real_escape_string($conn,$_SESSION["t_3_inst"]);
$t3_sem = mysqli_real_escape_string($conn,$_SESSION["t_3_sem"]);
$t3_phone = mysqli_real_escape_string($conn,$_SESSION["t_3_phone"]);
$t3_email = mysqli_real_escape_string($conn,$_SESSION["t_3_email"]);

$t4_name = mysqli_real_escape_string($conn,$_SESSION["t_4_name"]);
$t4_branch = mysqli_real_escape_string($conn,$_SESSION["t_4_branch"]);
$t4_inst = mysqli_real_escape_string($conn,$_SESSION["t_4_inst"]);
$t4_sem = mysqli_real_escape_string($conn,$_SESSION["t_4_sem"]);
$t4_phone = mysqli_real_escape_string($conn,$_SESSION["t_4_phone"]);
$t4_email = mysqli_real_escape_string($conn,$_SESSION["t_4_email"]);

$m_name = mysqli_real_escape_string($conn,$_SESSION["m_name"]);
$m_branch = mysqli_real_escape_string($conn,$_SESSION["m_branch"]);
$m_inst = mysqli_real_escape_string($conn,$_SESSION["m_inst"]);
$m_phone = mysqli_real_escape_string($conn,$_SESSION["m_phone"]);
$m_email = mysqli_real_escape_string($conn,$_SESSION["m_email"]);

$compet = mysqli_real_escape_string($conn,$_SESSION["compet"]);
$product = mysqli_real_escape_string($conn,$_SESSION["product"]);
$market = mysqli_real_escape_string($conn,$_SESSION["market"]);
$risk = mysqli_real_escape_string($conn,$_SESSION["risk"]);
$e_summary = mysqli_real_escape_string($conn,$_SESSION["e_summary"]);
$mark_strgy = mysqli_real_escape_string($conn,$_SESSION["mark_strgy"]);

$title_0 = mysqli_real_escape_string($conn,$_SESSION["title_0"]);
$title_1 = mysqli_real_escape_string($conn,$_SESSION["title_1"]);
$title_2 = mysqli_real_escape_string($conn,$_SESSION["title_2"]);
$title_3 = mysqli_real_escape_string($conn,$_SESSION["title_3"]);
$title_4 = mysqli_real_escape_string($conn,$_SESSION["title_4"]);
$title_h = mysqli_real_escape_string($conn,$_SESSION["title_h"]);

$cont_0 = mysqli_real_escape_string($conn,$_SESSION["cont_0"]);
$cont_1 = mysqli_real_escape_string($conn,$_SESSION["cont_1"]);
$cont_2 = mysqli_real_escape_string($conn,$_SESSION["cont_2"]);
$cont_3 = mysqli_real_escape_string($conn,$_SESSION["cont_3"]);
$cont_4 = mysqli_real_escape_string($conn,$_SESSION["cont_4"]);
$cont_h = mysqli_real_escape_string($conn,$_SESSION["cont_h"]);

mysqli_stmt_bind_param($stmt, 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssss',$h_name,$h_branch,$h_inst,$h_sem,$h_phone,$h_email,$t0_name,$t0_branch,$t0_inst,$t0_sem,$t0_phone,$t0_email,$t1_name,$t1_branch,$t1_inst,$t1_sem,$t1_phone,$t1_email,$t2_name,$t2_branch,$t2_inst,$t2_sem,$t2_phone,$t2_email,$t3_name,$t3_branch,$t3_inst,$t3_sem,$t3_phone,$t3_email,$t4_name,$t4_branch,$t4_inst,$t4_sem,$t4_phone,$t4_email,$m_name,$m_branch,$m_inst,$m_phone,$m_email,$e_summary,$product,$market,$compet,$risk,$mark_strgy,$title_0,$cont_0,$title_1,$cont_1,$title_2,$cont_2,$title_3,$cont_3,$title_4,$cont_4,$title_h,$cont_h);
echo mysqli_stmt_error($stmt);
mysqli_stmt_execute($stmt);
echo mysqli_stmt_error($stmt);
//mysqli_stmt_fetch($stmt);
//mysqli_stmt_close($stmt);
$id=mysqli_insert_id($conn);
if($id > 0)
{
	//record inserted
	//unset the session and redirect to display success message
	session_unset();
	redirect_to("../public/final.html");
}
?>