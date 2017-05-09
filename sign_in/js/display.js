$(document).ready(function(){
	$("#validation").click(function(){
	    if($("#validation").prop("checked")){
	    	$('#answer').slideDown();
		}
		else if(!$("#validation").prop("checked")){
	    	$('#answer').slideUp('slow');   	
		}
	})
});