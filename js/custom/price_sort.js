 $(document).ready(function(){
	 
				$('#price_sort').change(function(){
								var price_sort = $("#price_sort").val();
								
								if(price_sort == '1'){
									window.location.href = baseurl+"all_property/price_asc";
								}
								if(price_sort == '2'){
									window.location.href = baseurl+"all_property/price_desc";
								}
					
					
                });
				
            });
 
