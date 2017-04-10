<?php
						//include connection variables
						//include 'connectvarsEECS.php'; 

							$dbhost = 'mysql.cs.orst.edu';
							$dbname = 'cs440_yeja';
							$dbuser = 'cs440_yeja';
							$dbpass = '5271';

						$mysql_handle = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
?>

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

    <div class="brand"> <img src= "img/logo.png" height="120" width="120" hspace="30" />Oregon Health Science Careers</div>
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
				<h2 class="text-center">Explore Career Paths</h2>
				<ul class="nav navbar-nav">
                    <li>
                        <a href="#healthcare">Health Care</a>
                    </li>
                    <li>
                        <a href="#professional">Professional and Related</a>
                    </li>
                    <li>
                        <a href="#management">Management</a>
                    </li>
                    <li>
                        <a href="#service">Service</a>
                    </li>
                    <li>
                        <a href="#production">Production</a>
                    </li>

                </ul>
                    <!-- begin php section for career information query -->
					
				<!-- Healthcare Table -->	
				<h4>Health Care</h4>
				<div id="healthcare" class="table-responsive">
				
				<table class="table table-hover" >
					<!--<caption><h4>Health Care</h4></caption> -->
					<thead>
						<tr>
							<th style="padding-right: 150px">Careers</th>
							<th class="disable-sorting"  >Description</th>
							<th>Education</th>
						</tr>
					</thead>
                <tbody>
				<?php	
						$query = "SELECT * FROM Careers C WHERE C.category = 'Health Care'";
						$result = mysqli_query($mysql_handle, $query) or die("Result ddie");
						if(!$result){
							die('Coult not');
						}
						
						while($row = mysqli_fetch_array($result)){
							echo "<tr>";
							echo "<td style='padding-right: 20px'><a href=".$row['url']." >".$row['careerName']."</td>";
							echo "<td>".$row['bodyText']."</td>";
							echo "<td>".$row['entryEdu']."</td>";
							echo "</tr>";
						}
				?>
                </tbody>
				</table>	
				</div>	
				
				<!-- Professional Related -->	
				<div id="professional" class="table-responsive">
					<table class="table table-hover">
						<caption><h4>Professional and Related</h4></caption>
						<thead>
							<tr>
								<th style="padding-right: 150px">Careers</th>
								<th class="disable-sorting"  >Description</th>
								<th>Education</th>
							</tr>
						</thead>
					<tbody>
					<?php	
							$query = "SELECT * FROM Careers C WHERE C.category = 'Professional and Related'";
							$result = mysqli_query($mysql_handle, $query) or die("Result ddie");
							if(!$result){
								die('Coult not');
							}
							
							while($row = mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td style='padding-right: 20px'><a href=".$row['url']." >".$row['careerName']."</td>";
								echo "<td>".$row['bodyText']."</td>";
								echo "<td>".$row['entryEdu']."</td>";
								echo "</tr>";
							}
					?>
					</tbody>
					</table>		
				</div>
				
				<!-- Management -->	
				<div id="management" class="table-responsive">
					<table class="table table-hover" style="width:100%">
						<caption><h4>Management</h4></caption>
						<thead>
							<tr>
								<th style="padding-right: 150px">Careers</th>
								<th class="disable-sorting"  >Description</th>
								<th>Education</th>
							</tr>
						</thead>
					<tbody>
					<?php	
							$query = "SELECT * FROM Careers C WHERE C.category = 'Management'";
							$result = mysqli_query($mysql_handle, $query) or die("Result die");
							if(!$result){
								die('Coult not');
							}
							
							while($row = mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td style='padding-right: 20px'><a href=".$row['url']." >".$row['careerName']."</td>";
								echo "<td>".$row['bodyText']."</td>";
								echo "<td>".$row['entryEdu']."</td>";
								echo "</tr>";
							}
					?>
					</tbody>
					</table>	
				</div>
					
				<!-- Service Table -->	
				<div id="service" class="table-responsive">
					<table class="table table-hover" style="width:100%">
						<caption><h4>Service</h4></caption>
						<thead>
							<tr>
								<th style="padding-right: 150px">Careers</th>
								<th class="disable-sorting"  >Description</th>
								<th>Education</th>
							</tr>
						</thead>
					<tbody>
					<?php	
							$query = "SELECT * FROM Careers C WHERE C.category = 'Service'";
							$result = mysqli_query($mysql_handle, $query) or die("Result ddie");
							if(!$result){
								die('Coult not');
							}
							
							while($row = mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td style='padding-right: 20px'><a href=".$row['url']." >".$row['careerName']."</td>";
								echo "<td>".$row['bodyText']."</td>";
								echo "<td>".$row['entryEdu']."</td>";
								echo "</tr>";
							}
					?>
					</tbody>
					</table>	
				</div>
					
				<!-- Production -->	
				<div id="production" class="table-responsive">
					<table class="table table-hover" style="width:100%">
						<caption><h4>Production</h4></caption>
						<thead>
							<tr>
								<th style="padding-right: 150px">Careers</th>
								<th class="disable-sorting"  >Description</th>
								<th>Education</th>
							</tr>
						</thead>
					<tbody>
					<?php	
							$query = "SELECT * FROM Careers C WHERE C.category = 'Production'";
							$result = mysqli_query($mysql_handle, $query) or die("Result ddie");
							if(!$result){
								die('Coult not');
							}
							
							while($row = mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td style='padding-right: 20px'><a href=".$row['url']." >".$row['careerName']."</td>";
								echo "<td>".$row['bodyText']."</td>";
								echo "<td>".$row['entryEdu']."</td>";
								echo "</tr>";
							}
					?>
					</tbody>
					</table>
				</div>
<?
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
                         <li class="menu-items" style="color: black"><a href="contact.html">Contact Us</a></li>
                         <li class="menu-items"><a href="#">Term of Use</a></li>
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
	
<script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="js/vendor/jquery.sortelements.js" type="text/javascript"></script>
<script src="js/jquery.bdt.min.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<link href="css/vendor/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="css/jquery.bdt.css" type="text/css" rel="stylesheet">
	
	<script>
	
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-93079620-1', 'auto');
	ga('send', 'pageview');

	
	
    $(document).ready( function () {
        $('#healthcare').bdt({
            showSearchForm: 0,
            showEntriesPerPageField: 0
        });
    });
	
	$(document).ready( function () {
    $('#professional').bdt({
            showSearchForm: 0,
            showEntriesPerPageField: 0
        });
    });
	
	$(document).ready( function () {
    $('#management').bdt({
            showSearchForm: 0,
            showEntriesPerPageField: 0
        });
    });
	
	$(document).ready( function () {
    $('#service').bdt({
            showSearchForm: 0,
            showEntriesPerPageField: 0
        });
    });
	
	$(document).ready( function () {
    $('#production').bdt({
            showSearchForm: 0,
            showEntriesPerPageField: 0
        });
    });
	</script>
</body>

</html>
