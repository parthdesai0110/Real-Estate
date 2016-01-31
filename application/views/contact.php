<?php
$this->load->view('common/header');
?>
<script type="text/javascript">
                var baseurl = "<?php echo base_url(); ?>";
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom/contact.js"></script>

<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Contact Us</span>
    <h2>Contact Us</h2>
</div>
</div>
<!-- banner -->

<div class="container">
<div class="spacer">
<div class="row contact">
    <div class="col-lg-6 col-sm-6 ">
		<div id="contact_table">
			<span id="username_error" class="error"></span>
			<input type="text" id="username" class="form-control" placeholder="Full Name">
			<span id="email_error" class="error"></span>
			<input type="text" id="email" class="form-control" placeholder="Email Address">
			<span id="telephone_error" class="error"></span>
			<input type="text" id="telephone" class="form-control" placeholder="Contact Number">
			<span id="details_error" class="error"></span>
			<textarea rows="6" id="details" class="form-control" placeholder="Message"></textarea>
			<button type="submit" id="contact_submit" class="btn btn-success" name="Submit">Send Message</button>
		</div>
		<div id="success_msg" style="display: none;">Thank you for connecting us. We will contact with you as soon as possible.</div>
	</div>
  <div class="col-lg-6 col-sm-6 ">
  <div class="well"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2796.6447156081185!2d-73.57886718650819!3d45.497098796769606!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a6a636dd639%3A0x9e85cac6415827f0!2sConcordia+University!5e0!3m2!1sen!2sca!4v1423607044385" width="800" height="400" frameborder="0" style="border:1px solid; border-radius: 25px;"></iframe></div>
  </div>
</div>
</div>
</div>

<?php
$this->load->view('common/footer');
?>