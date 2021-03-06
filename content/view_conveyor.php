	<div class="page-title">
	<div class="title-env">
		<h1 class="title">View Detail Conveyor</h1>
		<p class="description">All Information Conveyor</p>
	</div>

	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="home.php?page=data_conveyor">Data Conveyor</a>
			</li>
			<li class="active">
				<strong>View Conveyor</strong>
			</li>
		</ol>

	</div>
</div>
			
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-color panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">DETAIL INFORMATION CONVEYOR
				</h3>
				<div class="panel-options">
					<span class="font-bold font16 text-right">FREEPORT INDONESIA, PT<br/><span class="judul-detail">SITE TIMIKA PAPUA</span></span>
				</div>
			</div>
			
			<div class="panel-body">
			<ul class="crumbs2">
					<li class="first"><a href="#">
						<i class="fa fa-plus-circle"></i>
						Add New User</a></li>
					<li><a href="#">
						<i class="fa fa-pencil-square-o"></i>
						Update User</a></li>
					<li class="last"><a href="#">
						<i class="fa fa-trash-o"></i>
						Delete User</a></li>
				</ul>
				<span class="images-conveyor">
				<a href="images/conveyor/thumb/conveyor.jpg" class="conveyor-image image-Lightbox" rel-image="conveyor-image" title="Conveyor Image">
					<img src="images/conveyor/conveyor.jpg">
				</a>
				
				</span>

				<div class="form-group">
					<div class="col-sm-12">
						<br/>
						<span class="font-bold font16">Conveyor Code :  Code A0010</span>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<span class="font-bold font16">AREA 0001</span>
					</div>
				</div>
				<div class="sparator"></div>
				<div class="form-group">
					<br/>
					<div class="col-sm-12">
						Menjelaskan Detail Desc customer Freeport Indonesia, PT Dari SITE, Data Area, Data Conveyor
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		
		<ul class="nav nav-tabs nav-tabs-justified">
			<li class="active">
				<a href="#detail-conveyor-3" data-toggle="tab">
					<span class="visible-xs"><i class="fa-envelope-o"></i></span>
					<span class="hidden-xs">CONVEYOR ASSET</span>
				</a>
			</li>
		</ul>
		
		<div class="tab-content">
			<div class="tab-pane active" id="detail-conveyor-3">
				<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						$("#detail-conveyor-asset").dataTable().yadcf([
							{column_number : 0, filter_type: 'text'},
							{column_number : 1, filter_type: 'text'},
							{column_number : 2},
							{column_number : 3},
							{column_number : 4},
							{column_number : 5},
						]);
					});
				</script>
				<div class="table-responsive"> 
					<table class="table table-striped table-bordered" id="detail-conveyor-asset">
						<thead>
							<tr class="replace-inputs">
								<th><center>Part</center></th>
								<th><center>Code</center></th>
								<th><center>Customer Area</center></th>
								<th><center>Customer Site</center></th>
								<th><center>Customer Name</center></th>
								<th><center>Brand</center></th>
							</tr>
						</thead>
						<tbody>
						    <?php for($i=1; $i<100; $i++){ ?>
								<tr>
									<td>PART A00<?=$i?></td>
									<td>CODE 000<?=$i?></td>
									<td>AREA  <?=$i?></td>
									<td>SITE  <?=$i?></td>
									<td>FREEPORT INDONESIA <?=$i?></td>
									<td>MARTIN</td>
								</tr>
							<?php } ?>
						</tbody>
				</table>
				</div>

			</div>
			
		</div>
		
		
	</div>
</div>