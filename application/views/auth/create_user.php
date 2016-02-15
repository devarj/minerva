
<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<span class="title">Create New User</span>
		</div>
		<div class="row">
			<div class="col-xs-6">
			<?php
			if(isset($message)){
		?>
			<div class="alert alert-danger"><?php echo $message; ?></div>
		<?php
			}
		?>
				<div class="card">
				<form method="POST" action="<?php echo base_url('auth/create_user'); ?>">
					<div class="card-body">
						<div class="sub-title">First Name</div>
						<div>
							<input type="text" class="form-control" placeholder="First Name" name="first_name" />
						</div>
						<div class="sub-title">Last Name</div>
						<div>
							<input type="text" class="form-control" placeholder="Last Name"  name="last_name" />
						</div>
						<div class="sub-title">Company Name</div>
						<div>
							<input type="text" class="form-control" placeholder="Company"  name="company" />
						</div>
						<div class="sub-title">Phone</div>
						<div>
							<input type="text" class="form-control" placeholder="Phone"  name="phone" />
						</div>
						<div class="sub-title">Email</div>
						<div>
							<input type="text" class="form-control" placeholder="Email"  name="email" />
						</div>
						
						<div class="sub-title">Password</div>
						<div>
							<input type="password" class="form-control" placeholder="Password"  name="password" />
						</div>
						<div class="sub-title">Confirm Password</div>
						<div>
							<input type="password" class="form-control" placeholder="Confirm Password"  name="password_confirm" />
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>