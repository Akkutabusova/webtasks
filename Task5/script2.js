function h(e){
	var imgReplace =document.getElementsByTagName("img")[0].src = e.target.src;
}
document.body.addEventListener('click', h, false);

