<?php
$this->load->view('common/header');
?>
<script src="<?php echo base_url(); ?>js/jquery.uploadifive-v1.0.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/uploadifive.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom/register.js"></script>
<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>

<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="<?php echo base_url(); ?>">Home</a> / Register</span>
    <h2>Register</h2>
</div>
</div>
<!-- banner -->

<div class="container">
	<div class="spacer">
		<div class="row register">
			<div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
				<div id="contact_table">
					<span class="error" id="agent_owner_error"></span>
					<Input type = 'Radio' class="radio_class" id="agent" Name ='agent_owner' value= 'agent'><label for="agent" class="agent_class">Agent</label>
					<Input type = 'Radio' id="owner" style="margin-left: 20px;" class="radio_class" Name ='agent_owner' value= 'owner'><label for="owner" class="agent_class">Owner</label>
					<span class="error" id="fullname_error"></span>
					<input type="text" class="form-control" id="fullname" placeholder="Full Name" name="form_name">
					<span class="error" id="email_error"></span>
					<input type="text" class="form-control" id="email" placeholder="Email" name="form_email">
					<span class="error" id="username_error"></span>
					<input type="text" class="form-control" id="username" placeholder="User Name" name="form_email">
					<span class="error" id="password_error"></span>
					<input type="password" class="form-control" id="password" placeholder="Password" name="form_phone">
					<span class="error" id="re_password_error"></span>
					<input type="password" class="form-control" id="re_password" placeholder="Confirm Password" name="form_phone">
					<span class="error" id="address_error"></span>
					<textarea style="margin-bottom: 20px;" rows="6" class="form-control" id="address" placeholder="Address" name="form_message"></textarea>
					<span class="error" id="city_error"></span>
					<input type="text" id="city" class="form-control" placeholder="City" name="form_name">
					<span class="error" id="postal_code_error"></span>
					<input type="text" id="postal_code" class="form-control" placeholder="Postal Code" name="form_email">
					<span class="error" id="province_error"></span>
					<input type="text" id="province" class="form-control" placeholder="Province" name="form_phone">
					<span class="error" id="country_error"></span>
					<input type="text" id="country" class="form-control" placeholder="Country" name="form_phone">
					<span class="error" id="contact_no_error"></span>
					<input type="text" id="contact_no" class="form-control" placeholder="Contact" name="form_phone">
					<textarea style="margin-bottom: 20px;" rows="6" class="form-control" id="description" placeholder="description" name="form_message"></textarea>
					<div id="agent_pro_image" style="margin-bottom: 40px;">
						<span class="error" id="profile_error"></span>
						<div id="img_img_11" class="margin_bottom_15">
							<img id="preview_img_11" src='<?php echo base_url(); ?>images/preview.png' width="100" alt='Image Preview'/>
						</div>
						<input type="file" name='img_11' id='img_11' multiple="true" />
						<input type="hidden" name='hidden_img_11' id='hidden_img_11' value="" />
					</div>

					<button type="submit" id="account_register" class="btn btn-success" name="Submit">Register</button>
				</div>
				<div id="success_msg" style="display:none;">Thank you for connecting us. We will contact with you as soon as possible.</div>
				
			</div>
		</div>
	</div>
</div>

<?php
$this->load->view('common/footer');
?>