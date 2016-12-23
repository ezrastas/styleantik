function $() {
	var elements = new Array();
	for (var i = 0; i < arguments.length; i++) {
		var element = arguments[i];
		if (typeof element == 'string')
			element = document.getElementById(element);
		if (arguments.length == 1)
			return element;
		elements.push(element);
	}
	return elements;
}
function toggle() {
	for ( var i=0; i < arguments.length; i++ ) {
		$(arguments[i]).style.display = ($(arguments[i]).style.display != 'none' ? 'none' : '' );
	}
    popup = false;
}

function dg_dsm(msgStr) {
    status=msgStr;
    document.dg_rv = true;
    }

function noError(){
   return true;}
   window.onerror = noError;


function clearAttr() {
	if (!document.getElementsByTagName) return;
	var anchs = document.getElementsByTagName("a");
	for (var i=0; i<anchs.length; i++)
		{
		var anch = anchs[i];
		if (anch.getAttribute("href") && anch.getAttribute("rel") == "lightbox") {
			anch.removeAttribute("href");
            anch.removeAttribute("title");
            anch.onclick = false;
        }
	}
}