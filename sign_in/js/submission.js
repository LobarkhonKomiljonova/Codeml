$(function(){
	$("#submitbtn").click(function(){
		SendData();	
	});
});

function Validation(ev)
{
	
}

function SendData() {
	var first_name = $("#firstNameID").val();
	var last_name = $("#LastName").val();
	var gender = $("#genderSelectionID").val();
	var Date_of_birth = $("#dob").val();
	var phone = $("#phone").val();
	var email = $("#email").val();
	var username = $("#username").val();
	var password = $("#password").val();
	$.ajax({
		method: "POST",
		url: "./php/log_in.php",
		//dataType: "json",
		data: {
			jsfname: first_name,
			jslname: last_name,
			jsgender: gender,
			jsDOB: Date_of_birth,
			jsphone: phone,
			jsemail: email,
			jsusername: username,
			jspassword: password 
		}
	}).done(function(data) {
		alert("You are succesfully regisrtered!!!");
		 console.log(data);
	}).fail(function(arg1, arg2){
		alert("There was some problem on connecting to our database please sign up one more time");
		console.log(arg1, arg2);
	});
}

$(document).ready(function(){
	$( "#confirm" ).keypress(function(arg) {
		if (arg.keyCode == 13) {
			SendData();
		}
	});
});