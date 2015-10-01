<?php
				
	//connection to the database
	$con = mysql_connect("localhost","root","")
	or die("Unable to connect to MySQL");
	//echo "Connected to MySQL<br>";

	//select a database to work with
	$selected = mysql_select_db("projectarrow4x4",$con) 
	or die("Could not select reservation");

	//execute the SQL query and return records
	//$result = mysql_query("SELECT * FROM products");

	//fetch tha data from the database 
	/* while ($row = mysql_fetch_array($result)) {
		echo "ID:".$row{'id'}." Item Type:".$row{'item_type'}." Item:". //display the results
		$row{'item'}." Description:".$row{'description'}." Quantity:".$row{'quantity'}." Image:".$row{'image'}."<br>";
		} */
	//close the connection
	mysql_close($con);
?>