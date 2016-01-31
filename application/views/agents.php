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
<div class="spacer agents">

<div class="row">
  <div class="col-lg-8  col-lg-offset-2 col-sm-12">
	<?php foreach($agents as $agent){ ?>
      <!-- agents -->
        <div class="row">
			<div class="col-lg-2 col-sm-2 ">
				<a href="<?php echo base_url(); ?>single_agents/<?php echo$agent['id'];  ?>"><img src="<?php echo base_url(); ?>uploads/<?php echo$agent['image'];  ?>" class="img-responsive"  alt="agent name"></a>
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
	<?php } ?> 
  </div>
</div>


</div>
</div>

<?php
$this->load->view('common/footer');
?>