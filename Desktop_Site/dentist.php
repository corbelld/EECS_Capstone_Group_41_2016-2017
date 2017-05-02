
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

	<div class="brand"><a href ="index.html" style="text-decoration:none; color: #404040"> <img src= "img/logo.png" height="120" width="120" hspace="30" /> Oregon Health Science Careers</a></div>
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
                        <a href="careers.php">Careers</a>
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
						include 'connectvarsHC.php';
							
						$query = "SELECT * FROM Careers C, CareerLink L, Opportunity O WHERE C.careerID = 'dentist' AND L.careerID = 'dentist' AND O.careerID = 'dentist'"; 
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
							echo 		"<p>";
							echo 		$row['bodyText'];
							echo 		"<br><br>";
							echo 		$row['statistics'];
							echo 		"</p>";
							echo "</div>";
							echo "<div class='col-md-4 figure'>";
							echo 	"<div class='panel panel-default' style='margin-left:10%; margin-right:10%; background: #F0F0F0'>";
							echo 		"<div class='panel-body'>";
							echo 			"<figure class=' center-block' >";
							echo 			"<img class='center-block img-responsive'  src=".$row[img]." >";
							echo 			"<figcaption class='figure-caption' style='padding-top:5px; padding-right:8%; padding-left:8%;'>".$row['caption']."</figcaption";
							echo			"</figure>";
							echo  		"</div>";
							echo 	"</div>";
							echo "</div>";
							echo "</div>";
							
							echo "<div class='row bot-buffer'>";
							echo 	"<div class='col-md-5'>";
							echo 	"<br>";
							echo	"<h1 class='intro-text text-center'><strong>Colleges and Universities</strong></h1>";
							echo    "<hr>";
							
							$queryschools = "SELECT * FROM Careers C, CareerLink L, Schools S WHERE C.careerID = 'dentist' AND L.careerID = 'dentist' AND S.schoolID=L.schoolID"; 
						
							$schools = mysqli_query($mysql_handle, $queryschools) or die("Result die");
							if(!$schools){
								die('Coult not');
							}
						
							echo "<p class='text-center'>";
							while($row2 = mysqli_fetch_array($schools)){  //Show Schools
							echo "<a href=".$row2['url'].">".$row2['schoolName']."</a>";
							echo "</br>";
							}
							echo "</p>";
							echo "</div>";		
							echo "</div>";				
							
							
							//Row showing state and national opportunities
							echo "<div class='row'>";
							echo 	"<div class='col-md-5'>";
							echo		"<h1 class='intro-text text-center'><strong>State Opportunities</strong></h1>";
							echo    	"<hr>";
							$querystate = "SELECT * FROM Careers C, Opportunity O WHERE C.careerID = 'dentist' AND O.careerID = 'dentist' AND O.oppType = 'Oregon'"; 
						
							$state = mysqli_query($mysql_handle, $querystate) or die("Result die");
							if(!$state){
								die('Coult not');
							}
							echo "<p class='text-center'>";
							while($row3 = mysqli_fetch_array($state)){  //Show Schools
								echo "<a href=".$row3['oppLink'].">".$row3['oppName']."</a>";
								echo "</br>";
							}
							echo "</p>";
							echo "</div>";		
					
							
							
							echo 	"<div class='col-md-6'>";
							echo		"<h1 class='intro-text text-center'><strong>National Opportunities</strong></h1>";
							echo    	"<hr>";
							$querynat = "SELECT * FROM Careers C, Opportunity O WHERE C.careerID = 'dentist' AND O.careerID = 'dentist' AND O.oppType = 'National'"; 
						
							$nat = mysqli_query($mysql_handle, $querynat) or die("Result die");
							if(!$nat){
								die('Coult not');
							}
							echo "<p class='text-center'>";
							while($row4 = mysqli_fetch_array($nat)){  //Show Schools
								echo "<a href=".$row4['oppLink'].">".$row4['oppName']."</a>";
								echo "</br>";
							}	
							echo "</p>";
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
         <div class="footer-container">
             <div class="row">
                 <div class="footer-col-left text-center">
                     <ul class="nav footer-navbar-left">
                         <li class="menu-items" style="color: black"><a href="contact.php">Contact Us</a></li>
                     </ul>
                     <ul class="nav footer-col-right">
                         <li>&copy; 2017 Oregon Deparment of Eudcation</li>
                     </ul>
                 </div>
             </div>
         </div>
      </footer>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	<script> 
	
	 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	 ga('create', 'UA-97186407-1', 'auto');
	 ga('send', 'pageview');

	
	</script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
