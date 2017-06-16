<?php 
$host ='187.216.118.212';
$uname='15325061080270';
$pwd='BGG.0270';
$bd ="4avpr";
$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
mysql_select_db($db,$con) or die ("db selection failed");

$id =$_REQUEST['id'];
$nombre = $_REQUEST['nombre'];
$nivel =$_REQUEST['nivel'];
$anterior = $_REQUEST['anterior'];

$flag['code']=0;
if($r=mysql_query("insert into Categoria values('$id','$nombre''$nivel''$anterior') ",$con))
{
	$flatg['code']=1;
	echo "Categoria registrado existosamente";
}
echo(json_encode($flag));
mysql_close($con);
 ?>