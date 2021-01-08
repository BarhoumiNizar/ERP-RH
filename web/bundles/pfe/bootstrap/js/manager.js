$(function(){
    $("#form_profil").change(function(){
	 
	    var profil=$("#form_profil").val();
		 if(profil=='Employe')
		 {
		  $("#manager").show();
		 }
		 else
		 {
		  $("#manager").hide();
		 }
	 });
	
});