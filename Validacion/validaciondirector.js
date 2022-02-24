function validaciondirector()
{
	let codigodirector= document.getElementById('codigodirector').value;
	let nombredirector= document.getElementById('nombredirector').value;

	if (!(/^[0-9]{5}$/.test(codigodirector)))
	{
		alert('¡Codigo incorrecto!')
		return false;
	}
	else if (!(/^[A-Z a-z]{6,40}$/.test(nombredirector))) 
	{
		alert('¡Nombre incorrecto!')
		return false;
	}
	else
	{

	}
}