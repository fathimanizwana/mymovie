// JavaScript Document
$(document).ready(function() {
	   
	   jQuery("#register-form").validationEngine();
	   
	   var date = new Date();
            date.setDate(date.getDate()-1);
		    $('.datepicker').datepicker({startDate:false,format:'yyyy-mm-dd',autoclose: true,todayHighlight:true}); 
	        
			$("#register-form").on("submit",function(e) {
			    
				e.preventDefault();
			    
				if($("#register-form").validationEngine('validate')) {
			  	    var form_data = $( "form" ).serialize();
					    $.post( "insert.php",{form_values : form_data},function( data ) {
						var Data =  jQuery.parseJSON(data);
						$(".registration_form").hide(200);
								  
								  
								  $(".success_msg").show(200,function() {
									 $(".result").show();
							         $("td#First_name").html(Data[0].First_name);
								     $("#Last_name").html(Data[0].Last_name);
								     $("#Gender").html(Data[0].Gender);
								     $("#Dob").html(Data[0].Dob);
								     $("#User_name").html(Data[0].User_name);							        
								  });
				  });
		  
	   } else {
		    return false;
		}
	   });
		
});