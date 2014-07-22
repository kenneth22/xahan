	jQuery(document).ready(function(){
		jQuery('.breezehub-btn').click(function(){
			var formID = jQuery(this).attr('data-submit');
			var redirect = jQuery('#'+formID+" input[name='redirect_url']").val();
			jQuery.ajax({
					type:"POST",
					url:"http://travelcampstore.com/breezehub/submit.php",
					data:jQuery('#'+formID).serialize(),
					success:function(data){
						var resp = JSON.parse(data);
						var msg ="";
						if(resp.Success == 1)
						{
							window.location.href = redirect;// location redirect.
						}
						else
						{
	
							for(var i=0;i<resp.FieldErrors.length; i++){
							msg+='<p>'+resp.FieldErrors[i].ID+'-'+resp.FieldErrors[i].ErrorText+'</p>';
							}
							jQuery('#error-holder').html(msg);
							jQuery('#error-holder').addClass('showError');
							
						}
						console.log(data);
						},
					dataType:'text'	
			 	}).fail(function(){
					alert("Unable to process your request. Please try again later");
				});
		});
	});