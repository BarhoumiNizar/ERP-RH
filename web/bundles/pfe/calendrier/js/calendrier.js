$(function(){
	
	 $("#mois").change(function(){
		 
		 if($("#mois").val()=='1')
		      {
				  $("#fev").hide();
				  $("#janv").show();
				  $("#mars").hide();
				  $("#av").hide();
				   $("#mai").hide();
				    $("#juin").hide();
					 $("#juillet").hide();
					  $("#aout").hide();
					   $("#septembre").hide();
					   $("#octobre").hide();
					   $("#novembre").hide();
					    $("#decembre").hide();
				  }
		   
		   else if($("#mois").val()=='2')
		      {
				  $("#fev").show();
				  $("#janv").hide();
				  $("#mars").hide();
				  $("#av").hide();
				   $("#mai").hide();
				    $("#juin").hide();
					 $("#juillet").hide();
					  $("#aout").hide();
					   $("#septembre").hide();
					   $("#octobre").hide();
					   $("#novembre").hide();
					    $("#decembre").hide();
				  }
		    else if($("#mois").val()=='3')
		      {
				  $("#fev").hide();
				  $("#mars").show();
				  $("#janv").hide();
				 
				  $("#av").hide();
				   $("#mai").hide();
				    $("#juin").hide();
					 $("#juillet").hide();
					  $("#aout").hide();
					   $("#septembre").hide();
					   $("#octobre").hide();
					   $("#novembre").hide();
					    $("#decembre").hide();
				  }
		     else if($("#mois").val()=='4')
		      {
				  $("#mars").hide();
				  $("#av").show();
				  $("#janv").hide();
				  $("#fev").hide();
				  
				   $("#mai").hide();
				    $("#juin").hide();
					 $("#juillet").hide();
					  $("#aout").hide();
					   $("#septembre").hide();
					   $("#octobre").hide();
					   $("#novembre").hide();
					    $("#decembre").hide();
				  }
		 else if($("#mois").val()=='5')
		      {
				  $("#av").hide();
				  $("#mai").show();
				  $("#janv").hide();
				   $("#fev").hide();
				    $("#mars").hide();
				    $("#juin").hide();
					 $("#juillet").hide();
					  $("#aout").hide();
					   $("#septembre").hide();
					   $("#octobre").hide();
					   $("#novembre").hide();
					    $("#decembre").hide();
				  }
		 else if($("#mois").val()=='6')
		      {
				  $("#mai").hide();
				  $("#juin").show();
				  $("#av").hide();
				  $("#janv").hide();
				   $("#fev").hide();
				    $("#mars").hide();
				   
					 $("#juillet").hide();
					  $("#aout").hide();
					   $("#septembre").hide();
					   $("#octobre").hide();
					   $("#novembre").hide();
					    $("#decembre").hide();
				  }
		else if($("#mois").val()=='7')
		      {
				 
				  $("#juillet").show();
				  $("#mai").hide();
				  $("#juin").hide();
				  $("#av").hide();
				  $("#janv").hide();
				   $("#fev").hide();
				    $("#mars").hide();
					  $("#aout").hide();
					   $("#septembre").hide();
					   $("#octobre").hide();
					   $("#novembre").hide();
					    $("#decembre").hide();
				  }
		else if($("#mois").val()=='8')
		      {
					  $("#juillet").hide();
					  $("#aout").show();
					  $("#mai").hide();
					  $("#juin").hide();
					  $("#av").hide();
					  $("#janv").hide();
					   $("#fev").hide();
						$("#mars").hide();
						$("#septembre").hide();
						$("#octobre").hide();
						$("#novembre").hide();
						$("#decembre").hide();
				  }
		else if($("#mois").val()=='9')
		      {
				  $("#aout").hide();
				  $("#septembre").show();
				  $("#mai").hide();
				  $("#juin").hide();
				  $("#av").hide();
				  $("#janv").hide();
				   $("#fev").hide();
				    $("#mars").hide();
					 
					   $("#juillet").hide();
					   $("#octobre").hide();
					   $("#novembre").hide();
					    $("#decembre").hide();
				  }
	else if($("#mois").val()=='10')
		      {
				  $("#aout").hide();
				  $("#septembre").hide();
				  $("#mai").hide();
				  $("#juin").hide();
				  $("#av").hide();
				  $("#janv").hide();
				   $("#fev").hide();
				    $("#mars").hide();
					   $("#juillet").hide();
					   $("#octobre").show();
					   $("#novembre").hide();
					    $("#decembre").hide();
				  }
	else if($("#mois").val()=='11')
		      {
				 $("#aout").hide();
				  $("#septembre").hide();
				  $("#mai").hide();
				  $("#juin").hide();
				  $("#av").hide();
				  $("#janv").hide();
				   $("#fev").hide();
				    $("#mars").hide();
					$("#juillet").hide();
					$("#octobre").hide();
					$("#novembre").show();
					$("#decembre").hide();
			  }
	else if($("#mois").val()=='12')
		      {
				  $("#aout").hide();
				  $("#septembre").hide();
				  $("#mai").hide();
				  $("#juin").hide();
				  $("#av").hide();
				  $("#janv").hide();
				   $("#fev").hide();
				    $("#mars").hide();
				   $("#juillet").hide();
					$("#octobre").hide();
					 $("#novembre").hide();
					
				  $("#decembre").show();
				  }
	
	 
		 
		 
	 });
	
	
	
});