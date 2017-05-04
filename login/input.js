var myField1=document.getElementById("field1");
var myField2=document.getElementById("field2");
var myField3=document.getElementById("field3");
var myField4=document.getElementById("field4");
var myField5=document.getElementById("field5");
var myField6=document.getElementById("field6");


myField1.onblur=function(){
	if (myField1.value==""){
		myField1.value="Cannot Be Left Blank";
		myField1.style.color="red";
		myField1.style.border="3px solid red";
	}
};


myField3.onblur=function(){
	if (myField3.value==""){
		myField3.value="Cannot Be Left Blank";
		myField3.style.color="red";
		myField3.style.border="3px solid red";
	}
};


myField5.onblur=function(){
	if (myField5.value==""){
		myField5.value="Cannot Be Left Blank";
		myField5.style.color="red";
		myField5.style.border="3px solid red";
	}
};

myField6.onblur=function(){
	if (myField6.value==""){
		myField6.value="Cannot Be Left Blank";
		myField6.style.color="red";
		myField6.style.border="3px solid red";
	}
};