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
                //check whether Careers already exists in database with same careerID
                $prevQuery = "SELECT careerID FROM Careers WHERE careerID = '".$line[0]."'";
                $prevResult = $db->query($prevQuery);
                if($prevResult->num_rows > 0){
                    //update member data
                    $db->query("UPDATE Careers SET careerID = '".$line[0]."', careerName = '".$line[1]."', entryEdu = '".$line[2]."', 
                    compEdu = '".$line[3]."', category = '".$line[4]."', statistics = '".$line[5]."', bodyText = '".$line[6]."', 
                    img = '".$line[7]."', caption = '".$line[8]."', url = '".$line[9]."'  
                    WHERE careerID = '".$line[0]."' ");
                }else
                {
                    //insert Careers data into database
                    $db->query("INSERT INTO Careers (careerID, careerName, entryEdu, compEdu, category, statistics, bodyText, img, caption, url)
                              VALUE ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."',
                              '".$line[7]."', '".$line[8]."', '".$line[9]."')");
                              
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
header("Location: index.php".$qstring);