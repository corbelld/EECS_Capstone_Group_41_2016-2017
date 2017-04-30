<!-->
<?php
$conn=mysql_connect("localhost","root","") or die("Could not connect");
mysql_select_db("studentdb",$conn) or die("could not connect database");
?>
-->

<?php
						//include connection variables
						//include 'connectvarsEECS.php'; 

							$dbhost = 'mysql.cs.orst.edu';
							$dbname = 'cs440_yeja';
							$dbuser = 'cs440_yeja';
							$dbpass = '5271';

						$mysql_handle = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
?>
