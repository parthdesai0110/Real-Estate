<?php
$this->load->view('common/header');
?>

<div class="">
    

        <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
        
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <h2><a href="#">2 Bed Rooms and 1 Dinning Room Apartment on Sale</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Montreal, QC, Canada</p>
              <p>
              Live your life at your own place.</p>
              <cite>$ 10,000,000</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <h2><a href="#">2 Bed Rooms and 1 Dinning Room Apartment on Sale</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Montreal, QC, Canada</p>
              <p>Explore Homes like never Before</p>
              <cite>$ 20,000,000</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <h2><a href="#">2 Bed Rooms and 1 Dinning Room Apartment on Sale</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Montreal, QC, Canada</p>
              <p>Get Your Property.</p>
              <cite>$ 30,000,000</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4"></div>
              <h2><a href="#">2 Bed Rooms and 1 Dinning Room Apartment on Sale</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Montreal, QC, Canada</p>
              <p>Good place to Buy and Sell your Property</p>
              <cite>$ 40,000,000</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5"></div>
              <h2><a href="#">2 Bed Rooms and 1 Dinning Room Apartment on Sale</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Montreal, QC, Canada</p>
              <p>Find Your Property as per your Requirement.</p>
              <cite>$ 50,000,000</cite>
              </blockquote>
            </div>
          </div>
        </div><!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>



<div class="banner-search">
  <div class="container"> 
    <!-- banner -->
    <h3>Buy, Sell & Rent</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
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
            <div class="col-lg-3 col-sm-4">
              <select name="search_price" id="search_price" class="form-control">
                <option>Price</option>
                <option value="1">$150,000 - $200,000</option>
                <option value="2">$200,000 - $250,000</option>
                <option value="3">$250,000 - $300,000</option>
                <option value="4">$300,000 - above</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
            <select name="search_property_type" id="search_property_type" class="form-control">
				<option>Select property Type</option>
                <option>Property</option>
                <option>Apartment</option>
                <option>Building</option>
                <option>Office Space</option>
              </select>
              </div>
              <div class="col-lg-3 col-sm-4">
              <input type="checkbox" name="offer" id="offer_property" value="1" /><label style="font-size: 13px; margin-left: 5px;" for="offer_property">Offer Property</label>
			  </div>
			  <div class="col-lg-3 col-sm-4">
              <input class="btn btn-success" type="submit" value="Find Now">
              </div>
          </div>
          </form>
          
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>Join now and get updated with all the property deals.</p>
          <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Login</button>        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="<?php echo base_url(); ?>all_property" class="pull-right viewall">View All Listing</a>
    <h2>Featured Properties</h2>
    <div id="owl-example" class="owl-carousel">
	<!-- <div class="status sold">Sold</div>
	 <div class="status new">New</div> -->
	
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
        
        
        <?php } ?>
        
	<?php } ?>
	  
    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
        <h3>About Us</h3>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="<?php echo base_url(); ?>about">Learn More</a></p>
      
      </div>
      <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
        <h3>Offer Properties</h3>
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
		  <?php $i =0; ?>
		  <?php foreach($offer_property as $offer_property_data){ ?>
            <div class="item <?php if($i == '0'){ ?>active<?php } ?>">
              <div class="row">
                <div class="col-lg-4"><img src="<?php echo base_url(); ?>uploads/<?php echo $offer_property_data['image_1']; ?>" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="<?php echo base_url(); ?>property_detail/<?php echo $offer_property_data['id']; ?>"><?php echo $offer_property_data['title']; ?></a></h5>
                  <p class="price">$<?php echo $offer_property_data['price']; ?></p>
                  <a href="<?php echo base_url(); ?>property_detail/<?php echo $offer_property_data['id']; ?>" class="more">More Detail</a> </div>
              </div>
            </div>
			<?php $i++; ?>
		  <?php } ?>
			
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('common/footer');
?>













