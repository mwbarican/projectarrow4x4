<?php 
	include("header.php");
	include("connect.php");
?>

<!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 marginB25">
				<div class="row">
					<div class="col-lg-6">
						<ul class="sections">
							<li class="active">1</li>
							<li>2</li>
							<li>3</li>
						</ul>
					</div>
					<div class="col-lg-6">
						<div class="input-group">
						  <input type="text" name="typeahead" class="typeahead form-control" autocomplete="off" placeholder="Search...">
						  <span class="input-group-btn">
							<button class="btn btn-default" type="button" id="">Search</button>
						  </span>
						</div><!-- /input-group -->
					</div><!-- /.col-lg-6 -->
				</div>
            </div>
			<div class="col-lg-12 well">
				
			</div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="text-center">Reservation Order</h3>
					</div>
					<div class="panel-body">
						<?php 
							print("Hello World!");
						?>
						<div class="text-center">
							<a href="section2.php" class="btn-proceed btn">Proceed to 2</a>
						</div>
					</div>
				</div>
			</div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->




<?php 
	include("footer.php");
?>