<?php
$sql= "Select * from Usuarios where Nick='$Nick'";
$r=mysql_query($sql);
$row=mysql_fetch_array($r);
$Publico=$row['Publico'];
if ($Publico=='Publico') {
/*echo "PUBB";*/
} elseif ($Publico='Privado') {
/*echo "PRIV";*/
}
?>
