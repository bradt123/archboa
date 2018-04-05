<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script type="text/javascript" src="../javascript/first.js"></script>
	<script type="text/javascript">
		var r = setInterval("Ver_Hora()",500);
	</script>
</head>
<body>
<form>
	<p align="center">
	<input type="text" name="reloj" size="10">
	</p>
</form>

<form name="imagenes">
	<select name="imagen"  size="1" onchange="ver_imagen()">
		<option>Elije imagen</option>
		<option value="../../img/1.jpg">1</option>
		<option value="../../img/2.jpg">2</option>
		<option value="../../img/3.jpg">3</option>
		<option value="../../img/4.jpg">4</option>
	</select>
</form>

<img src="../../img/1.jpg" name="img" width="600" height="436" border="3">

<form>
<input type="text" name="txt" value="!Hello" size="30">
<br>
<input type="button" name="" value="Selecciona texto" onclick="setfocus()">
</form>
<form name="m">
	<input type="button" onclick="getAction()" value="ver">
	&lt;br&gt;&lt;br&gt;
	<input type="button" ondblclick="changeAction(_" name="" value="">
</form>
<br>
<br>
<p id="demo"></p>

</body>
</html>