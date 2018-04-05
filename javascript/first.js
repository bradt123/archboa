/*function Ver_Hora()
{

	var mihora = new Date();
	var horas =mihora.getHours().toString();
	var minutos = mihora.getMinutes().toString();

	if (minutos.length == 1) {
		minutos = "0" + minutos;
	}

	var segundos = mihora.getSeconds().toString();

	if(segundos.length == 1){
		segundos = "0" + segundos;
	}
	document.forms[0].reloj.value = horas + " : " + minutos + " : " + segundos;
}


function ver_imagen()
{
	if (document.images) {
		return document.images.img.src = 
		document.imagenes.imagen.options[document.imagenes.imagen.selectedIndex].value;
	}
}
*/
var carName = "Volvo";
document.getElementById("demo").innerHTML = carName;