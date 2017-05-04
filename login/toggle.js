var form1=document.getElementById("login");
var form2=document.getElementById("signup");

var place=document.getElementById("click");
place.onclick=function(){
	
	if (form1.style.display=="block"){
	form1.style.display="none";
	form2.style.display="block";

	}
	else if (form2.style.display=="block"){
	form2.style.display="none";
	form1.style.display="block";

	}
	

}