 $(document).ready(function(){
	 
                $('.favourite_property').click(function(){
												   
                    var $this = $(this);
                    var property_id = $this.data('id'); 
                    
						$.ajax({
							url: baseurl+"welcome/add_favourite_property",
							data:{property_id:property_id},
							type:'post',
							dataType: 'json',
							success:function(response){
								if(response){
									$(".favourite_property").hide();
									$(".unfavourite_property").show();
								}
							}
	
						});
					
                });
				
				$('.unfavourite_property').click(function(){
												   
                    var $this = $(this);
                    var property_id = $this.data('id'); 
                    
						$.ajax({
							url: baseurl+"welcome/add_unfavourite_property",
							data:{property_id:property_id},
							type:'post',
							dataType: 'json',
							success:function(response){
								if(response){
									$(".unfavourite_property").hide();
									$(".favourite_property").show();
								}
							}
	
						});
					
                });
				
            });
 
