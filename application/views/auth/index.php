
<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<span class="title">System Administrators</span>
		</div>
		<div class="row">
			<div class="col-xs-12">
		
				<div class="card">
					<div class="card-header">
						<div class="card-title">
						<div class="title">User List <a href="<?php echo base_url('auth/create_user'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i></a></div>
						
						</div>
					</div>
					<div class="card-body">
					
						<table class="datatable table table-striped" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th><?php echo lang('index_fname_th');?></th>
									<th><?php echo lang('index_lname_th');?></th>
									<th><?php echo lang('index_email_th');?></th>
									<th><?php echo lang('index_groups_th');?></th>
									<th><?php echo lang('index_status_th');?></th>
									<th><?php echo lang('index_action_th');?></th>	
								</tr>
							</thead>
							<tfoot>
								<tr>
								   <th><?php echo lang('index_fname_th');?></th>
									<th><?php echo lang('index_lname_th');?></th>
									<th><?php echo lang('index_email_th');?></th>
									<th><?php echo lang('index_groups_th');?></th>
									<th><?php echo lang('index_status_th');?></th>
									<th><?php echo lang('index_action_th');?></th>
								</tr>
							</tfoot>
							<tbody>
								<?php foreach ($users as $user):?>
									<tr>
										<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
										<td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
										<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
										<td>
											<?php foreach ($user->groups as $group):?>
												<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
											<?php endforeach?>
										</td>
										<td>
										<?php
										if($user->active){
										?>
										<a href="<?php echo base_url('auth/deactivate/'.$user->id); ?>" class="btn btn-info"><?php echo lang('index_active_link'); ?></a>
										<?php
										}else{
										?>
										<a href="<?php echo base_url('auth/activate/'.$user->id); ?>" class="btn btn-info"><?php echo lang('index_inactive_link'); ?></a>
										<?php
										}
										?></td>
										<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
									</tr>
								<?php endforeach;?>
							</tbody>
						</table>		
		
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
