<?php
//load the database configuration file
include 'dbConfig.php';

if(isset($_POST['importSubmit'])){
    
    //validate whether uploaded file is a csv file
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 
    'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            //skip first line
            fgetcsv($csvFile);
            
            //parse data from csv file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                //check whether careers already exists in database with same careerID
                $prevQuery = "SELECT careerID FROM CareerLink WHERE careerID= '".$line[2]."' AND schoolID = '".$line[1]."'";
                $prevResult = $db->query($prevQuery);
                if($prevResult->num_rows > 0){
                    //update member data
                    $db->query("UPDATE CareerLink SET CID = '".$line[0]."', schoolID = '".$line[1]."', careerID = '".$line[2]."'  
                    WHERE CID = '".$line[0]."' ");
                }else
                {
					$careerQuery = "SELECT careerID FROM Careers WHERE careerID= '".$line[2]."'";
					$careerResult = $db->query($careerQuery);
					if($careerResult->num_rows > 0){

						 $schoolQuery = "SELECT schoolID FROM Schools WHERE schoolID = '".$line[1]."'";
						 $schoolResult = $db->query($schoolQuery);
						 if($schoolResult->num_rows > 0){

							  //insert Careers data into database
							  $db->query("INSERT INTO CareerLink (CID, schoolID, careerID)
                              VALUE ('".$line[0]."','".$line[1]."','".$line[2]."')");
						}else
						{
							echo "ERROR! School does not exist in the database. Please add school and try again.";						
						}
					}else
					{
						echo "ERROR! Career does not exist in the database. Please add career and try again.";		
					}
                }
            }
            
            //close opened csv file
            fclose($csvFile);

            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

//redirect to the listing page
header("Location: indexCareerLinks.php".$qstring);