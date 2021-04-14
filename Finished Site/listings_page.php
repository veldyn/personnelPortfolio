
<!DOCTYPE html>
<html>

<head>
    <title>Internships</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        #companyName {
            font-size: 30px;
        }
        
        .description_text {
            margin: 10px;
        }
    </style>       


</head>



<body>
    <br><br><br>
    <div class="container">
	<?php 
		include 'php/db_connection.php';
		$conn = OpenCon();
		$sql = "SELECT company_name, position_title, locationInt, position_fieldID, listingID,  description, additional_information from listing2";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
		while( $record = mysqli_fetch_assoc($resultset)){
	?>
	<div style="border: 1px solid black; border-radius: 10px;">
        <div class="card flex-row flex-wrap">
            <div class="card-header border-0">
                <img src="images/<?php echo $record['company_name'];?>.png" alt="company logo" style="float: left; width: 200px; height: 200px; margin:10px;  padding: 10px;">
            </div>
            <div class="card-block px-2">
                <h1 class="card-title" id="title"><?php echo $record['position_title']; ?></h1>
                <p class="card-text" id="companyName"><strong><?php echo $record['company_name']; ?></strong></p>
                <p class="card-text"><em><?php echo $record['locationInt']; ?></em></p>
                <form action="php/application.php" method="post">
		<button type="submit"  class="btn btn-primary" name="listingID" value="<?php echo $record['listingID']; ?>">Apply</a>
		</form>
            </div>
			<br><br><br>
            <div class="w-100">
                <div class="description_text">
                    <p class="card-text"><?php echo $record['description'] ?></p>
                </div>
            </div>

        </div>
	</div>
        <br>
       </body>

</html>
<?php }?>
