<!--
	This application was created by Aman Agarwal....
	As a practice to codeigniter and bootstrap.....
	Use this as you want.....
-->

<html>
<head>
	<title>
		<?php echo $title; ?>
	</title>
	<?php echo  link_tag($this->link1);?>
	<?php echo  link_tag($this->link2);?>
	<?php echo  link_tag($this->link3);?>
	<script type="text/javascript" href="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" href="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap_master.js"></script>
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <?php echo anchor('Blog' ,"BlogExpress" , "class='navbar-brand glyphicon glyphicon-fire'");?>
      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
		<li><?php echo anchor('Blog/create_blogs' ," Create-Blogs" , "class='glyphicon glyphicon-comment'");?></li>
		<li><?php echo anchor('Blog' ," View-All-Blogs", "class='glyphicon glyphicon-cloud'");?></li>
		<li><?php echo anchor('User' ," Login/Register", "class='glyphicon glyphicon-log-in'");?></li>
	 </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
