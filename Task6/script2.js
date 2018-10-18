let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};

for (let country of countries){
	let ncountry = document.createElement("option");
	ncountry.textContent = country;
	document.querySelector("#countries").appendChild(ncountry);
}


function selectcity(){
	let citiesOpt = document.querySelectorAll("#cities option");
	let Country = document.getElementById("countries").value;
	
	for(let city of citiesOpt){
		city.remove();
	}	
	for(let city of cities_by_country[Country]){ 
		let ncity = document.createElement("option");
		ncity.textContent = city;
		document.querySelector("#cities").appendChild(ncity);
				
	}
	
}

document.querySelector('#countries').addEventListener('change', selectcity);