$(document).ready(function(){
	
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
	
	$('input:radio[name="agent_owner"]').change(function(){
		if($(this).val() == 'agent'){
		   $("#agent_pro_image").show();
		}else{
			$("#agent_pro_image").hide();
		}
	});

	 
    $('#account_register').click(function(){
												   
        var fullname = $("#fullname").val();
        var email = $("#email").val();
        var username = $("#username").val();
        var password = $("#password").val();
        var re_password = $("#re_password").val();
        var address = $("#address").val();
        var city = $("#city").val();
        var postal_code = $("#postal_code").val();
        var province = $("#province").val();
        var country = $("#country").val();
        var contact_no = $("#contact_no").val();
        var description = $("#description").val();
        var hidden_id = $("#hidden_id").val();
        var profile = $("#hidden_img_11").val();
        var agent_owner = $("input[name=agent_owner]:checked").val();
					
        var flag = true;
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(email == "" || !regex.test(email)){
            $("#email_error").html("Please enter valid email id");
            flag = false;
        }else{
            $("#email_error").html("");
        }
        
        if(username == ""){
            $("#username_error").html("Please enter username");
            flag = false;
        }else{
            $("#username_error").html("");
        }
        
        if(password == ""){
            $("#password_error").html("Please enter password");
            flag = false;
        }else{
            $("#password_error").html("");
        }
        
        if(re_password == password){
            $("#re_password_error").html("");
        }else{
            $("#re_password_error").html("Please enter same password");
            flag = false;
        }
					
        if(re_password == ""){
            $("#re_password_error").html("Please enter re-password");
            flag = false;
        }else{
            $("#re_password_error").html("");
        }
					
        if(postal_code == ""){
            $("#postal_code_error").html("Please enter postal code");
            flag = false;
        }else{
            $("#postal_code_error").html("");
        }
					
        if(province == ""){
            $("#province_error").html("Please enter province");
            flag = false;
        }else{
            $("#province_error").html("");
        }
        if(country == ""){
            $("#country_error").html("Please enter country");
            flag = false;
        }else{
            $("#country_error").html("");
        }
        if(contact_no == ""){
            $("#contact_no_error").html("Please enter contact no");
            flag = false;
        }else{
            $("#contact_error").html("");
        }
		
        if(profile == ""){
			if(agent_owner == "agent"){
				$("#profile_error").html("Please enter profile image");
				flag = false;
			}else{
				$("#profile_error").html("");
			}
        }else{
			$("#profile_error").html("");
        }
					
        if(flag){
            $.ajax({
                url: baseurl+"welcome/edit_user_info",
                data:{
                    fullname:fullname, 
                    email:email, 
                    username:username,
                    password:password, 
                    address:address, 
                    city:city, 
                    postal_code:postal_code, 
                    province:province,
                    country:country, 
                    contact_no:contact_no,
                    agent_owner:agent_owner,
					description:description,
					profile:profile,
					hidden_id:hidden_id
                },
                type:'post',
                dataType: 'json',
                success:function(response){
                    if(response){
                        alert("Account details are successfully updated");
                    }
                }
	
            });
        }else{
            return false;
        }
					
    });
				
});
 
