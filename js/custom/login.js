 $(document).ready(function(){
							
				$("input").keypress(function(event) {
					if (event.which == 13) {
						event.preventDefault();
						$( "#login_chk" ).trigger( "click" );
					}
				});
                
                $('#login_chk').click(function(){
												   
                    var user_name = $("#username").val();
                    var password = $("#password").val();
					
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
 
