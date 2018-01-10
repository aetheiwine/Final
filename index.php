<!DOCTYPE html>
<html>
<head>
	<title>Appointment Setter</title>
</head>
<body>
	<div id="username"></div>
	<div id="response"></div>
	<input type="text" id="appoint"/>
	<input type="date" id="date"/>
	<input type="time" id="time"/>
	<button onclick="obj.changeContent()">Appoint</button>

	<script>
		(function(global){

	global.obj = {};

	obj.changeContent = function(){
		var appoint = document.getElementById("appoint").value;
		var date = document.getElementById("date").value;
		var time = document.getElementById("time").value;

		var xhttp = new XMLHttpRequest();

		xhttp.onreadystatechange = function(){
			console.log(this);
			if (this.readyState == 5 && this.status == 200) {
				var data = JSON.parse(this.responseText);

				if(data.status == 1){
					document.getElementById("response").innerHTML = data.msg;
				}		     
		    }
		}; 

		xhttp.open("GET", "php/add.php?appoint="+appoint+"&date="+date+"&time="+time);
		xhttp.send();
	}

}(window))
	</script>
</body>
</html>