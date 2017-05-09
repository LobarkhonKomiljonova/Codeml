$('document').ready(function(){
	$("#send_question").click(function(e){
		
		$.ajax({
			url:"../php/QA.php",
			type:"post",
			dataType:"json",
			data:{
				"data":"upload",
				jquestion: $("#Question").val(),
				jcode: $("#coqust").val(),
				jkword: $("#type").val()
			},
			success:function(data){
			}
		});
		window.location.href = "../html/index.php";
	});
});
$(document).ready(function(){
	$("#code").click(function(){
	    if($("#code").prop("checked")){
	    	$('#coqust').slideDown();
		}
		else if(!$("#code").prop("checked")){
	    	$('#coqust').slideUp('slow');
			  	
		}
	})
});