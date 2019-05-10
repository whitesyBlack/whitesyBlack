<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Logo</title>

<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:IniciodeSession.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

</head>

<body>

<center>
<table width="467" height="131">
<tr>
<td width="305">
<img src="Imagenes/dynasty.png" width="305" height="115" />
</td>
<td width="150">
<label>Bienvenido</label> <strong><?php echo $_SESSION['user']; ?></strong>
<br />
<a href="desconectar.php" target="IniciodeSession"> Cerrar Cesión </a>
</td>
</tr>
</table>
</center>

</body>
</html>
