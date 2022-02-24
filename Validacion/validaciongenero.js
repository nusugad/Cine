function validaciongenero()
{
	let codigogenero= document.getElementById('codigogenero').value;
	let nombregenero= document.getElementById('nombregenero').value;

	if (!(/^[0-9]{5}$/.test(codigogenero)))
	{
		alert('¡Codigo incorrecto!')
		return false;
	}
	else if (!(/^[A-Z a-z]{5,20}$/.test(nombregenero))) 
	{
		alert('¡Nombre incorrecto!')
		return false;
	}
	else
	{

	}
}