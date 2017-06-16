<?php 
$host ='localhost';
$uname='15325061080270';
$pwd='BGG.0270';
$bd ="4avpr";
$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
mysql_select_db($db,$con) or die ("db selection failed");

$id =$_REQUEST['id'];
$titulo = $_REQUEST['titulo'];
$descripcion =$_REQUEST['descripcion'];
$contenido = $_REQUEST['contenido'];
$fecha = $_REQUEST['fecha'];
$categoria =$_REQUEST['categoria'];
$autor = $_REQUEST['autor'];  		 

$flag['code']=0;
if($r=mysql_query("insert into tema values('$id','$titulo''$descripcion''$contenido','$fecha','$categoria','$autor') ",$con))
{
	$flatg['code']=1;
	echo "Categoria registrado existosamente";
}
echo(json_encode($flag));
mysql_close($con);
 ?>