

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tambah Kamar - siKost.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/docs.css" rel="stylesheet">
	
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/application.js"></script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo base_url(); ?>"><?php echo $judul_pendek; ?></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo base_url(); ?>"><i class="icon-home icon-white"></i> Beranda</a></li>
			  <li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-comment icon-white"></i> Registrasi <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url(); ?>registrasi/user"><i class="icon-fire"></i> User</a></li>
                  <li><a href="<?php echo base_url(); ?>registrasi/pemilik"><i class="icon-asterisk"></i> Pemilik Kost</a></li>
                </ul>
              </li>
            </ul>
			<?php echo form_open('loginlogot/process','class="navbar-form pull-right"'); ?>
              <input class="span2" type="text" name="username" placeholder="Username..." value="<?php echo set_value('username'); ?>">
              <input class="span2" type="password" name="password" placeholder="Password...">
              <button type="submit" class="btn btn-primary "><i class="icon-share icon-white"></i> Log in</button>
           <?php echo form_close(); ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container">
	
	<?php if(validation_errors()) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">�</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
	
	<?php if($this->session->flashdata('result_login')) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">�</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo $this->session->flashdata('result_login'); ?>
	</div>
	<?php } ?>
    
    <div class="well">
        <h2>Tambah Kamar Kost siKost.com</h2>
	</div>

<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
      <li><a href="#profile" data-toggle="tab">Lain</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        <form id="tab" action="<?php echo base_url()?>index.php/tempatkost/tambah" method="post">
            <label>ID Kamar</label>
            <input type="text"  class="input-xlarge" name="idkamar" value="">
            <label>harga</label>
            <input type="text"  class="input-xlarge" name="harga" value="">
            <label>fasilitas[]</label>
            <input type="checkbox" class="input-xlarge" name="fasilitas[]"value="pemadam kebakaran"> Pemadam Kebakaran<br/>
			<input type="checkbox" class="input-xlarge" name="fasilitas[]"value="kamar mandi"> Kamar Mandi<br/>
			<input type="checkbox" class="input-xlarge" name="fasilitas[]"value="AC"> ac<br/>
			<input type="checkbox" class="input-xlarge" name="fasilitas[]"value="wireless internet"> Wireless Internet<br/>
			<input type="checkbox" class="input-xlarge" name="fasilitas[]"value="LAN internet"> LAN internet<br/>
			<input type="checkbox" class="input-xlarge" name="fasilitas[]"value="pusat kebugaran"> pusat Kebugaran<br/>
			<input type="checkbox" class="input-xlarge" name="fasilitas[]"value="jasa laundry"> Free Laundry		<br/>
			<input type="checkbox" class="input-xlarge" name="fasilitas[]"value="jasa cleaning service"> Cleaning Service		<br/>
			<input type="checkbox" class="input-xlarge" name="fasilitas[]"value="pemadam kebakaran"> pemadam kebakaran	<br/>	
            </textarea>
            
          	<div>
        	    <button class="btn btn-primary">Update</button>
        	</div>
        </form>
      </div>
      
  </div>
           
           <footer class="well">
        <p><?php echo $credit; ?></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
