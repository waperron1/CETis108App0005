<?php 
$servidor = "localhost";
$usuario ="15325061080270";
$pwd='BGG.0270';
$bd ="4avpr";
$con = @mysql_connect($servidor, $password) or die ("No se pudo acceder a la base de datos");

mysql_select_db($bd) or die ("error al conectar la base de datos");
$consulta = "SELECT*
FROM categoria
WHERE nombre IN (SELECT nombre)";

$result = mysql_query($consulta, $con);
$json = array();
if(mysql_num_rows($result))
{
	while ($row = mysql_fetch_object($result)){
		$json[] = row;

	}
}
mysql_close($con);
echo_json_encodw($json);

?>