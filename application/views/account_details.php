<?php
$this->load->view('common/header');
?>
<script src="<?php echo base_url(); ?>js/jquery.uploadifive-v1.0.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/uploadifive.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom/account_edit.js"></script>
<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="<?php echo base_url(); ?>">Home</a> / Dashboard</span>
    <h2>Dashboard</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row">
	<div style="float:left; width: 30%; padding-right: 5%;">
		<div id="cssmenu">
			<ul>
				<li><a href="<?php echo base_url(); ?>dashboard">Manage Property</a></li>
				<li><a  href="<?php echo base_url(); ?>add_property">Add Property</a></li>
				<li><a class="active" href="<?php echo base_url(); ?>account_details">Account Details</a></li>
				<li><a href="<?php echo base_url(); ?>favourite">My Favourite</a></li>
				<li><a href="<?php echo base_url(); ?>logout">Log Out</a></li>
			</ul>
		</div>
	</div>
	<div style="float:left; width: 40%;">
	<div id="contact_table">
					<span class="error" id="agent_owner_error"></span>
					<Input type = 'Radio' class="radio_class" id="agent" <?php if($user["agent_owner"] == "agent"){ ?>checked="checked"<?php } ?> Name ='agent_owner' value= 'agent'><label for="agent" class="agent_class">Agent</label>
					<Input type = 'Radio' id="owner" style="margin-left: 20px;" <?php if($user["agent_owner"] == "owner"){ ?>checked="checked"<?php } ?> class="radio_class" Name ='agent_owner' value= 'owner'><label for="owner" class="agent_class">Owner</label>
					<span class="error" id="fullname_error"></span>
					<input type="hidden" class="form-control" id="hidden_id" value="<?php echo $user["id"]; ?>"  name="hidden_id">
					<input type="text" class="form-control" id="fullname" value="<?php echo $user["fullname"]; ?>" placeholder="Full Name" name="form_name">
					<span class="error" id="email_error"></span>
					<input type="text" class="form-control" id="email" placeholder="Email" value="<?php echo $user["email"]; ?>" name="form_email">
					<span class="error" id="username_error"></span>
					<input type="text" class="form-control" id="username" value="<?php echo $user["username"]; ?>" placeholder="User Name" name="form_email">
					
					
					<span class="error" id="address_error"></span>
					<textarea rows="6" class="form-control" id="address"  placeholder="Address" name="form_message"><?php echo $user["address"]; ?></textarea>
					<span class="error" id="city_error"></span>
					<input type="text" id="city" class="form-control" value="<?php echo $user["city"]; ?>" placeholder="City" name="form_name">
					<span class="error" id="postal_code_error"></span>
					<input type="text" id="postal_code" value="<?php echo $user["postal_code"]; ?>" class="form-control" placeholder="Postal Code" name="form_email">
					<span class="error" id="province_error"></span>
					<input type="text" id="province" class="form-control" value="<?php echo $user["province"]; ?>" placeholder="Province" name="form_phone">
					<span class="error" id="country_error"></span>
					<input type="text" id="country" value="<?php echo $user["country"]; ?>" class="form-control" placeholder="Country" name="form_phone">
					<span class="error" id="contact_no_error"></span>
					<input type="text" id="contact_no" class="form-control" value="<?php echo $user["contact_no"]; ?>" placeholder="Contact" name="form_phone">
					<textarea rows="6" class="form-control" id="description" placeholder="description" name="form_message"><?php echo $user["description"]; ?></textarea>
					<div id="agent_pro_image" style="margin-bottom: 40px;">
						<span class="error" id="profile_error"></span>
						<div id="img_img_11" class="margin_bottom_15">
						<?php if($user["image"] == ""){ ?>
							<img id="preview_img_11" src='<?php echo base_url(); ?>images/preview.png' width="100" alt='Image Preview'/>
						<?php }else{ ?>
							<img id="preview_img_11" src='<?php echo base_url(); ?>uploads/<?php echo $user["image"]; ?>' width="100" alt='Image Preview'/>
						<?php } ?>
						</div>
						<input type="file" name='img_11' id='img_11' multiple="true" />
						<input type="hidden" name='hidden_img_11' id='hidden_img_11' value="<?php echo $user["image"]; ?>" />
					</div>

					<button type="submit" id="account_register" class="btn btn-success" name="Submit">Update Account Details</button>
				</div>
	</div>
	<div class="clear"></div>
  
 
</div>
</div>
</div>

<?php
$this->load->view('common/footer');
?>