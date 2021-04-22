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
    <script>
            function myFunction() {
            // Declare variables
            var input, filter, containerDiv, listingTag, a, i, txtValue;
            input = document.getElementById('myInput');
            filter = input.value.toUpperCase();
            containerDiv = document.getElementById("myUL");
            listingTag = containerDiv.getElementsByTagName('search-tag');
            
            
            
             //Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < listingTag.length; i++) {
                a = listingTag[i].getElementsByTagName("name-Tag")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                listingTag[i].style.display = "";
                } else {
                listingTag[i].style.display = "none";
                }
            }
            }
	function myFunction2() {
            // Declare variables
            var input, filter, containerDiv, listingTag, a, i, txtValue;
            input = document.getElementById('myInput2');
            filter = input.value.toUpperCase();
            containerDiv = document.getElementById("myUL");
            listingTag = containerDiv.getElementsByTagName('search-tag');
            
            
            
             //Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < listingTag.length; i++) {
                a = listingTag[i].getElementsByTagName("name-Tag")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                listingTag[i].style.display = "";
                } else {
                listingTag[i].style.display = "none";
                }
            }
            }


</script>
    <style>
        #companyName {
            font-size: 30px;
        }
        
        .description_text {
            margin: 10px;
	}
	
	#myInput {
		
	width:50%;	

}
	body {
	background-color:#efefef;
}
    </style>       


</head>



<body>
<h1 style="text-align:center;">Job Listings</h1>
<br>

<!--
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by companies name">
	--> 
<div class="visible-lg visible-md">
  <div class="container" style="width: 78%; margin:auto; ">
	<div class="row">
           <div id="custom-search-input" style="width: 50%; margin: auto; float:right;">
               <input type="text" style="margin: auto; width:400px;background-color:white;"  id="myInput"  onkeyup="myFunction()"  class="search-query form-control" placeholder="Search by Company Name, Location, or Job Title" />
                 <span class="input-group-btn">
                 </span>
           </div>
	</div>
 </div>
</div>
<div class="visible-sm visible-xs">
   <div class="container" style="width: 85%; margin:auto; text-align: center ">
         <div class="row">
            <div id="custom-search-input" style="width: 95%; margin: auto; text-align: center;">
                <input type="text" style="font-size: 11.5px; background-color:white; width: 325px"  id="myInput2"  onkeyup="myFunction2()"  class="search-query form-control" placeholder="Search by Company Name, Location, or Job Title" />
           </div>
         </div>
   </div>
</div>
 <br>
    <div class="container" id="myUL">
	<?php 
        include 'php/db_connection.php';
        $conn = OpenCon();
		$sql = "SELECT company_name, position_title, locationInt, position_fieldID, listingID,  description from listing2";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
		while( $record = mysqli_fetch_assoc($resultset)){
	?>
    <search-tag>
	<div style="border: 1px solid black; border-radius: 10px; margin-bottom: 15px;">
        <div class="card flex-row flex-wrap">
            <div class="card-header border-0">
                <img src="images/<?php echo $record['company_name'];?>.png" alt="company logo" style="float: left; width: 200px; height: 200px; margin:10px;  padding: 10px;">
            </div>
            <div class="card-block px-2" >
                <name-Tag>
		<h1 class="card-title" id="title"><?php echo $record['position_title']; ?></h1>
                <h1 class="card-text" id="companyName"><strong><?php echo $record['company_name']; ?></strong></h1>
                <p class="card-text"><em><?php echo $record['locationInt']; ?></em></p>
                <form action="php/application.php" method="post">
		<button type="submit"  class="btn btn-primary" name="listingID" value="<?php echo $record['listingID']; ?>">Apply</a>
		</form>
		</name-Tag>
            </div>
			<br><br><br>
            <div class="w-100">
                <div class="description_text">
                    <p class="card-text"><?php echo $record['description'] ?></p>
                </div>
            </div>

        </div>
    </div>
	</search-tag>
       
       </body>

</html>
<?php }?>
