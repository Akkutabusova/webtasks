function declare(){
		var tableRef = document.getElementById('students');
		if(document.getElementById("name").value==""){
			document.getElementById("name").style.border = "2px solid red";

		}else if(document.getElementById("surname").value==""){
			document.getElementById("surname").style.border = "2px solid red";	
		
		}else if(document.getElementById("faculty").value=="-1"){
			document.getElementById("faculty").style.border="2px solid red";
		}else{
			var newRow   = tableRef.insertRow();
			var newCell1  = newRow.insertCell(0);
			var newCell2  = newRow.insertCell(1);
			var newCell3  = newRow.insertCell(2);
			var newText1  = document.createTextNode(document.getElementById("name").value);
			var newText2  = document.createTextNode(document.getElementById("surname").value);
			var newText3  = document.createTextNode(document.getElementById("faculty").value);
			newCell1.appendChild(newText1);
			newCell2.appendChild(newText2);	
			newCell3.appendChild(newText3);		
		}
}



var btn=document.getElementById("addStudent")
btn.addEventListener("click", declare);
