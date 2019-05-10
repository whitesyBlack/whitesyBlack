<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contacto</title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css" href="estilos/estilos.css">

</head>

<body>

<table width="200" border="0" align="center">
  <tr>
    <td><h1>Contacto</h1></td>
    <td><p>Fracc. el Pedregal, calle jadre N°27</p>
    <p>CP: 85890</p>
    <p>luis.alf.v2@gmail.com</p></td>
    <td><p>Telfonos: 6421170707</p>
    <p>6421509402</p></td>
  </tr>
  
  <form action="enviar.php" method="post">
</table>

<table align="center">
<tr>
<td width="300">
<input type="text" name="nombre" placeholder="Nombre" size="50"  />
<input type="text" name="correo" placeholder="Correo" size="50" />
<input type="text" name="telefono" placeholder="Telefono" size="50" />
</td>
<td width="372">
<textarea name="mensaje" placeholder="Deje su Mensaje" style="padding-left:24px; padding-right:10px;"></textarea>
<br />
<input type="submit" value="Enviar" align="left"  />

</td>
</tr>

</table>
</form>

</body>
</html>