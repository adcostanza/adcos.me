function page(weburl) {
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else if (window.ActiveXObject) {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	} else {
  		alert("Your browser does not support XMLHTTP!");
  	}
  	xmlhttp.onreadystatechange=function() {
		if(xmlhttp.readyState==4) {
			document.getElementById('mainbody').innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", weburl, true);
	xmlhttp.send(null);
}
function search(query) {
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else if (window.ActiveXObject) {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	} else {
  		alert("Your browser does not support XMLHTTP!");
  	}
  	xmlhttp.onreadystatechange=function() {
		if(xmlhttp.readyState==4) {
			document.getElementById('search_results').innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", 'if.php?search='+query, true);
	xmlhttp.send(null);
}
function show(lastname, firstname) {
	document.getElementById("extra_"+lastname+firstname).style.cssText = "display:inline;";
}