function ajax(){
	function obtenerXHR(){
		req= false;

		if(window.XMLHttpRequest){
			req = new XMLHttpRequest();
		}else{
			if (window.ActiveXObject){
				req = new ActiveXObject("Microsoft.XMLHTTP");
			}
		}
		return req;
	}

	var peticion = obtenerXHR();
	var valor = document.getElementById("modeloAvion").value;

	peticion.onreadystatechange = procesarPeticion;
	peticion.open("GET","script.php?modeloAvion="+valor,true);
	peticion.send();

	function procesarPeticion(){
		if (peticion.readyState == 4) {
			if(peticion.status==200){
				//var validez = document.getElementById("validez");
				//validez.innerHTML= peticion.responseText;
				console.log(peticion.responseText);
				document.getElementById("validez").value = peticion.responseText;
			}
		}
	}
}