<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Health Careers</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Oregon Health Science Careers</div>
    <div class="address-bar">[Filler Information]</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Health Careers</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="careers.html">Careers</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="resources.html">Resources</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
    <div class="container">
        <div class="row">
            <div class="box">
            
                    <!-- begin php section for career information query -->
					<?php
						//include connection variables
						//include 'connectvarsEECS.php'; 

							$dbhost = 'mysql.cs.orst.edu';
							$dbname = 'cs440_yeja';
							$dbuser = 'cs440_yeja';
							$dbpass = '5271';

						/*	$mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass, $dbname)
								or die("Error connecting to database server");

							mysql_select_db($dbname, $mysql_handle)
								or die("Error selecting database: $dbname");
						*/
						$mysql_handle = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
						
						
						
		//				$conn = mysqli_connect('mysql.cs.orst.edu', 'cs440_yeja', '5271')
		//					or die("error plzxfp")
		//					$dbname = 'cs440_yeja';

						
					
						
						//if (!$conn) {
							//echo "Casdfga";
							//die('Could not connect: ' . mysqli_error());
							
						$query = "SELECT * FROM Careers C, CareerLink L, Opportunity O WHERE C.careerID = 'chiropractics' AND L.careerID = 'chiropractics' AND O.careerID = 'chiropractics'"; 
						//echo $query;
						//echo $mysql_handle;
						$result = mysqli_query($mysql_handle, $query) or die("Result die");
						if(!$result){
							die('Coult not');
						}
						

							$row = mysqli_fetch_array($result);
							echo "<div class='row'>";
							echo "<div class='col-md-8'>";
							echo "<hr>";
							echo 	"<h1 class='intro-text text-center'>";
							echo 		"<strong>";
							echo 			$row['careerName'];
							echo 		"</strong>";
							echo 	"</h1>";
							echo "</hr><br>";
							echo 		"<p class='text-center'>";
							echo 		$row['bodyText'];
							echo 		"<br><br>";
							echo 		$row['statistics'];
							echo 		"</p>";
							echo "</div>";
							echo "<div class='col-md-4 figure'>";
							echo 		"<img class='center-block figure-img' src=".$row[img]." >";
							echo 		"<figcaption class='figure-caption'>".$row['caption']."</figcaption";
							echo "</div>";
							echo "</div>";
							
							echo "<div class='row'>";
							echo 	"<div class='col-md-5'>";
							echo 	"<br>";
							echo	"<h1 class='intro-text text-center'><strong>Colleges and Universities</strong></h1>";
							
							$queryschools = "SELECT * FROM Careers C, CareerLink L, Schools S WHERE C.careerID = 'chiropractics' AND L.careerID = 'chiropractics' AND S.schoolID=L.schoolID"; 
						
							$schools = mysqli_query($mysql_handle, $queryschools) or die("Result die");
							if(!$schools){
								die('Coult not');
							}
						

							while($row2 = mysqli_fetch_array($schools)){  //Show Schools
							echo $row2['schoolName'];
							}	
							echo "</div>";		
							echo "</div>";				
							
							
							//Row showing state and national opportunities
							echo "<div class='row'>";
							echo 	"<div class='col-md-6'>";
							echo		"<h1 class='intro-text text-center'><strong>State Opportunities</strong></h1>";
							$querystate = "SELECT * FROM Careers C, Opportunity O WHERE C.careerID = 'chiropractics' AND O.careerID = 'chiropractics' AND O.oppType = 'Oregon'"; 
						
							$state = mysqli_query($mysql_handle, $querystate) or die("Result die");
							if(!$state){
								die('Coult not');
							}

							while($row3 = mysqli_fetch_array($state)){  //Show Schools
								echo "<a href=".$row3['oppLink'].">".$row3['oppID']."</a>";
							}	
							echo "</div>";		
					
							
							
							echo 	"<div class='col-md-6'>";
							echo		"<h1 class='intro-text text-center'><strong>National Opportunities</strong></h1>";
							$querynat = "SELECT * FROM Careers C, Opportunity O WHERE C.careerID = 'chiropractics' AND O.careerID = 'chiropractics' AND O.oppType = 'National'"; 
						
							$nat = mysqli_query($mysql_handle, $querynat) or die("Result die");
							if(!$nat){
								die('Coult not');
							}

							while($row4 = mysqli_fetch_array($nat)){  //Show Schools
								echo "<a href=".$row4['oppLink'].">".$row4['oppID']."</a>";
							}	
							echo "</div>";	
							
							echo 	"</div>";
							
							
							echo "</div>";

											
						mysql_close($mysql_handle);
					?> 
					<!--  end php  -->
                
                
            </div>
        </div>

    </div>
    <!-- /.container -->
	
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Oregon State Health Careers 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
