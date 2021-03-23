<head>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'> 
    <meta charset="utf-8">
    <title>Personnel Portfolio</title>
    <link rel='stylesheet' href='style1.css'>
</head>
<body style="background: #e1e1e1;">
<div id="search_container">
            <div id="listing_label">
                <h1>Internships</h1>
            </div>

            <div id="filter_result">
                <h2>Filter Results</h2>
            </div>
        </div>

        
<?php 
include 'php/db_connection.php';
$conn = OpenCon();
$sql = "SELECT company_name, position_title, locationInt, position_fieldID, description, additional_information from listing2";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $record = mysqli_fetch_assoc($resultset)){
    ?>




<div class='mainbody'>




 
        <div id="listing_container">
            
            <div id="job_listing_container">
                
                
            </div>
            <div id="job_listing_container">
                <div class = "company logo">
                <img width=100 height="100" alt="<?php echo $record['company_name']; ?> Logo" src="/images/<?php echo $record['company_name'];?>.png">
                </div> 
                <div id="listing_Text">
                <p><?php echo $record['position_title']; ?>
                    <br><?php echo $record['company_name']; ?>
                    <br><?php echo $record['locationInt']; ?>
                    <br><?php echo $record['description']; ?>
                </p>
                </div>
            </div>
            
            

        </div>
        
        

        </div>

      
    
    

    <main>
        
    </main>


</body>
</html>
<?php } ?>