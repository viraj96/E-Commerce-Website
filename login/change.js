var myText=document.getElementById("change");
textArray=["|","a|","am|","ama|","amaz|","amazi|","amazin|","amazing|","amazing|","amazing|","amazin|","amazi|","amaz|","ama|","am|","a|","|","|","c|","co|","coo|","cool|","cool|","cool|","coo|","co|","c|","|","|","a|","ad|","adv|","adva|","advan|","advanc|","advance|","advance|","advance|","advance |","advance g|","advance gr|","advance gro|","advance groc|","advance groce|","advance grocer|","advance grocery|","advance grocery |","advance grocery s|","advance grocery st|","advance grocery sto|","advance grocery stor|","advance grocery store|","advance grocery store","advance grocery store","advance grocery store","advance grocery store","advance grocery store","advance grocery store"];
textIndex=1;

function changeText(){
myText.innerHTML=textArray[textIndex];
textIndex++;
if (textIndex>=textArray.length){
	textIndex=0;
}	
}

setInterval(changeText,0200);
