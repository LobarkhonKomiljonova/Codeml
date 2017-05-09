/***************************************************/
$('document').ready(function(){
	$("#submitbtn").click(function(e){
		$.ajax({
			url:"../php/server.php",
			type:"POST",
			dataType:"json",
			data:{
				"data":"sign",
				jsfname: $("#name").val(),
				jslname: $("#surname").val(),
				jsgender: $("#gender").val(),
				jsphone: $("#phone").val(),
				jsemail: $("#email").val(),
				jsusername: $("#username").val(),
				jspassword: $("#password").val()
			},
			success:function(data){
				data.preventDefault();
			}
		});
	});
	
/***************************************************/
	$('#name').bind('keyup blur',function(){ 
	    $(this).val( $(this).val().replace(/[^A-Za-z]/ig,'') ); }
	);
/***************************************************/
	$('#surname').bind('keyup blur',function(){ 
	    $(this).val( $(this).val().replace(/[^A-Za-z]/ig,'') ); }
	);
/***************************************************/
	$('#phone').bind('keyup blur',function(){ 
	    $(this).val( $(this).val().replace(/[^\+0-9]/g,'') ); }
	);
/***************************************************/
	$('#confirm').keyup(function(){
		if($(this).val()!=$('#password').val())
		{
			// alert($("#confirm").val());
			$('#none').slideDown();
		}
		if($(this).val()==$('#password').val())
		{
			// alert($("#password").val());
			$('#none').slideUp();
		}


	})
		
});