 $(document).ready(function(){
	 
				$('#find_now').click(function(){
												   
                    var search_text = $("#search_text").val();
                    var search_property_type = $("#search_property_type").val();
                    var search_price = $("#search_price").val();
					
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
 
