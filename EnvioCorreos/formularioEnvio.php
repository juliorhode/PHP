<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="enviaCorreo.php" method="post">
  <table width="29%" border="0" align="center" cellspacing="10">
    <tbody>
      <tr>
        <td width="38%"><label for="nombre">Nombre</label></td>
        <td width="62%"><input type="text" name="nombre" maxlength="50" size="33"></td>
      </tr>
      <tr>
        <td><label for="apellido">Apellido</label></td>
        <td><input type="text" name="apellido" maxlength="50" size="33"></td>
      </tr>
      <tr>
        <td><label for="email">Email</label></td>
        <td><input type="text" name="email" maxlength="50" size="33"></td>
      </tr>
      <tr>
        <td><label for="telefono">Telefono</label></td>
        <td><input type="text" name="telefono" maxlength="50" size="33"></td>
      </tr>
      <tr>
        <td><label for="asunto">Asunto</label></td>
        <td><input type="text" name="asunto" maxlength="50" size="33"></td>
      </tr>
      <tr>
        <td><label for="coemtarios">Comentarios</label></td>
        <td><textarea name="coemtarios" maxlength="500" cols="30" rows="5"></textarea> </td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" value="Enviar"></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>