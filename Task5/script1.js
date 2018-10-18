function f() {
	var v1=document.getElementById('s11').value;
	var v2=document.getElementById('s12').value;
	var v3=document.getElementById('s13').value;
	var v4=document.getElementById('s21').value;
	var v5=document.getElementById('s22').value;
	var v6=document.getElementById('s23').value;
	var v7=document.getElementById('s31').value;
	var v8=document.getElementById('s32').value;
	var v9=document.getElementById('s33').value;
	document.getElementById("result").innerHTML= 
	(parseInt(v1)*parseInt(v5)*parseInt(v9))+(parseInt(v2)*parseInt(v6)*parseInt(v7))+(parseInt(v3)*parseInt(v4)*parseInt(v8)) - (parseInt(v3)*parseInt(v5)*parseInt(v7)) - (parseInt(v1)*parseInt(v6)*parseInt(v8)) - (parseInt(v2)*parseInt(v4)*parseInt(v9))

}
let btn=document.getElementById("determinant");
btn.addEventListener("click",f,false)