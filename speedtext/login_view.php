<?php
session_start();
include("include/conn.php");
if($_REQUEST['act'])
{
$_REQUEST['act']();
}
function check_login()
{
	
$R=$_REQUEST;
$sql="select * from login where user='$R[login_user]' and password='$R[login_pass]'";

$rs=mysql_query($sql) or die(mysql_error());
if(mysql_num_rows($rs))
{
	
$_SESSION['login']=1;
header("location: index1.php?msg=Login successfully!!");
}
else
{
header("location:index.php?msg=Pz try again");
}
}
function logout()
{
session_destroy();
$_SESSION['login']="";
header("location:index.php?msg=Logout Successfully!");
}
?>