<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/uikit.min.css'); ?>">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	thead {
		 background: #1B7669;
		 color: #fff;
	}

	html {
	    background-color: #E7E7E7;
	  }
	/*.ad-link {
		background: #000000;
		color: #fff;
		padding: 3px 23px;
		text-align: center;
		text-decoration: none;
	}
	.ad-link:hover {
		background: #000000;
		color: #fff;
		padding: 3px 23px;
		text-align: center;
		text-decoration: none;
	}*/
	.logo {
		width: 200px;
		margin-top: 20px;
		margin-left: 10px;
	}
	.title {
		font-size: 1.3em;
		color: #1B7669;
		margin-left: 25px;
	}
	 .add-link, .add-link:hover {
		background: #2C86B4;
		padding: 1px 10px;
		text-decoration: none;
		color: white;
	}
	.log-link, .log-link:hover {
		background: #D00000;
		padding: 1px 10px;
		text-decoration: none;
		color: white;
	}
	</style>
</head>
<body>

<div id="container">
	<?php echo $this->session->flashdata('message'); ?>
	
	<span class="uk-width-1"> 
        <img class="uk-margin-bottom logo" src="http://schooldemo2.oneacademy.ph/gocart/themes/school2/assets/img/logo-1.png">
      </span> <hr/>
	  <a href="<?php echo base_url('shops'); ?>">Shop Admin</a>
    <div class="title"><?php echo $title; ?></div class=""> 
	<div id="body" class="uk-overflow-container">
		<div class="uk-align-right">
			<!--<a class="add-link" href="<?php echo base_url('shops/add'); ?>">Import</a>-->
					<?php 
						echo form_open_multipart('domans/upload_domains');
					?>
					<!--<div class="uk-form-file">
						<a href="">Click here to choose files.</a>&nbsp;&nbsp;&nbsp;
						<input  type="file" name="userfile" required="">
					</div>-->
					<input  type="file" name="userfile" required="">
					<input type="submit" value="Upload Users Data" />
					<?php 
						echo form_close();
					?>
		</div>
		<!--
		<div class="alert-msg uk-animation-fade uk-animation-reverse uk-animation-15" id="infoMessage"><?php echo $message;?></div> <br/><br/>
		-->
		<table class="uk-table uk-table-hover uk-table-striped">
			<thead style="text-align:center;" >
				<tr>	
					<th>ID</th>
					<th>Domain</th>
					<th>Status</th>
					<th>Shop Name</th>
					<th>Action</th>
				</tr>
				</thead>
				<?php foreach($domains as $domain):?>
				<tr>
					<td><?php echo $domain->domain_id;?></td>
					<td><?php echo $domain->domains;?></td>
					<td>
					<?php 
					if($domain->status == 0){
					echo "Inactive";
					}
					if($domain->status == 1){
					echo "Active";
					};?>
					</td>
					<td><?php echo $domain->shop;?></td>
					<td>action</td>
				</tr>
				<?php endforeach;?>
		
			<tbody style="text-align:center;">
				
			</tbody>
		</table>
		<div class="uk-width-1">
			<div  style="float:right;"> 
				<a class="log-link" href="auth/logout">Logout</a>
			</div>
		</div>
	</div>
	<p id="demo"></p>
	
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>

<script>
function change_status(id) {
	var x = document.getElementById("enabled").value;
		window.location ="<?php echo base_url();?>Shops/change/"+id;
}
</script>

<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/uikit.min.js'); ?>"></script>