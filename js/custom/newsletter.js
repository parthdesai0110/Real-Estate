 $(document).ready(function(){
	 
                $('#notify_me').click(function(){
												   
                    var newsletter_email = $("#newsletter_email").val();
                    
					var flag = true;
					var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
						if(newsletter_email == "" || !regex.test(newsletter_email)){
							$("#newsletter_email_error").html("Please enter valid email id");
							flag = false;
						}else{
							$("#newsletter_email_error").html("");
						}
					
					if(flag){
						$.ajax({
							url: baseurl+"welcome/save_newsleeter_info",
							data:{newsletter_email:newsletter_email},
							type:'post',
							dataType: 'json',
							success:function(response){
								if(response){
									$("#newsletter_table").hide();
									$("#newletter_success_msg").show();
								}
							}
	
						});
					}else{
						return false;
					}
					
                });
				
				$('#submit_login').click(function(){
												   
                    var user_name = $("#login_username").val();
                    var password = $("#login_password").val();
					
					if(user_name == "" && password == ""){
						$("#login_error").html("Please Enter User Name & Password");
						return false;
					}
					
					if(user_name == ""){
						$("#login_error").html("Please Enter User Name");
						return false;
					}
					
					if(password == ""){
						$("#login_error").html("Please Enter Password");
						return false;
					}
					
						$.ajax({
							url: baseurl+"welcome/chk_login",
							data:{user_name:user_name, password:password},
							type:'post',
							dataType: 'json',
							success:function(response){
								if(response){
									window.location.href = baseurl+"dashboard/";
								}
								if(!response){
									$("#login_error").html("Invalid Login Detail");
								}
							}
	
						});
					
                });
				
            });
 
