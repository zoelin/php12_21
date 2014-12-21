<html> 
<?php
$id=$_POST['id'];
$password=$_POST['password'];
mysql_connect('localhost','root','takming') or die("can not connect to mysql");
mysql_select_db("D10116108");
$sql="select * from user_prrofile where id=$id";
$R=mysql_query($sql) or die ("can not get data");
$rows=mysql_fetch_array($R);
$loginSuccess=false;
if($rows && $rows['password'])
{
	if(md5($password)==$rows['password'])
	{
		$loginSuccess = true;
	}
}

if($loginSuccess)
{

}
else
{

}
?>
</html>
