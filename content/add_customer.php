<div class="page-title">
	<div class="title-env">
		<h1 class="title">Create New Customer</h1>
		<p class="description">Pages user admin create new customer</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="home.php?page=data_customer">Data Customer</a>
			</li>
			<li class="active">
				<strong>Create Customer</strong>
			</li>
		</ol>

	</div>
</div>
			
<div class="row">
	<div class="col-sm-12">
		<form role="form" id="form1" method="post" class="validate form-horizontal">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title font-bold">FORM CREATE CUSTOMER</h3>
					<div class="panel-options">
						<button type="submit" class="btn btn-info btn-icon btn-icon-standalone">
							<i class="fa-plus-circle"></i>
							<span>Create Customer</span>
						</button>
					</div>
				</div>
				<div class="panel-body">
						<!-- <div class="form-group required validate-has-error"> -->
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="field-1">Customer Name <span class="font-red">*</span></label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="name" data-validate="required" data-message-required="Please Input Customer Name." placeholder="Customer Name" />
								<span class="validate-has-error message">Please Input Customer Name.</span>
							</div>
						</div>
						<div class="form-group-separator"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="field-5">Description</label>
							<div class="col-sm-10">
								<textarea class="form-control" cols="5" id="field-5" name="desc"></textarea>
							</div>
						</div>
						<div class="form-group-separator"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="field-5">CO Type</label>
							<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$("#co-type").selectBoxIt().on('open', function()
									{
										// Adding Custom Scrollbar
										$(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
									});
								});
							</script>
							<div class="col-sm-10">
								<select class="form-control" id="co-type">
									<option value="PT">PT</option>
									<option value="CV">CV</option>
								</select>
							</div>
						</div>
						<div class="form-group-separator"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="field-5">Active</label>

							<div class="col-sm-10">
								<input type="checkbox" checked class="iswitch">
							</div>
						</div>
				</div>
			</div>
		</form>
	</div>
</div>


<div class="row">
	<div class="col-sm-12">
		<div class="panel-group" id="accordion-test-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseOne-2">
						<span class="font-bold">DATA SITE CUSTOMER</span>
					</a>
					</h4>
				</div>
				<div id="collapseOne-2" class="panel-collapse collapse in">
					<div class="panel-body">
						<table class="table table-bordered table-striped" id="example-1">
							<thead>
								<tr>
									<th>Nama Site</th>
									<th><center>Action</center></th>
								</tr>
							</thead>
							<tbody class="middle-align">
								<tr>
									<td>SITE FREEPORT INDONESIA, PT</td>
									<td>
										<center>
											<a href="javascript:;" onclick="jQuery('#create-site').modal('show', {backdrop: 'static'});" class="btn btn-secondary btn-sm btn-icon icon-left">
											Edit
											</a>
											<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
												Delete
											</a>
										</center>
									</td>
								</tr>
							</tbody>
						</table>
						<a href="javascript:;" onclick="jQuery('#create-site').modal('show', {backdrop: 'static'});">
							<button class="btn btn-info btn-icon btn-icon-standalone">
								<i class="fa-plus-circle"></i>
								<span>Add Site Customer</span>
							</button>
						</a>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseTwo-2" class="collapsed">
						<span class="font-bold">DATA AREA CUSTOMER</span>
					</a>
					</h4>
				</div>
				<div id="collapseTwo-2" class="panel-collapse collapse">
					<div class="panel-body">
						<table class="table table-bordered table-striped" id="example-2">
							<thead>
								<tr>
									<th>Nama Area</th>
									<th>Nama Site</th>
									<th><center>Action</center></th>
								</tr>
							</thead>
							<tbody class="middle-align">
								<tr>
									<td>AREA 001</td>
									<td>SITE FREEPORT INDONESIA, PT</td>
									<td>
										<center>
											<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
											Edit
											</a>
											<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
												Delete
											</a>
										</center>
									</td>
								</tr>
							</tbody>
						</table>
						<a href="javascript:;" onclick="jQuery('#create-area').modal('show', {backdrop: 'static'});">
							<button class="btn btn-info btn-icon btn-icon-standalone">
								<i class="fa-plus-circle"></i>
								<span>Add Area Customer</span>
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>


<div class="modal fade" id="create-site">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Create Customer Site</h4>
			</div>
			
			<div class="modal-body">
			
				<div class="row">
					<div class="col-md-12">
						
						<div class="form-group required">
							<label for="field-1" class="control-label">Name <span class="font-red">*</span></label>
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="Please Input Customer Name." placeholder="Customer Name" />
							<span class="validate-has-error message">Please Input Customer Name.</span>
						</div>	
						
					</div>
				</div>
			
			
				<div class="row">
					<div class="col-md-12">
						
						<div class="form-group no-margin">
							<label for="field-7" class="control-label">Description</label>
							
							<textarea class="form-control autogrow" id="field-7" placeholder="Description Detail Customer Site"></textarea>
						</div>	
						
					</div>
				</div>
				
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-info">Save changes</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="create-area">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Create Customer Area</h4>
			</div>
			
			<div class="modal-body">
			
				<div class="row">
					<div class="col-md-12">
						
						<div class="form-group">
							<label for="field-1" class="control-label">Name <span class="font-red">*</span></label>
							
							<input type="text" class="form-control" id="field-1" placeholder="Detail Area Customer">
						</div>	
						
					</div>
				</div>
			
				<div class="row">
					<div class="col-md-12">
						<div class="form-group no-margin">
							<label for="field-7" class="control-label">Data Site</label>
							<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$("#data-site").selectBoxIt().on('open', function()
									{
										// Adding Custom Scrollbar
										$(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
									});
								});
							</script>
							<select class="form-control" id="data-site">
								<option value="">Please Select Site..............!</option>
								<option value="1">SITE 1 FREEPORT INDONESIA, PT</option>
								<option value="2">SITE 2 FREEPORT INDONESIA, PT</option>
							</select>
							<br/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group no-margin">
							<label for="field-7" class="control-label">Description</label>
							<textarea class="form-control autogrow" id="field-7" placeholder="Description Detail Customer Area"></textarea>
						</div>
					</div>
				</div>
				
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-info">Save changes</button>
			</div>
		</div>
	</div>
</div>