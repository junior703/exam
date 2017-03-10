
 <?php
$db_host = "jnc6n3xpbgc3kek2.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$db_name = "lhgjmfsupyod65vz";
$db_user = "exievz51r0py9g1v";
$db_password = "rt3q65w92v53w29q";

$con=mysql_connect($host,$user,$pw) or die ("Problemas al conectar server");
mysql_select_db($db,$con) or die("Problemas al conectar database");

$regist=mysql_query("SELECT id_producto FROM productos WHERE producto='$_POST[nombre]'",$con) or die ("Problemas en la consulta:".mysql_error());



if($reg=mysql_fetch_array($regist)){
	mysql_query("DELETE FROM productos WHERE producto='$_POST[nombre]'",$con);

echo "datos eliminados";

}else{

	echo "datos no han sido eliminados";

}
?>