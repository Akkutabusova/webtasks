var Buttons = document.querySelectorAll("#tasks button");
for (let but of Buttons) {
	but.addEventListener('click',function(e){
		this.parentNode.setAttribute("data-status", "done");
	});
}
