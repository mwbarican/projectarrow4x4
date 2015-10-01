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
						<form action="search.php" id="searchform" method="post">
						<div class="input-group">
						  <input type="text" class="form-control" autocomplete="off" placeholder="Search...">
						  <span class="input-group-btn">
							<button class="btn btn-default" type="submit" id="">Search</button>
						  </span>
						</div><!-- /input-group -->
						</form>
						<?php
						  if(isset($_POST['submit'])){
						  if(isset($_GET['go'])){
						  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){
						  $name=$_POST['name'];
						  //connect  to the database
						  $db=mysql_connect  ("localhost", "root",  "") or die ('Cannot connect to the database: ' . mysql_error());
						  //-select  the database to use
						  $mydb=mysql_select_db("cakeTable");
						  //-query  the database table
						  $sql="SELECT  ID, FirstName, LastName FROM Contacts WHERE FirstName LIKE '%" . $name .  "%' OR LastName LIKE '%" . $name ."%'";
						  //-run  the query against the mysql query function
						  $result=mysql_query($sql);
						  //-create  while loop and loop through result set
						  while($row=mysql_fetch_array($result)){
								  $FirstName  =$row['FirstName'];
								  $LastName=$row['LastName'];
								  $ID=$row['ID'];
						  //-display the result of the array
						  echo "<ul>\n";
						  echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$FirstName . " " . $LastName .  "</a></li>\n";
						  echo "</ul>";
						  }
						  }
						  else{
						  echo  "<p>Please enter a search query</p>";
						  }
						  }
						  }
						?>
					</div><!-- /.col-lg-6 -->
				</div>
            </div>
			<div class="col-lg-12 well">
				<?php 
					print("Search query will show here!");
				?>
			</div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="text-center">Reservation Order</h3>
					</div>
					<div class="panel-body">
						<?php 
							print("Chosen items will be added here!");
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