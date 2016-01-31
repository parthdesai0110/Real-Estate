<?php
$this->load->view('common/header');
?>
<script src="<?php echo base_url(); ?>js/jquery.uploadifive-v1.0.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/uploadifive.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom/add_property.js"></script>
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
				<li><a class="active" href="<?php echo base_url(); ?>add_property">Add Property</a></li>
				<li><a href="<?php echo base_url(); ?>account_details">Account Details</a></li>
				<li><a href="<?php echo base_url(); ?>favourite">My Favourite</a></li>
				<li><a href="<?php echo base_url(); ?>logout">Log Out</a></li>
			</ul>
		</div>
	</div>
	<div style="float:left; width: 40%;">
	<div id="contact_table">
					<span class="error" id="title_error"></span>
					<input type="text" class="form-control" id="title" placeholder="Title" name="title">
					<input type="hidden" class="form-control" id="user_id" placeholder="Title" name="user_id" value="<?php echo $user_id; ?>">
					<span class="error" id="description_error"></span>
					<textarea style="margin-bottom: 20px;" rows="6" class="form-control" id="description" placeholder="Description" name="form_message"></textarea>
					<span class="error" id="price_error"></span>
					<input type="text" class="form-control" id="price" placeholder="Price" name="form_price">
					<span class="error" id="address_error"></span>
					<textarea style="margin-bottom: 20px;" rows="6" class="form-control" id="address" placeholder="Address" name="form_message"></textarea>
					<span class="error" id="bedroom_error"></span>
					<input type="text" class="form-control" id="bedroom" placeholder="Bedroom" name="form_bedroom">
					<span class="error" id="living_room_error"></span>
					<input type="text" class="form-control" id="living_room" placeholder="living_room" name="form_living_room">
					<span class="error" id="parking_error"></span>
					<input type="text" class="form-control" id="parking" placeholder="Parking" name="form_phone">
					
					<span class="error" id="kitchen_error"></span>
					<input type="text" id="kitchen" class="form-control" placeholder="kitchen" name="form_name">
					
					<div style="padding: 10px; border: 1px solid #ccc; margin-bottom: 20px;">
					<label>Rent Terms :: </label>
					<span class="error" id="rent_terms_error"></span>
					<Input type = 'Radio' class="radio_class" id="yearly" Name ='rent_terms' value= 'yearly'><label for="yearly" class="agent_class">Yearly</label>
					<Input type = 'Radio' id="short_term" style="margin-left: 20px;" class="radio_class" Name ='rent_terms' value= 'short_term'><label for="short_term" class="agent_class">Short Term</label>
					</div>
					
					<div style="padding: 10px; border: 1px solid #ccc; margin-bottom: 20px;">
					<label>Monthly Rent</label>
					<input type="text" id="monthly_rent_min" class="form-control" placeholder="Monthly Rent Min" name="form_name">
					<input type="text" id="monthly_rent_max" class="form-control" placeholder="Monthly Rent Max" name="form_name">
					</div>
					
					<div style="padding: 10px; border: 1px solid #ccc; margin-bottom: 20px;">
					<label>Furnished :: </label>
					<span class="error" id="furnished_error"></span>
					<Input type = 'Radio' class="radio_class" id="furnished_yes" Name ='furnished' value= 'yes'><label for="furnished_yes" class="agent_class">Yes</label>
					<Input type = 'Radio' id="furnished_no" style="margin-left: 20px;" class="radio_class" Name ='furnished' value= 'no'><label for="furnished_no" class="agent_class">No</label>
					</div>
					
					<div style="padding: 10px; border: 1px solid #ccc; margin-bottom: 20px;">
					<label>Luxury Unit :: </label>
					<span class="error" id="luxury_unit_error"></span>
					<Input type = 'Radio' class="radio_class" id="luxury_unit_yes" Name ='luxury_unit' value= 'yes'><label for="luxury_unit_yes" class="agent_class">Yes</label>
					<Input type = 'Radio' id="luxury_unit_no" style="margin-left: 20px;" class="radio_class" Name ='luxury_unit' value= 'no'><label for="luxury_unit_no" class="agent_class">No</label>
					</div>
					
					
					<input type="text" id="available_as_of" class="form-control" placeholder="Available As Of" name="available_as_of">
					
					<div style="padding: 10px; border: 1px solid #ccc; margin-bottom: 20px;">
					<label>Sublease :: </label>
					<span class="error" id="sublease_error"></span>
					<Input type = 'Radio' class="radio_class" id="sublease_yes" Name ='sublease' value= 'yes'><label for="sublease_yes" class="agent_class">Yes</label>
					<Input type = 'Radio' id="sublease_no" style="margin-left: 20px;" class="radio_class" Name ='sublease' value= 'no'><label for="sublease_no" class="agent_class">No</label>
					</div>
					
					
					<div style="padding: 10px; border: 1px solid #ccc; margin-bottom: 20px;">
					<label>Kitchen :: </label>
					<span class="error" id="sublease_error"></span>
					<Input type = 'checkbox' class="radio_class" id="fridge" Name ='fridge' value= 'fridge'><label for="fridge" class="agent_class">Fridge</label>
					<Input type = 'checkbox' id="dishwasher" style="margin-left: 20px;" class="radio_class" Name ='dishwasher' value= 'dishwasher'><label for="dishwasher" class="agent_class">Dishwasher</label>
					<Input type = 'checkbox' id="microwave" style="margin-left: 20px;" class="radio_class" Name ='microwave' value= 'microwave'><label for="microwave" class="agent_class">Microwave</label><br/>
					<Input type = 'checkbox' id="stove" style="margin-left: 20px;" class="radio_class" Name ='stove' value= 'stove'><label for="stove" class="agent_class">Stove</label>
					<Input type = 'checkbox' id="garbage" style="margin-left: 20px;" class="radio_class" Name ='garbage' value= 'garbage'><label for="garbage" class="agent_class">Garbage Disposal</label>
					</div>
					
					
					<div style="padding: 10px; border: 1px solid #ccc; margin-bottom: 20px;">
					<label>Laundry :: </label>
					<span class="error" id="laundry_error"></span>
					<Input type = 'checkbox' class="radio_class" id="washer" Name ='washer' value= 'washer'><label for="washer" class="agent_class">washer</label>
					<Input type = 'checkbox' id="dryer" style="margin-left: 20px;" class="radio_class" Name ='dryer' value= 'dryer'><label for="dryer" class="agent_class">Dryer</label>
					<Input type = 'checkbox' id="in_premises" style="margin-left: 20px;" class="radio_class" Name ='in_premises' value= 'in_premises'><label for="in_premises" class="agent_class">In Premises</label><br/>
					<Input type = 'checkbox' id="near_premises" style="margin-left: 20px;" class="radio_class" Name ='near_premises' value= 'near_premises'><label for="near_premises" class="agent_class">Near Premises</label>
					</div>
					
					
					
					
					<span class="error" id="property_type_error"></span>
					<select class="form-control" type="property_type" id="property_type">
						<option>Select Property Type</option>
						<option value="Property">Property</option>
						<option value="Apartment">Apartment</option>
						<option value="Building">Building</option>
						<option value="Office Space">Office Space</option>
					</select>
					<span class="error" id="near_by_error"></span>
					<select class="form-control" type="near_by" id="near_by">
						<option>Select Near By</option>
						<option value="School">School</option>
						<option value="Shoping Center">Shoping Center</option>
						<option value="Hospital">Hospital</option>
						<option value="Metro">Metro</option>
						<option value="Super Market">Super Market</option>
					</select>
					<span class="error" id="near_by_name_error"></span>
					<input type="text" id="near_by_name" class="form-control" value="" placeholder="Near By Name Location" name="form_phone">
					<span class="error" id="offer_details_error"></span>
					<input type="text" id="offer_details" class="form-control" placeholder="Offer Details" name="form_phone">
					<div id="pro_1_image" style="margin-bottom: 40px;">
						<span class="error" id="pro_1_error"></span>
						<div id="img_img_11" class="margin_bottom_15">
							<img id="preview_img_11" src='<?php echo base_url(); ?>images/preview.png' width="100" alt='Image Preview'/>
						</div>
						<input type="file" name='img_11' id='img_11' multiple="true" />
						<input type="hidden" name='hidden_img_11' id='hidden_img_11' value="" />
					</div>
					
					<div id="pro_2_image" style="margin-bottom: 40px;">
						<span class="error" id="pro_2_error"></span>
						<div id="img_img_12" class="margin_bottom_15">
							<img id="preview_img_12" src='<?php echo base_url(); ?>images/preview.png' width="100" alt='Image Preview'/>
						</div>
						<input type="file" name='img_12' id='img_12' multiple="true" />
						<input type="hidden" name='hidden_img_12' id='hidden_img_12' value="" />
					</div>
					<div id="pro_3_image" style="margin-bottom: 40px;">
						<span class="error" id="pro_3_error"></span>
						<div id="img_img_13" class="margin_bottom_15">
							<img id="preview_img_13" src='<?php echo base_url(); ?>images/preview.png' width="100" alt='Image Preview'/>
						</div>
						<input type="file" name='img_13' id='img_13' multiple="true" />
						<input type="hidden" name='hidden_img_13' id='hidden_img_13' value="" />
					</div>
					<div id="pro_4_image" style="margin-bottom: 40px;">
						<span class="error" id="pro_4_error"></span>
						<div id="img_img_14" class="margin_bottom_15">
							<img id="preview_img_14" src='<?php echo base_url(); ?>images/preview.png' width="100" alt='Image Preview'/>
						</div>
						<input type="file" name='img_14' id='img_14' multiple="true" />
						<input type="hidden" name='hidden_img_14' id='hidden_img_14' value="" />
					</div>

					<button type="submit" id="account_register" class="btn btn-success" name="Submit">Register</button>
				</div>
	</div>
	<div class="clear"></div>
  
 
</div>
</div>
</div>

<?php
$this->load->view('common/footer');
?>