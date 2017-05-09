$(document).ready(function(){
	$('#btn').click(function(){
		var email=$('#email').val();
		var pass=$('#password').val();
		var json ={'email':email, 'password':pass};
		console.log(json);
		$.post('api/', json, 
			function(resp){
				console.log(resp);
				if(resp.message==1){
					
					console.log(resp.status);
					console.log(resp);
					window.location.href = "../admin/check.php";
				}

				else
				{
				console.log(resp.status);
				$("#jsonM").html(resp.message);
				}
			});
	});
});