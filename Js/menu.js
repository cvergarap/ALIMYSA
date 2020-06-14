var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

// abrir la capa oculta
function mopen(id)
{	
	// cancelar temporizador de cierre
	mcancelclosetime();

	// cerrar la vieja capa
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// obtener nueva capa y mostrarla
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// cerrar mostrar la capa
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// ir a cerrar el temporizador
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancelar temporizador de cierre
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// cerrar capa cuando haga clic en salir
document.onclick = mclose; 