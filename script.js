(function(global){

	global.obj = {};

	obj.changeContent = function(){
		var name = document.getElementById("name").value;
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

		xhttp.open("GET", "php/add.php?name="+name+"&date"+date+"&time"+time+);
		xhttp.send();
	}

}(window))