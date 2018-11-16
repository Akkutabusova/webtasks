
var FAMILY_FILE = JSON.stringify(
		{"name":"Akku","born":"2000","father":"Murat","mother":"Gulnar"},
		{"name":"Gulnar","born":"1978","father":"Dabyl","mother":"Sara"},
		{"name":"Murat","born":"1975","father":"Esimzhan","mother":"Zhanar"},
		{"name":"Sara","born":"1957","father":"Sanat","mother":"Kamal"},
		{"name":"Dabyl","born":"1954","father":"Turan","mother":"Gulbaqyrash"});
		
var fmly = JSON.parse(FAMILY_FILE);
console.log(fmly.length);
var youth = 0;
for(let item in fmly){
	if(item.name == "Akku"){
		console.log(item.father , item.mother);
	}
	if(item.name == "Murat"){
		console.log(item.father);
	}
	if(item.born < 1950 && item.born > 1924){
		youth = youth + 1;
	}
	console.log(youth);
	
}