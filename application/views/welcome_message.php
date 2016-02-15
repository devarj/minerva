<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('includes/header.php');
?>

            <!-- Main Content -->
	<div class="container-fluid">
                <div class="side-body">
                    <div class="page-title">
                        <span class="title">Division and School</span>
                        <div class="description">Please be advise that the list are composed of both school and division.</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
					
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                    <div class="title">Website List <a href="<?php echo base_url('shops/add'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i></a></div>
									
                                    </div>
                                </div>
                                <div class="card-body">
								
                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <td>ID</td>
												<td>Site Name</td>
												<td>Domain</td>
												<td>Host Name</td>
												<td>Database Name</td>
												<td>Status</td>
												<td>Action</td>	
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                               <td>ID</td>
												<td>Site Name</td>
												<td>Domain</td>
												<td>Host Name</td>
												<td>Database Name</td>
												<td>Status</td>
												<td>Action</td>
                                            </tr>
                                        </tfoot>
                                        <tbody>
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
													<td><a href="shops/edit/<?php echo $shop->id; ?>"><i style="color:#006BB6;" class="fa fa-pencil"></i></a> | <a href="shops/delete/<?php echo $shop->id; ?>" onclick="return confirm('Do you really want to delete this record')"><i style="color: #EC3A3A;" class="fa fa-trash"></i></a></td>
												</tr>
											<?php
												endforeach;
											?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<?php
	include('includes/footer.php');
?>
<script>

function change_status(id) {
	var x = document.getElementById("enabled").value;
		window.location ="<?php echo base_url();?>Shops/change/"+id;
}
</script>