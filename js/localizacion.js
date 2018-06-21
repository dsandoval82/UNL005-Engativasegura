var userloc = document.getElementById("userlocalization");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        userloc.innerHTML = "Este navegador no soporta Geolocalizacion";
    }
}

function showPosition(position) {
    userloc.innerHTML = "[" + position.coords.latitude + 
    "," + position.coords.longitude + "]";
	obtenerLocalidad(position.coords.latitude, position.coords.longitude);
}


function obtenerLocalidad(latitud,longitud){

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        document.getElementById("localidad").innerHTML = "<b>Localidad:</b> "+ myObj.address.suburb;
		document.getElementById("usercity").innerHTML = "<b>Ciudad:</b> "+ myObj.address.county;
    }
};
xmlhttp.open("GET", "https://nominatim.openstreetmap.org/reverse?format=json&lat="+ latitud +"&lon=" + longitud + "&zoom=18&addressdetails=1", true);
xmlhttp.send();
}
