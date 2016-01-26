<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/uikit.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/datatables.min.css'); ?>">
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
        <img class="uk-margin-bottom logo" src="<?php echo base_url('assets/img/cpanel.png'); ?>">
      </span> <hr/>
	  <a href="<?php echo base_url('domans'); ?>">Domain Management</a>
    <div class="title"><?php echo $title; ?></div class=""> 
	<div id="body" class="uk-overflow-container">
		<div class="uk-align-right">
			<a class="add-link" href="<?php echo base_url('shops/add'); ?>">Add New</a>
		</div>
		<table class="uk-table uk-table-hover uk-table-striped">
			<thead style="text-align:center;">
				<tr>	
					<td>ID</td>
					<td>Shop Name</td>
					<td>Domain</td>
					<td>Host Name</td>
					<td>Database Name</td>
					<td>Status</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody style="text-align:center;">
				<?php
					foreach($shops as $shop):
				?>
					<tr>
						<td><?php echo $shop->id; ?></td>
						<td><?php echo $shop->shopname; ?></td>
						<td><?php echo $shop->domainname; ?></td>
						<td><?php echo $shop->hostname; ?></td>
						<td><?php echo $shop->dbname; ?></td>
						<!--<td><?php echo ($shop->enabled)? 'Active' : 'Inactive' ?></td>-->
						<td>
							<form class="uk-form">
								<select id="enabled" name = "enabled" onchange = "change_status(<?php echo $shop->id; ?>)">
									<option value = "1"  <?php if($shop->enabled==1){?> selected="<?php echo "selected";} ?>">Active</option>
									<option value = "0"  <?php if($shop->enabled==0){?> selected="<?php echo "selected";} ?>">Inactive</option>
								</select>
							</form>
						</td>
						<td><a href="shops/edit/<?php echo $shop->id; ?>"><i style="color:#006BB6;" class="uk-icon-pencil"></i></a> | <a href="shops/delete/<?php echo $shop->id; ?>" onclick="return confirm('Do you really want to delete this record')"><i style="color: #EC3A3A;" class="uk-icon-trash"></i></a></td>
					</tr>
				<?php
					endforeach;
				?>
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


<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/uikit.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables/datatables.min.js'); ?>"></script>


<script>
$(document).ready(function() {
    $('#table').DataTable();
} );
function change_status(id) {
	var x = document.getElementById("enabled").value;
		window.location ="<?php echo base_url();?>Shops/change/"+id;
}
</script>