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
                //check whether school already exists in database with same schoolID
                $prevQuery = "SELECT schoolID FROM Schools WHERE schoolID = '".$line[0]."'";
                $prevResult = $db->query($prevQuery);
                if($prevResult->num_rows > 0){
                    //update member data
                    $db->query("UPDATE Schools SET schoolID = '".$line[0]."', schoolName = '".$line[1]."', url = '".$line[2]."'  
                    WHERE schoolID = '".$line[0]."' ");
                }else
                {
                    //insert Schools data into database
                    $db->query("INSERT INTO Schools (schoolID, schoolName, url)
                              VALUE ('".$line[0]."','".$line[1]."','".$line[2]."')");
                              
                   //$db->query("INSERT INTO members (name, email, phone, created, modified, status) 
                   //VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[3]."','".$line[4]."')");
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
header("Location: indexSchools.php".$qstring);