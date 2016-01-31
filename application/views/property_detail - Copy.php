<?php
$this->load->view('common/header');
?>

<script type="text/javascript" src="<?php echo base_url(); ?>js/custom/favourite.js"></script>
<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
	
  var mapProp = {
    center:new google.maps.LatLng(<?php echo $property['latitude']; ?>,<?php echo $property['logitude']; ?>),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="<?php echo base_url(); ?>">Home</a> / Buy</span>
    <h2>Buy</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 hidden-xs">

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



<div class="advertisement">
  <h4>Advertisements</h4>
  <img src="<?php echo base_url(); ?>images/advertisements.jpg" class="img-responsive" alt="advertisement">

</div>

</div>

<div class="col-lg-9 col-sm-8 ">

<h2><?php echo $property['title']; ?></h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators hidden-xs">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
      </ol>
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
          <img src="<?php echo base_url(); ?>uploads/<?php echo $property['image_1']; ?>" class="properties" alt="properties" />
        </div>
        <!-- #Item 1 -->

        <!-- Item 2 -->
        <div class="item">
          <img src="<?php echo base_url(); ?>uploads/<?php echo $property['image_2']; ?>" class="properties" alt="properties" />
         
        </div>
        <!-- #Item 2 -->

        <!-- Item 3 -->
         <div class="item">
          <img src="<?php echo base_url(); ?>uploads/<?php echo $property['image_3']; ?>" class="properties" alt="properties" />
        </div>
        <!-- #Item 3 -->

        <!-- Item 4 -->
        <div class="item ">
          <img src="<?php echo base_url(); ?>uploads/<?php echo $property['image_4']; ?>" class="properties" alt="properties" />
          
        </div>
        <!-- # Item 4 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->

  </div>
  



  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
  <p><?php echo $property['description']; ?></p>

  </div>
  <div><h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
<div class="well">
<div id="googleMap" style="width:100%;height:380px;"></div>
</div>
  </div>

  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<p class="price">$ <?php echo $property['price']; ?></p>
  <p class="area"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $property['address']; ?></p>
  
  <!--<div class="profile">
  <span class="glyphicon glyphicon-user"></span> Agent Details
  <p>John Parker<br>009 229 2929</p>
  </div> -->
  
</div>

    <h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
    <div class="listing-detail">
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $property['bedroom']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $property['living_room']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php echo $property['parking']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $property['kitchen']; ?></span> </div>
	
	<div>
	<style>
	<?php if($favourite_count == '1'){ ?>
	.favourite_property{
		display: none;
	}
	.unfavourite_property{
		display: block;
	}
	
	h4 span{
		color: #72b70f;
		font-size: 20px;
	}
	<?php }else{ ?>
	.favourite_property{
		display: block;
	}
	.unfavourite_property{
		display: none;
	}
	
	h4 span{
		color: #72b70f;
		font-size: 20px;
	}
	<?php } ?>
	</style>
	
	<h4>Favourite</h4> 
	<img style="cursor: pointer;" class="favourite_property" data-id="<?php echo $property['id']; ?>" width="50" height="50" src="<?php echo base_url(); ?>images/line.png" />
	
	<img style="cursor: pointer;" class="unfavourite_property" data-id="<?php echo $property['id']; ?>" width="50" height="50" src="<?php echo base_url(); ?>images/heart.png" />
	<br/>
	</div>
	
	<div>
	<?php
			$current_date = strtotime(date('Y-m-d'));
			$p_date = explode("-",$property['added_date']);
			$p_day = $p_date[2] + 3;
			$new_date_1 =  $p_date[0]."-".$p_date[1]."-".$p_day;
			$newDate = strtotime($new_date_1);
			
			if($newDate > $current_date){
		?>
		<?php if($property['offer_details'] != ""){ ?>
          <div style="padding: 10px; border:3px solid red;"><h4>Offer :: </h4><?php echo $property['offer_details']; ?></div>
			<?php } } ?>
	
	</div>
	
	<div style="text-transform: capitalize; margin-bottom: 40px;">
	<?php if($property['rent_terms'] != ""){ ?>
	<div><h4>Rent Terms :: <span><?php echo $property['rent_terms']; ?></span></h4></div>
	<?php } ?>
	<?php if($property['monthly_rent_min'] != ""){ ?>
	<div><h4>Monthly Rent Min. :: <span><?php echo $property['monthly_rent_min']; ?></span></h4></div>
	<?php } ?>
	<?php if($property['monthly_rent_max'] != ""){ ?>
	<div><h4>Monthly Rent Max. :: <span><?php echo $property['monthly_rent_max']; ?></span></h4></div>
	<?php } ?>
	<?php if($property['furnished'] != ""){ ?>
	<div><h4>Furnished :: <span><?php echo $property['furnished']; ?></span></h4></div>
	<?php } ?>
	<?php if($property['luxury_unit'] != ""){ ?>
	<div><h4>Luxury Unit :: <span><?php echo $property['luxury_unit']; ?></span></h4></div>
	<?php } ?>
	<?php if($property['available_as_of'] != "0000-00-00"){ ?>
	<div><h4>Available As Of :: <span><?php echo $property['available_as_of']; ?></span></h4></div>
	<?php } ?>
	<?php if($property['sublease'] != ""){ ?>
	<div><h4>Sublease :: <span><?php echo $property['sublease']; ?></span></h4></div>
	<?php } ?>
	<?php if($property['kitchen_app'] != ""){ ?>
	<div><h4>Kitchen Appliances :: <span><?php echo $property['kitchen_app']; ?></span></h4></div>
	<?php } ?>
	<?php if($property['laundry_app'] != ""){ ?>
	<div><h4>Laundry Appliances :: <span><?php echo $property['laundry_app']; ?></span></h4></div>
	<?php } ?>
	</div>

</div>
<div class="col-lg-12 col-sm-6 ">
<div class="enquiry">
  <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
  <form role="form">
                <input type="text" class="form-control" placeholder="Full Name"/>
                <input type="text" class="form-control" placeholder="you@yourdomain.com"/>
                <input type="text" class="form-control" placeholder="your number"/>
                <textarea rows="6" class="form-control" placeholder="Whats on your mind?"></textarea>
      <button type="submit" class="btn btn-primary" name="Submit">Send Message</button>
      </form>
 </div>         
</div>
  </div>
</div>
</div>
</div>
</div>
</div>

<?php
$this->load->view('common/footer');
?>