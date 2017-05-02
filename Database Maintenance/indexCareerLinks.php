<?php
//load the database configuration file
include 'dbConfig.php';

if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Members data has been inserted successfully.';
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}
?>
<div class="container">
    <?php if(!empty($statusMsg)){
        echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
    } ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            Navigation
            <a href="index.php" style= "padding:20px">Import Career Path</a>
			<a href="indexOpportunity.php" style= "padding:20px">Import Opportunities</a>
			<a href="indexSchools.php" style= "padding:20px">Import Schools</a>
			<a href="indexCareerLinks.php" style= "padding:20px">Import Career and Schools Link</a>
			<a href="indexDelete.php" style= "padding:20px">Delete Career Path</a>
        </div>
        <div class="panel-body">
            <form action="importCareerLinks.php" method="post" enctype="multipart/form-data" id="importFrm">
                <input type="file" name="file" />
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
            </form>
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>CID</th>
                      <th>schoolID</th>
					            <th>careerID</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    //get records from database
                    $query = $db->query("SELECT * FROM CareerLink");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>
                    <tr>
                      <td><?php echo $row['CID']; ?></td>
                      <td><?php echo $row['schoolID']; ?></td>
                      <td><?php echo $row['careerID']; ?></td>
                    </tr>
                    <?php } }else{ ?>
                    <tr><td colspan="5">No member(s) found.....</td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>