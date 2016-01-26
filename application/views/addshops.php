<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	
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
	</style>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/uikit.min.css'); ?>">
	<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/uikit.min.js'); ?>"></script>
	<script>
		$(function(){
			
			$('#change').click(function(){
				$('#selF').fadeToggle(function(){
					$(this).attr('disabled');
					$('#textF').fadeToggle();
				});
			});
		});
	</script>
</head>
<body>

<div id="container">
	<h1><?php echo $title; ?></h1>

	<div id="body">
		<?php
			if(isset($msg)){
		?>
			<p class="error"><?php echo $msg; ?></p>
		<?php
			}
		?>
		<?php echo $this->session->flashdata('message'); ?>
		<form method="POST" action="<?php echo base_url('shops/add'); ?>">
			Shop Name: <input type="text" name="shopname" /><br />
			Domain Name: 
			<input type="text" name="domainname" id="textF"/>
			<select name="domainid" style="display: none;" id="selF" />
			<?php foreach($domains as $domain):?>
			<option value="<?php echo $domain->domain_id;?>"><?php echo $domain->domains;?></option>
			<?php endforeach;?>
			</select>
			<button id="change" type="button">Change</button>
			<br />
			Host Name: <input type="text" name="hostname" value="localhost" readonly /><br />
			Database Name: <input type="text" name="dbname" />**Note: spaces will be trimmed<br />
			<!--URL: <input type="text" name="url" /><br />
			Ecommerce Enabled: <input type="checkbox" name="ecomm" /><br />
			Virtual Campus Enabled: <input type="checkbox" name="vc" /><br />-->
			Enabled: <input type="checkbox" name="enabled" /><br />
			<input type="hidden" name="submit" value="shops" />
			<a href="<?php echo base_url(); ?>"><button type="button">Back</button></a> | <button type="submit">Submit</button> 
		</form>
		
	</div>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>