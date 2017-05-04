var button=document.getElementById("but");
var combo=document.getElementById("field");
var tfield=document.getElementById("enter");
var div=document.getElementById("mes");
var text=document.getElementById("remove");
combo.onchange=function(){
if (combo.value=="others"){
tfield.style.display="block";
}
else if(combo.value!="others"){
	tfield.style.display="none";
	window.open("../catagory/catagory.php",'_self');}

}
tfield.onchange=function(){
if (tfield.value!=null){
	window.alert("We currently dont supply at this location. Please check our inventory.")
	div.style.display="block";
	button.style.display="none";
	tfield.style.display="none";
	combo.style.display="none";
	text.style.display="none";
}}