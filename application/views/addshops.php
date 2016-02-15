<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	include('includes/header.php');
?>
<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<span class="title">Add New Site</span>
			<div class="description">Enter site details together with server credential if neccessary.</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
			<?php
			if(isset($msg)){
		?>
			<p class="error"><?php echo $msg; ?></p>
		<?php
			}
		?>
				<div class="card">
				<form method="POST" action="<?php echo base_url('shops/add'); ?>">
					<div class="card-body">
						<div class="sub-title">Site Name</div>
						<div>
							<input type="text" class="form-control" placeholder="Site Name" name="shopname" />
						</div>
						<div class="sub-title">Domain Name</div>
						<div>
							<input type="text" class="form-control" placeholder="Domain"  name="domainname" />
						</div>
						<div class="sub-title">Host Name</div>
						<div>
							<input type="text" class="form-control" placeholder="Hostname"  name="hostname" />
						</div>
						<div class="sub-title">Database Name</div>
						<div>
							<input type="text" class="form-control" placeholder="Database Name"  name="dbname" />
						</div>
						<div class="sub-title">Enabled</div>
						<div class="checkbox3 checkbox-round">
							  <input type="checkbox" id="checkbox-2" name="enabled">
							  <label for="checkbox-2">
								Activate/Deactivate
							  </label>
							</div>
						<input type="hidden" name="submit" value="shops" />
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="container">

	<div id="body">
		
		<?php echo $this->session->flashdata('message'); ?>
		
		
	</div>

	
</div>

<?php
include('includes/footer.php');
?>