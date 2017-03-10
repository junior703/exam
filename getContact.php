<?php
$db_host = "jnc6n3xpbgc3kek2.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$db_name = "lhgjmfsupyod65vz";
$db_user = "exievz51r0py9g1v";
$db_password = "rt3q65w92v53w29q";

$connection = mysqli_connect('jnc6n3xpbgc3kek2.chr7pe7iynqr.eu-west-1.rds.amazonaws.com', 'exievz51r0py9g1v', 'rt3q65w92v53w29q');
mysql_select_db($db_name) or die("Error al seleccionar la base de datos:".mysql_error());
@mysql_query("SET NAMES 'utf8'");

if(isset($_POST["id_producto"])){

$id_contacto = $_POST["id_producto"];
$sql_query = "SELECT * FROM productos WHERE id_producto=$id_producto;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
$rows[] = $r;
}
print json_encode($rows);
}else
echo "No existe el contacto";
mysql_close($connection);
?>