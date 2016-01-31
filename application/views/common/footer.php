<script type="text/javascript">
                var baseurl = "<?php echo base_url(); ?>";
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom/newsletter.js"></script>
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-3">
				   <h4>Information</h4>
				   <ul class="row">
				<li class="col-lg-12 col-sm-12 col-xs-3"><a href="<?php echo base_url(); ?>about">About</a></li>
				<li class="col-lg-12 col-sm-12 col-xs-3"><a href="<?php echo base_url(); ?>agents">Agents</a></li>         
				<li class="col-lg-12 col-sm-12 col-xs-3"><a href="<?php echo base_url(); ?>contact">Contact</a></li>
			  </ul>
			</div>
			
			<div class="col-lg-3 col-sm-3">
					<h4>Newsletter</h4>
					<div id="newsletter_table">
						<p>Get notified about the latest properties in our marketplace.</p>
						<form class="form-inline" role="form">
								<span id="newsletter_email_error" class="error"></span>
								<input type="text" id="newsletter_email" placeholder="Enter Your email address" class="form-control">
								<button class="btn btn-success" id="notify_me" type="button">Notify Me!</button>
						</form>
					</div>
					<div id="newletter_success_msg" style="display:none;">Thank you for connecting us.</div>
			</div>
			
			<div class="col-lg-3 col-sm-3">
					<h4>Follow us</h4>
					<a href="#"><img src="<?php echo base_url(); ?>images/facebook.png" alt="facebook"></a>
					<a href="#"><img src="<?php echo base_url(); ?>images/twitter.png" alt="twitter"></a>
					<a href="#"><img src="<?php echo base_url(); ?>images/linkedin.png" alt="linkedin"></a>
					<a href="#"><img src="<?php echo base_url(); ?>images/instagram.png" alt="instagram"></a>
			</div>

			 <div class="col-lg-3 col-sm-3">
					<h4>Contact us</h4>
					<p>
						<b>Shark Realestate Inc.</b><br>
						<span class="glyphicon glyphicon-map-marker"></span> Concordia University
						<span class="glyphicon glyphicon-envelope"></span> parth8539@gmail.com  <br>
						<span class="glyphicon glyphicon-earphone"></span> (123) 456 7892 
					</p>
			</div>
		</div>
	<p class="copyright">Concordia University Project INSE6260 Software Quality Assurance. Copyright 2015. All rights reserved.	</p>
	</div>
</div>




<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
        <span id="login_error" class="error"></span>
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">User Id</label>
          <input type="email" class="form-control" id="login_username" placeholder="Enter User Id">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="login_password" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" id="submit_login" class="btn btn-success">Sign in</button>
                
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='<?php echo base_url(); ?>register'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->



</body>
</html>



