if( typeof field_email == 'undefined' )
	var _edzFieldEmail = 'email';
else
	var _edzFieldEmail = field_email;

if( typeof funnel_level   == 'undefined' ) send_message("Param funnel_level not found");
if( typeof funnel_key     == 'undefined' ) send_message("Param funnel_key not found");


if( typeof funnel_level   != 'undefined' && parseInt(funnel_level) == 0 )
{
	var _txtEmail   = document.getElementsByName(_edzFieldEmail);

	if( _txtEmail.length > 1 )
	{
		for (var i = 0, n = _txtEmail.length; i < n; i++)
		{
			if( _txtEmail[i].type != 'hidden' )
			{
				var _txtEmail = _txtEmail[i];
				break;
			}
		}
	}
	else
		var _txtEmail =  document.getElementsByName(_edzFieldEmail)[0];

	var _form 		= _txtEmail.parentNode;
	var _container  = _form.parentNode;
}

var _urlConv    = "https://my.eduzz.com/tracker/conv/?N="+funnel_level+"&CH="+funnel_key;
var _hasReturn  = false;
var _edzE = '';
var _edzK = '';
var _edzR = '';
var _edzP = '';
var _edzC = '';

window.onload = init_eduzz;

function init_eduzz()
{

	if( typeof funnel_level   != 'undefined' && parseInt(funnel_level) == 0 )
	{
		if( _form.length == 0 )
		{
			send_message( 'Não foi encontrado o objeto formulário dentro da SqueezePage' );
			return false;
		}

		var _txtFields = _form.getElementsByTagName("input");

		findemail   = false;
		findsubmit  = false;

		for (var i = 0, n = _txtFields.length; i < n; i++)
		{
			if(_txtFields[i].name == _edzFieldEmail )
			{
				findemail = true;
				var _txtEmail = _txtFields[i];
			}
		}

		if(!findemail)	
		{
			send_message('Não foi encontrado o campo email dentro do formulario');
			return false;
		}

		_txtEmail.onblur =  function(e)
		{
			_edzDoTrack();
	    }

	    _txtEmail.onkeypress =  function(event)
		{
			if (event.keyCode == 13) {
				_edzDoTrack();
				return false;
		    }
		}

		if( _txtEmail.value.indexOf('@') >= 0 )
		{
			_edzDoTrack();	
		}

  	}
  	else
  	{
  		if(typeof funnel_level   != 'undefined' && parseInt(funnel_level) > 0)
  		{
  			edz_callScript('','eduzzNullable');
  		}
  	}
}

function _edzDoTrack()
{
	if(_txtEmail.value != _edzE )
		edz_callScript(_txtEmail.value,'eduzzTurnback');	
	
	return false;	
}

function eduzzTurnback(retorno)
{
	if(retorno.status == 1)
	{
		 console.log(retorno.data)
		_edzE = retorno.data.y;
		_edzR = retorno.data.r;
		_edzK = retorno.data.k;
		_edzP = retorno.data.p;
		_edzC = retorno.data.c;
	}
}

function edz_callScript(_emailvalue,_callback)
{
			var edz_script = document.createElement('script');
			_urlConvD = _urlConv;

			if(_callback.length > 0)
				_urlConvD = _urlConvD + '&callback='+ _callback;

			if(_emailvalue.length > 0 )
				_urlConvD = _urlConvD + '&E=' + _emailvalue;
				
			if(_edzK != '' && _edzR != '')
				_urlConvD = _urlConvD + '&r=' + _edzR + '&k=' + _edzK + '&c=' + _edzC + '&p=' + _edzP

			var funnel_affiliate = getURLParam("a");
			if (funnel_affiliate)
				_urlConvD = _urlConvD + '&a=' + funnel_affiliate;

			edz_script.src = _urlConvD;
	        document.getElementsByTagName('head')[0].appendChild(edz_script);
}

function eduzzNullable()
{
	return null
}

function eduzzSubmitForm(data)
{
	_hasReturn = true;
	// console.log(data);
	_form.target = "";
	_form.submit();
}

function edzLoadScreen(message)
{
	document.body.style.height = "100%";

	var div = document.createElement("div");
	div.style.width  		= "100%";
	div.style.height 		= "100%";
	div.style.top 			= "0";
	div.style.left 			= "0";
	div.style.position 		= "absolute";
	div.style.zIndex 		= "997"
	

	var div2 = document.createElement("div");
	div2.style.width  		= "100%";
	div2.style.height 		= "100%";
	div2.style.background 	= "white";
	div2.style.float 	= "left";
	div2.style.opacity = .5; //For real browsers;
	div2.style.filter = "alpha(opacity=50)"; //For IE;
	div2.style.zIndex 		= "998"
	div.appendChild(div2);

	var divMsg = document.createElement("div");
	divMsg.style.width 			= "200px";
	divMsg.style.height 		= "35px";
	divMsg.style.color 			= "white";
	divMsg.style.background 	= "#4472B9";
	divMsg.innerHTML 			= message;
	divMsg.style.position 		= "absolute"
	divMsg.style.margin 		= "auto";
	divMsg.style.top 		= "0";
	divMsg.style.left 		= "0";
	divMsg.style.bottom 	= "0";
	divMsg.style.right 		= "0";
	divMsg.style.padding	= "10px";
	divMsg.style.textAlign  = "center";
	divMsg.style.zIndex 		= "999"

	div2.appendChild(divMsg);

	insertAfter(divMsg, div2)

	document.body.insertBefore(div);

	return div;
}

function removeScreen(elem)
{
	elem.parentNode.removeChild(elem);
}

function insertAfter(newNode, referenceNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

function send_message(mensagem)
{
	var err = new Error();
	err.name = 'Eduzz';
	err.message = mensagem;
	throw(err);
}

function getURLParam(param) {
	var url = window.location.href;
    param = param.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + param + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}  
