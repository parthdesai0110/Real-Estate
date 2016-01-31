<?php
$this->load->view('common/header');
?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="<?php echo base_url(); ?>">Home</a> / Agents</span>
    <h2>Agents</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer agents properties-listing">

<div class="row">
  <div class="col-lg-8  col-lg-offset-2 col-sm-12">
	  <!-- agents -->
        <div class="row">
			<div class="col-lg-2 col-sm-2 ">
				<a href="#"><img src="<?php echo base_url(); ?>uploads/<?php echo$agent['image'];  ?>" class="img-responsive"  alt="agent name"></a>
			</div>
			<div class="col-lg-7 col-sm-7 ">
				<h4><?php echo$agent['fullname'];  ?></h4>
				<p><?php echo$agent['description'];  ?></p>
			</div>
			<div class="col-lg-3 col-sm-3 ">
				<span class="glyphicon glyphicon-envelope"></span>
				<a href="mailto:<?php echo$agent['email'];  ?>"><?php echo$agent['email'];  ?></a><br>
				<span class="glyphicon glyphicon-earphone"></span> <?php echo$agent['contact_no'];  ?>
			</div>
        </div>
      <!-- agents -->
	  
	  <div class="row">
	<h2>Agents Property</h2>
	<?php foreach($property as $property_data){ ?>
     <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url(); ?>uploads/<?php echo $property_data['image_1']; ?>" class="img-responsive" alt="properties"/>
          <?php
			$current_date = strtotime(date('Y-m-d'));
			$p_date = explode("-",$property_data['added_date']);
			$p_day = $p_date[2] + 3;
			$new_date_1 =  $p_date[0]."-".$p_date[1]."-".$p_day;
			$newDate = strtotime($new_date_1);
			
			if($newDate > $current_date){
		?>
		<?php if($property_data['offer_details'] != ""){ ?>
          <div class="status new">Offer</div>
			<?php } } ?>
        
        </div>
        <h4><a href="property-detail.php"><?php echo $property_data['title']; ?></a></h4>
        <p class="price">Price: $<?php echo $property_data['price']; ?></p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $property_data['bedroom']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $property_data['living_room']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php echo $property_data['parking']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $property_data['kitchen']; ?></span> </div>
        <a class="btn btn-primary" href="<?php echo base_url(); ?>property_detail/<?php echo $property_data['id']; ?>">View Details</a>
      </div>
      </div>
      <!-- properties -->
	<?php } ?>

</div>
  </div>
</div>


</div>
</div>

<?php
$this->load->view('common/footer');
?>