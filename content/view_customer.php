<div class="page-title">
	<div class="title-env">
		<h1 class="title">View Detail Customer</h1>
		<p class="description">All Information Customer <b>FREEPORT INDONESIA,PT</b></p>
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
				<strong>View Customer</strong>
			</li>
		</ol>

	</div>
</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-color panel-info">
						<div class="panel-heading-view">
						<h3 class="detail-view">DETAIL INFORMATION CUSTOMER</h3>
						<ul class="crumbs2">
								<li class="first"><a href="#">
									<i class="fa fa-plus-circle"></i>
									Add New Customer</a></li>
								<li><a href="#">
									<i class="fa fa-pencil-square-o"></i>
									Update Customer</a></li>
								<li class="last"><a href="#">
									<i class="fa fa-trash-o"></i>
									Delete Customer</a></li>
							</ul>
						</div>
						<br/>
						<hr/>

						<div class="panel-body">
							<div class="form-group">
								<!-- <label class="col-sm-3 control-label">Customer Name</label> -->
								<div class="col-sm-12">
									<span class="font-bold font16">FREEPORT INDONESIA, PT</span>
								</div>
							</div>
							<div class="sparator"></div>
							<div class="form-group">
								<!-- <label class="col-sm-3 control-label">Description</label> -->
								<div class="col-sm-12">
									Menjelaskan Detail Desc customer Freeport Indonesia, PT Dari SITE, Data Area, Data Conveyor
								</div>
							</div>
							<div class="sparator"></div>
							<div class="form-group">
								<br/>
								<label class="col-sm-2 control-label">SITE</label>
								<div class="col-sm-10">
									10 SITE
								</div>
							</div>
							<div class="sparator"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label"> AREA</label>
								<div class="col-sm-10">50 AREA</div>
							</div>
							<div class="sparator"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label"> CONVEYOR</label>
								<div class="col-sm-10">100 CONVEYOR</div>
							</div>
							<div class="sparator"></div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					
					<ul class="nav nav-tabs nav-tabs-justified">
						<li class="active">
							<a href="#detail-site-3" data-toggle="tab">
								<span class="visible-xs"><i class="fa-home"></i></span>
								<span class="hidden-xs">Detail Site</span>
							</a>
						</li>
						<li>
							<a href="#detail-area-3" data-toggle="tab">
								<span class="visible-xs"><i class="fa-user"></i></span>
								<span class="hidden-xs">Detail Area</span>
							</a>
						</li>
						<li>
							<a href="#detail-conveyor-3" data-toggle="tab">
								<span class="visible-xs"><i class="fa-envelope-o"></i></span>
								<span class="hidden-xs">Detail Conveyor</span>
							</a>
						</li>
					<!-- 	<li>
							<a href="#conveyor-asset-3" data-toggle="tab">
								<span class="visible-xs"><i class="fa-envelope-o"></i></span>
								<span class="hidden-xs">Detail Conveyor Asset</span>
							</a>
						</li> -->
					</ul>
					
					<div class="tab-content">
						<div class="tab-pane active" id="detail-site-3">
							<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$("#site").dataTable().yadcf([
									{column_number : 0, filter_type: 'text'},
									{column_number : 1, filter_type: 'text'}
								]);
							});
							</script>
							<div class="table-responsive"> 
								<table class="table table-striped table-bordered" id="site">
									<thead>
										<tr class="replace-inputs">
											<th><center>Site Name</center></th>
											<th><center>Description</center></th>
										</tr>
									</thead>
									<tbody>
									    <?php for($i=1; $i<10; $i++){ ?>
											<tr>
												<td>SITE <?=$i?></td>
												<td>Description <?=$i?></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
							
						</div>
						<div class="tab-pane" id="detail-area-3">
							<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$("#detail-area").dataTable().yadcf([
										{column_number : 0, filter_type: 'text'},
										{column_number : 1, filter_type: 'text'},
										{column_number : 2},
									]);
								});
							</script>
							
							<div class="table-responsive"> 
								<table class="table table-striped table-bordered" id="detail-area">
									<thead>
										<tr class="replace-inputs">
											<th><center>Area Name</center></th>
											<th><center>Description</center></th>
											<th><center>Site</center></th>
										</tr>
									</thead>
									<tbody>
									    <?php for($i=1; $i<10; $i++){ ?>
											<tr>
												<td>Area <?=$i?></td>
												<td>Des <?=$i?></td>
												<td>Site <?=$i?></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>						
							</div>	
		
						</div>
						<div class="tab-pane" id="detail-conveyor-3">
							<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$("#detail-conveyor").dataTable().yadcf([
										{column_number : 0, filter_type: 'text'},
										{column_number : 1, filter_type: 'text'},
										{column_number : 2},
										{column_number : 3},
										{column_number : 4},
									]);
								});
							</script>
							<div class="table-responsive"> 
								<table class="table table-striped table-bordered" id="detail-conveyor">
									<thead>
										<tr class="replace-inputs">
											<th><center>Code</center></th>
											<th><center>Description</center></th>
											<th><center>Name Area</center></th>
											<th><center>Name Site</center></th>
											<th><center>Status</center></th>
										</tr>
									</thead>
									<tbody>
									    <?php for($i=1; $i<10; $i++){ ?>
											<tr>
												<td>code <?=$i?></td>
												<td>Des <?=$i?></td>
												<td>Area <?=$i?></td>
												<td>Site <?=$i?></td>
												<td>OK</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>

						</div>
				<!-- 		<div class="tab-pane" id="conveyor-asset-3">
							<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$("#conveyor-asset").dataTable().yadcf([
										{column_number : 0, filter_type: 'text'},
										{column_number : 1, filter_type: 'text'},
										{column_number : 2},
										{column_number : 3},
										{column_number : 4},
										{column_number : 5},
										{column_number : 6},
									]);
								});
							</script>
							<table class="table table-striped table-bordered" id="conveyor-asset">
								<thead>
									<tr class="replace-inputs">
										<th><center>Part</center></th>
										<th><center>Code</center></th>
										<th><center>Description</center></th>
										<th><center>Name Conveyor</center></th>
										<th><center>Name Site</center></th>
										<th><center>Name Area</center></th>
										<th><center>Status</center></th>
									</tr>
								</thead>
								<tbody>
								    <?php for($i=1; $i<10; $i++){ ?>
										<tr>
											<td>Part <?=$i?></td>
											<td>code <?=$i?></td>
											<td>Des <?=$i?></td>
											<td>Conveyor <?=$i?></td>
											<td>Site <?=$i?></td>
											<td>Area <?=$i?></td>
											<td>OK</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div> -->
						
					</div>
					
					
				</div>
			</div>