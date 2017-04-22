$(document).ready(function(){
	$("#submitbtn").click(function(){
		SendData();	
	});
});


function SendData() {
	var text = $("#submitbtn").val();
	$.ajax({
		method: "POST",
		url: "./php/log_in.php",
		//dataType: "json",
		data: {

			text_type: text
		}
	}).done(function(data) {
		alert("You are succesfully regisrtered!!!");
		// console.log(data);
	}).fail(function(arg1, arg2){
		alert("There was some problem on connecting to our database please sign up one more time");
		console.log(arg1, arg2);
	});
}

$(document).ready(function(){
	$( "#submitbtn" ).keypress(function(arg) {
		if (arg.keyCode == 13) {
			SendData();
		}
	});
});