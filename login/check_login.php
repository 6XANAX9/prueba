
<?php
/*$loco= false;

require_once ("conexion.php");
$usu=$_POST['usu'];
$pwd=$_POST['password'];
$sql="SELECT * FROM tb_login_ant where password = '$password'";
$resultado=$conexion->query($sql);
print $sql;


while($fila=mysqli_fetch_array($resultado))
{

if($usu==$fila[0] && $pwd==$fila[1])
{
    header ('Location:desktop.php');
    die();
}else
{
    echo"<script>window.Location.href='index.php?msg=401'</script>";
}

}
?>