function validacionactor()
{
	let codigoactor= document.getElementById('codigoactor').value;
	let nombreactor= document.getElementById('nombreactor').value;

	if (!(/^[0-9]{5}$/.test(codigoactor)))
	{
		alert('¡Codigo incorrecto!')
		return false;
	}
	else if (!(/^[A-Z a-z]{7,40}$/.test(nombreactor))) 
	{
		alert('¡Nombre incorrecto!')
		return false;
	}
	else
	{

	}
}

