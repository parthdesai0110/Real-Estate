 $(document).ready(function(){
	 
                $('#contact_submit').click(function(){
												   
                    var username = $("#username").val();
                    var email = $("#email").val();
                    var telephone = $("#telephone").val();
					var details = $("#details").val();
					
					var flag = true;
					if(username == ""){
						$("#username_error").html("Please enter full name");
						flag = false;
					}else{
						$("#username_error").html("");
					}
					
					var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
						if(email == "" || !regex.test(email)){
							$("#email_error").html("Please enter valid email id");
							flag = false;
						}else{
							$("#email_error").html("");
						}
					
					if(telephone == ""){
						$("#telephone_error").html("Please enter contact number");
						flag = false;
					}else{
						$("#telephone_error").html("");
					}
					
					if(details == ""){
						$("#details_error").html("Please enter message");
						flag = false;
					}else{
						$("#details_error").html("");
					}
					
					if(flag){
						$.ajax({
							url: baseurl+"welcome/save_contact_info",
							data:{username:username, email:email, telephone:telephone, details:details},
							type:'post',
							dataType: 'json',
							success:function(response){
								if(response){
									$("#contact_table").hide();
									$("#success_msg").show();
								}
							}
	
						});
					}else{
						return false;
					}
					
                });
				
            });
 
