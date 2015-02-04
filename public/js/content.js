window.onload = loadXMLDoc('home');

function loadXMLDoc(content)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
		{
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("filler").innerHTML=xmlhttp.responseText;
		}
	}
	
	console.log(content);

	if(content == "home") {
		xmlhttp.open("GET","views/index.php",true);
	} else if(content == "test") {
		xmlhttp.open("GET","views/test.php",true);
	} else if(content == "radio") {
		xmlhttp.open("GET","views/radio.php",true);
	}else if(content == "help") {
		xmlhttp.open("GET","views/help.php",true);
	}else if(content == "blog") {
		xmlhttp.open("GET","views/blog.php",true);
	}else if(content == "discover") {
		xmlhttp.open("GET","views/discover.php",true);
	} else {
		xmlhttp.open("GET","views/error.php",true);
	}
	
	xmlhttp.send();
}


function loadsearchresults(s)
{
	
	var xmlhttp;
	if (window.XMLHttpRequest)
		{
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("filler").innerHTML=xmlhttp.responseText;
		}
	}
	
	console.log();

		if (s == ""){
		xmlhttp.open("GET","views/index.php",true);
		} else {
		xmlhttp.open("GET","views/search.php?s="+s,true);
		}
	
	xmlhttp.send();
	

	}
	
