var max = 191;
var min = 0;
stanza = [];

function jcap(){

	var uword = hex_md5(document.getElementById(jfldid).value);
	var list = document.getElementById("uword").value;

	if (list === "adjective"){
		
		console.log("next should be verb");
		min = 85;
		max = 200;
	}

	else if (list === "noun"){
		
		console.log("next should be verb");
		min = 201;
		max = 250;
	}

	else if (list === "verb"){
		
		console.log("next should be conjunction");
		min = 55;
		max = 65;
	}

	else if (list === "conjunction"){
		
		min = 0;
		max = 191;
	}

		var random = Math.floor(Math.random() * (max - min +1)) + min;
		var img = "cimg/" + random + ".jpg";
		console.log(img);
		document.getElementById("captcha").src = img;
		//document.querySelector("body").style.backgroundImage="url(" + img + ")";
		stanza.push([img]);
		console.log(stanza);


		if (stanza.length === 7){

			document.getElementById("stanza").style.display = "none";
			document.getElementById("poem").style.display = "block";
			document.getElementById("line1").src = stanza[0];
			document.getElementById("line2").src = stanza[1];
			document.getElementById("line3").src = stanza[2];
			document.getElementById("line4").src = stanza[3];
			document.getElementById("line5").src = stanza[4];
			document.getElementById("line6").src = stanza[5];

		}


	

}

// for(var i = 0; i < stanza.length; i++) {
		
// 		if (stanza.length === 2){

// 			$("#stanza").empty();
// 			document.getElementById("poem").style.display = "block";
// 			document.getElementById("line1").src = stanza[1];
// 			document.getElementById("line2").src = stanza[0];

// 		}
// 	}



