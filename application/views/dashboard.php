<?php
$this->load->view('common/header');
?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="<?php echo base_url(); ?>">Home</a> / Dashboard</span>
    <h2>Dashboard</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">
<div class="row">
	<div class="col-lg-3 col-sm-4 hidden-xs">
		<div id="cssmenu">
			<ul>
				<li><a class="active" href="<?php echo base_url(); ?>dashboard">Manage Property</a></li>
				<li><a href="<?php echo base_url(); ?>add_property">Add Property</a></li>
				<li><a href="<?php echo base_url(); ?>account_details">Account Details</a></li>
				<li><a href="<?php echo base_url(); ?>favourite">My Favourite</a></li>
				<li><a href="<?php echo base_url(); ?>logout">Log Out</a></li>
			</ul>
		</div>
	</div>
	<div class="col-lg-9 col-sm-8 ">
	<div class="row">
		<?php foreach($property as $property_data){ ?>
     <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url(); ?>uploads/<?php echo $property_data['image_1']; ?>" class="img-responsive" alt="properties"/>
          
        </div>
        <h4><a href="property-detail.php"><?php echo $property_data['title']; ?></a></h4>
        <p class="price">Price: $<?php echo $property_data['price']; ?></p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $property_data['bedroom']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $property_data['living_room']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php echo $property_data['parking']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $property_data['kitchen']; ?></span> </div>
        <a class="btn btn-primary" href="<?php echo base_url(); ?>property_edit/<?php echo $property_data['id']; ?>">Edit Details</a>
      </div>
      </div>
      <!-- properties -->
	<?php } ?>
	
	</div>
	</div>
	<div class="clear"></div>
  
 
</div>
</div>
</div>

<?php
$this->load->view('common/footer');
?>