<div class="page-title">
	<div class="title-env">
		<h1 class="title">View Detail Customer Site Area</h1>
		<p class="description">All Information Customer Site Area</p>
	</div>

	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="home.php?page=data_area">Data Customer Site Area</a>
			</li>
			<li class="active">
				<strong>View Customer Site Area</strong>
			</li>
		</ol>

	</div>
</div>
			
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-color panel-info">
			<div class="panel-heading">
				<h3 class="panel-title"><center>DETAIL INFORMATION CUSTOMER SITE AREA</center></h3>
				<div class="panel-options">
					<span class="font-bold font16 text-right">FREEPORT INDONESIA, PT<br/><span class="judul-detail">SITE TIMIKA PAPUA</span></span>
				</div>
			</div>
			
			<div class="panel-body">
				<ul class="crumbs2">
					<li class="first"><a href="#">
						<i class="fa fa-plus-circle"></i>
						Add New Area</a></li>
					<li><a href="#">
						<i class="fa fa-pencil-square-o"></i>
						Update Area</a></li>
					<li class="last"><a href="#">
						<i class="fa fa-trash-o"></i>
						Delete Area</a></li>
				</ul>
				<div class="form-group">
					<!-- <label class="col-sm-3 control-label">Customer Name</label> -->
					<div class="col-sm-12">
						<span class="font-bold font16">AREA 0001</span>
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
				<br/>
				<div class="form-group">
					<label class="col-sm-2 control-label"> CONVEYOR</label>
					<div class="col-sm-10">10 CONVEYOR</div>
				</div>
				<div class="sparator"></div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		
		<ul class="nav nav-tabs nav-tabs-justified">
			<li class="active">
				<a href="#detail-conveyor-3" data-toggle="tab">
					<span class="visible-xs"><i class="fa-envelope-o"></i></span>
					<span class="hidden-xs">CONVEYOR</span>
				</a>
			</li>
		</ul>
		
		<div class="tab-content">
			<div class="tab-pane active" id="detail-conveyor-3">
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
						    <?php for($i=1; $i<5; $i++){ ?>
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
			
		</div>
		
		
	</div>
</div>