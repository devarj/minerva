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
		<form method="POST" action="<?php echo base_url('shops/edit/'.$shop->id); ?>">
			Shop Name: <input type="text" name="shopname" value="<?php echo (isset($shop->shopname)) ? $shop->shopname : set_value('shopname'); ?>" /><br />
			Domain Name: <input type="text" name="domainname"  value="<?php echo (isset($shop->domainname)) ? $shop->domainname : set_value('domainname'); ?>"/><br />
			Host Name: <input type="text" name="hostname"  value="<?php echo (isset($shop->hostname)) ? $shop->hostname : set_value('hostname'); ?>"/><br />
			Database Name: <input type="text" name="dbname"  value="<?php echo (isset($shop->dbname)) ? $shop->dbname : set_value('dbname'); ?>" /><br />
			URL: <input type="text" name="url"  value="<?php echo (isset($shop->url)) ? $shop->url : set_value('dbname'); ?>" /><br />
			Ecommerce Enabled: <input type="checkbox" name="ecomm" <?php echo ($shop->ecomm == 1) ? 'checked' : ''; ?>/><br />
			Virtual Campus Enabled: <input type="checkbox" name="vc" <?php echo ($shop->vc == 1) ? 'checked' : ''; ?> /><br />
			Enabled: <input type="checkbox" name="enabled" <?php echo ($shop->enabled == 1) ? 'checked' : ''; ?>/><br />
			<input type="hidden" name="submit" value="shops" />
			<a href="<?php echo base_url(); ?>"><button type="button">Back</button></a> | <button type="submit">Submit</button> 
		</form>
		
	</div>

	
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>