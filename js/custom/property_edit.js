$(document).ready(function(){
	
	$( "#available_as_of" ).datepicker({ dateFormat: 'yy-mm-dd' });
	$( "#sold_date" ).datepicker({ dateFormat: 'yy-mm-dd' });
	
	$("#img_11").uploadifive({
                'auto'         : true,
                'dnd'         : true,
                'fileType'     : 'image',
                'buttonText'   : 'Upload Profile',
                'formData'     : {'test' : 'something'},
                'uploadScript' : baseurl+'js/uploadifive.php',
                'onUploadComplete' : function(file, data) {
                    console.log(data);
                    if(data == undefined || data == '')
                        return false;
                    var parseData = $.parseJSON(data);
                    if(parseData.result == false){
                        alert('error in upload');
                        return false;
                    }
                    $('#preview_img_11').attr('src',baseurl+'uploads/'+parseData.name);
                    $('#hidden_img_11').val(parseData.name); 
                }
            });
			
			$("#img_12").uploadifive({
                'auto'         : true,
                'dnd'         : true,
                'fileType'     : 'image',
                'buttonText'   : 'Upload Profile',
                'formData'     : {'test' : 'something'},
                'uploadScript' : baseurl+'js/uploadifive.php',
                'onUploadComplete' : function(file, data) {
                    console.log(data);
                    if(data == undefined || data == '')
                        return false;
                    var parseData = $.parseJSON(data);
                    if(parseData.result == false){
                        alert('error in upload');
                        return false;
                    }
                    $('#preview_img_12').attr('src',baseurl+'uploads/'+parseData.name);
                    $('#hidden_img_12').val(parseData.name); 
                }
            });
			
			$("#img_13").uploadifive({
                'auto'         : true,
                'dnd'         : true,
                'fileType'     : 'image',
                'buttonText'   : 'Upload Profile',
                'formData'     : {'test' : 'something'},
                'uploadScript' : baseurl+'js/uploadifive.php',
                'onUploadComplete' : function(file, data) {
                    console.log(data);
                    if(data == undefined || data == '')
                        return false;
                    var parseData = $.parseJSON(data);
                    if(parseData.result == false){
                        alert('error in upload');
                        return false;
                    }
                    $('#preview_img_13').attr('src',baseurl+'uploads/'+parseData.name);
                    $('#hidden_img_13').val(parseData.name); 
                }
            });
			
			$("#img_14").uploadifive({
                'auto'         : true,
                'dnd'         : true,
                'fileType'     : 'image',
                'buttonText'   : 'Upload Profile',
                'formData'     : {'test' : 'something'},
                'uploadScript' : baseurl+'js/uploadifive.php',
                'onUploadComplete' : function(file, data) {
                    console.log(data);
                    if(data == undefined || data == '')
                        return false;
                    var parseData = $.parseJSON(data);
                    if(parseData.result == false){
                        alert('error in upload');
                        return false;
                    }
                    $('#preview_img_14').attr('src',baseurl+'uploads/'+parseData.name);
                    $('#hidden_img_14').val(parseData.name); 
                }
            });
	
	 
    $('#account_register').click(function(){
												   
        var title = $("#title").val();
        var description = $("#description").val();
        var price = $("#price").val();
        var address = $("#address").val();
        var bedroom = $("#bedroom").val();
        var living_room = $("#living_room").val();
        var parking = $("#parking").val();
        var kitchen = $("#kitchen").val();
        
        var image_1 = $("#hidden_img_11").val();
        var image_2 = $("#hidden_img_12").val();
        var image_3 = $("#hidden_img_13").val();
        var image_4 = $("#hidden_img_14").val();
        var user_id = $("#user_id").val();
        var property_id = $("#property_id").val();
		var property_type = $("#property_type").val();
		var near_by = $("#near_by").val();
		var near_by_name = $("#near_by_name").val();
		var offer_details = $("#offer_details").val();
		var sold_date = $("#sold_date").val();
		
		var rent_terms = $("input[name=rent_terms]:checked").val();
        var monthly_rent_min = $("#monthly_rent_min").val();
        var monthly_rent_max = $("#monthly_rent_max").val();
		var furnished = $("input[name=furnished]:checked").val();
		var luxury_unit = $("input[name=luxury_unit]:checked").val();
        var available_as_of = $("#available_as_of").val();
		var sublease = $("input[name=sublease]:checked").val();
		var is_sold = $("input[name=is_sold]:checked").val();
        var kitchen_app = "";
		var i = 0;
		if ($('#fridge').is(":checked"))
		{
			kitchen_app += "fridge";
			i++;
		}
		if ($('#dishwasher').is(":checked"))
		{
			if(i != '0'){
				kitchen_app += ",";
			}
			kitchen_app += "dishwasher";
			i++;
		}
		if ($('#microwave').is(":checked"))
		{
			if(i != '0'){
				kitchen_app += ",";
			}
			kitchen_app += "microwave";
			i++;
		}
		if ($('#stove').is(":checked"))
		{
			if(i != '0'){
				kitchen_app += ",";
			}
			kitchen_app += "stove";
			i++;
		}
		if ($('#garbage').is(":checked"))
		{
			if(i != '0'){
				kitchen_app += ",";
			}
			kitchen_app += "garbage";
			i++;
		}
		
		
		var laundry_app = "";
		var m = 0;
		if ($('#washer').is(":checked"))
		{
			laundry_app += "washer";
			m++;
		}
		if ($('#dryer').is(":checked"))
		{
			if(m != '0'){
				laundry_app += ",";
			}
			laundry_app += "dryer";
			m++;
		}
		if ($('#in_premises').is(":checked"))
		{
			if(m != '0'){
				laundry_app += ",";
			}
			laundry_app += "in_premises";
			m++;
		}
		if ($('#near_premises').is(":checked"))
		{
			if(m != '0'){
				laundry_app += ",";
			}
			laundry_app += "near_premises";
			m++;
		}
		
		
        			
        var flag = true;
        
        if(title == ""){
            $("#title_error").html("Please enter title");
            flag = false;
        }else{
            $("#title_error").html("");
        }
        
        if(description == ""){
            $("#description_error").html("Please enter description");
            flag = false;
        }else{
            $("#description_error").html("");
        }
        			
        if(price == ""){
            $("#price_error").html("Please enter price");
            flag = false;
        }else{
            $("#price_error").html("");
        }
					
        if(address == ""){
            $("#address_error").html("Please enter address");
            flag = false;
        }else{
            $("#address_error").html("");
        }
					
        if(bedroom == ""){
            $("#bedroom_error").html("Please enter bedroom");
            flag = false;
        }else{
            $("#bedroom_error").html("");
        }
        if(living_room == ""){
            $("#living_room_error").html("Please enter living room");
            flag = false;
        }else{
            $("#living_room_error").html("");
        }
		
        if(parking == ""){
            $("#parking_error").html("Please enter parking");
            flag = false;
        }else{
            $("#parking_error").html("");
        }
		
        if(kitchen == ""){
            $("#kitchen_error").html("Please enter kitchen");
            flag = false;
        }else{
            $("#kitchen_error").html("");
        }
		
        if(image_1 == ""){
            $("#pro_1_error").html("Please enter image ");
            flag = false;
        }else{
            $("#pro_1_error").html("");
        }
		
        if(image_2 == ""){
            $("#pro_2_error").html("Please enter image ");
            flag = false;
        }else{
            $("#pro_2_error").html("");
        }
		
		if(property_type == "Select Property Type"){
            $("#property_type_error").html("Please select property type ");
            flag = false;
        }else{
            $("#property_type_error").html("");
        }
		
        if(near_by == "Select Near By"){
            $("#near_by_error").html("Please select near by");
            flag = false;
        }else{
            $("#near_by_error").html("");
        }
		
        if(near_by_name == ""){
            $("#near_by_name_error").html("Please select near by name");
            flag = false;
        }else{
            $("#near_by_name_error").html("");
        }
		
     
					
        if(flag){
            $.ajax({
                url: baseurl+"welcome/save_edit_property",
                data:{
                    title:title, 
                    description:description, 
                    price:price, 
                    address:address,
                    bedroom:bedroom, 
                    living_room:living_room, 
                    parking:parking, 
                    kitchen:kitchen, 
                    image_1:image_1,
                    image_2:image_2,
					image_3:image_3,
					image_4:image_4,
					user_id:user_id,
					property_id:property_id,
					property_type:property_type,
					near_by:near_by,
					near_by_name:near_by_name,
					offer_details:offer_details,
					rent_terms:rent_terms,
					monthly_rent_min:monthly_rent_min, monthly_rent_max:monthly_rent_max, furnished:furnished, luxury_unit:luxury_unit, available_as_of:available_as_of, sublease:sublease, kitchen_app:kitchen_app, laundry_app:laundry_app, is_sold:is_sold, sold_date:sold_date
                },
                type:'post',
                dataType: 'json',
                success:function(response){
                    if(response){
						alert("Property details are successfully updated");
                        window.location.href = baseurl+"dashboard/";
                    }
                }
	
            });
        }else{
            return false;
        }
					
    });
				
});
 
