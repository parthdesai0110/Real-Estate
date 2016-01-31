<?php
$this->load->view('common/header');
?>
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom/price_sort.js"></script>
<script type="text/javascript">
                var baseurl = "<?php echo base_url(); ?>";
    </script>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="<?php echo base_url(); ?>">Home</a> / Property</span>
    <h2>Properties</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
  <form action="<?php echo base_url(); ?>search_property" method="post">
    <select name="search_text" id="search_text" class="form-control" placeholder="Search of Properties Region">
			  <option>Search of Properties Region</option>
			  <?php foreach($region as $region_data){ ?>
			  <option><?php echo $region_data['name']; ?></option>
			  <?php } ?>
		  </select>
		  <select class="form-control" name="near_by" id="near_by">
			<option>Search Near By</option>
			<option value="School">School</option>
			<option value="Shoping Center">Shoping Center</option>
			<option value="Hospital">Hospital</option>
			<option value="Metro">Metro</option>
			<option value="Super Market">Super Market</option>
		</select>
    <div class="row">
            <div class="col-lg-12">
              <select name="search_price" id="search_price" class="form-control">
                <option>Price</option>
                <option value="1">$150,000 - $200,000</option>
                <option value="2">$200,000 - $250,000</option>
                <option value="3">$250,000 - $300,000</option>
                <option value="4">$300,000 - above</option>
              </select>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-12">
              <select name="search_property_type" class="form-control">
		<option>Select property Type</option>
                <option>Property Type</option>
                <option>Apartment</option>
                <option>Building</option>
                <option>Office Space</option>
              </select>
              </div>
          </div>
		  <div class="col-lg-12">
			<input type="checkbox" name="offer" id="offer_property" value="1" /><label style="font-size: 13px; margin-left: 5px;" for="offer_property">Offer Property</label>
		  </div>
          <input class="btn btn-success" type="submit" value="Find Now">
</form>
  </div>



<div class="hot-properties hidden-xs">
<h4>Offers Properties</h4>

<?php foreach($offer_property as $offer_property_data){ ?>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="<?php echo base_url(); ?>uploads/<?php echo $offer_property_data['image_1']; ?>" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="<?php echo base_url(); ?>property_detail/<?php echo $offer_property_data['id']; ?>"><?php echo $offer_property_data['title']; ?></a></h5>
                  <p class="price">$<?php echo $offer_property_data['price']; ?></p> </div>
              </div>
<?php } ?>  

</div>


</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
<div class="pull-left result">Showing: <?php echo $property_count; ?> of <?php echo $property_count; ?> </div>
  <div class="pull-right">

<select class="form-control" id="price_sort">
  <option>Sort by</option>
  <option value="1">Price: Low to High</option>
  <option value="2">Price: High to Low</option>
</select>

</div>

</div>
<div class="row">
	
	<?php foreach($property as $property_data){ ?>
    
    
    
    
     <?php
        $sold_flag = true;
        if($property_data['is_sold'] == 'yes'){
				$current_date = strtotime(date('Y-m-d'));
				$s_date = explode("-",$property_data['sold_date']);
				$s_day = $s_date[2] + 15;
				$sold_date_1 =  $s_date[0]."-".$s_date[1]."-".$s_day;
				$soldDate = strtotime($sold_date_1);
				if($soldDate < $current_date){
                                    $sold_flag = FALSE;
                                }
        }
			?>
    
    <?php if($sold_flag){ ?>
     <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url(); ?>uploads/<?php echo $property_data['image_1']; ?>" class="img-responsive" alt="properties"/>
		
		
		<?php if($property_data['is_sold'] == 'yes'){ ?>
			  <div class="status sold">Sold</div>
		<?php }else{ ?>
		
		<?php if($property_data['is_sold'] == 'no'){ ?>
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
		<?php } ?>
		
		<?php } ?>	
			
			
			
			
        </div>
        <h4><a href="<?php echo base_url(); ?>property_detail/<?php echo $property_data['id']; ?>"><?php echo $property_data['title']; ?></a></h4>
        <p class="price">Price: $<?php echo $property_data['price']; ?></p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $property_data['bedroom']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $property_data['living_room']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php echo $property_data['parking']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $property_data['kitchen']; ?></span> </div>
        <a class="btn btn-primary" href="<?php echo base_url(); ?>property_detail/<?php echo $property_data['id']; ?>">View Details</a>
      </div>
      </div>
     
     
     
     
     
      <!-- properties -->
	<?php } ?>
	<?php } ?>
	  
	  
     <!-- <div class="center">
<ul class="pagination">
          <li><a href="#">«</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">»</a></li>
        </ul>
</div>  -->

</div>
</div>
</div>
</div>
</div>

<?php
$this->load->view('common/footer');
?>