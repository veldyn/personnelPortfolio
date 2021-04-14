<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="asdf" href="/images/pp.png" />
    <title>My Profile</title>


    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="bootstrapHeader_style.css">
    <link rel="stylesheet" href="bootstrapFooter_style.css">
    <link rel="stylesheet" href="bootstrapProfilePage_style.css">

</head>

<body>
 <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xl-4">
                <div class="card-box text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-circle avatar-xl img-thumbnail" alt="profile-image">

                    <h4 class="mb-0">Amazon</h4>
                    <p class="text-muted">@amazon</p>


                    <!-- <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                    <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button> -->

                    <div class="text-left mt-3">
                        <h4 class="font-13 text-uppercase">About Company :</h4>
                        <p class="text-muted font-13 mb-3">
                            Monopoly over e-commerce
                        </p>

                        <p class="text-muted mb-1 font-13"><strong>Location: </strong> <span class="ml-2">USA</span></p>
                    </div>

                    <div class="profile_image_upload">
                        <form action="uploadImg.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="file" />

                            <button type="submit" name="submit" style="float: left;">Upload Profile Image</button>
                            <br>
                        </form>
                    </div>

                </div>
                <!-- end card-box -->

                <div class="card-box">
                    <h4 class="header-title">Job Fields: </h4>
                    <p class="mb-3">IT</p>
                    <p class="mb-3">Engineering</p>

                    

                </div>
                <!-- end card-box-->

            </div>
            <!-- end col-->

            <div class="col-lg-8 col-xl-8">
                <div class="card-box">
                
                    

                    <div class="tab-content">
                        
                    <div class="container">
                       
                        <div class="tab-pane show active" id="about-me">

                            
                            <?php 
                                include 'php/db_connection.php';
                                $conn = OpenCon();
                                $sql = "SELECT company_name, position_title, locationInt, position_fieldID, listingID,  description, additional_information from listing2 where company_name = 'Amazon'";
                                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                                while( $record = mysqli_fetch_assoc($resultset)){
                            ?>
                            <div class="card flex-row flex-wrap">
                                <div class="card-header border-0">
                                    <img src="images/<?php echo $record['company_name'];?>.png" alt="company logo" style="float: left; height: 100px; ">
                                </div>
                                <div class="card-block px-2">
                                    <h3 class="card-title" id="title"><?php echo $record['position_title']; ?></h3>
                                    <p class="card-text" id="companyName"><strong><?php echo $record['company_name']; ?></strong></p>
                                    <p class="card-text"><em><?php echo $record['locationInt']; ?></em></p>

                                </div>
                                <h3>Applicants:</h3>
                                <br>
                                <div class="w-100">
				<?php	
					$currentID = $record['listingID'];
					$conn=OpenCon();
					$sqlQuery = "SELECT listingID FROM applications";
					$listingIDSet = mysqli_query($conn,$sqlQuery) or die("database error:". mysqli_error($conn));
					while( $idRecord = mysqli_fetch_assoc($listingIDSet)){
						$currentLoopID = $idRecord['listingID'];
												
						if ($currentLoopID == $currentID) {
							$applicantQuery = "SELECT applicantID from applications where listingID = '$currentID'";
							$applicantIDSet = mysqli_query($conn,$applicantQuery) or die("database error:". mysqli_error($conn));
							while( $applicantIDRecord = mysqli_fetch_assoc($applicantIDSet)){
								$currentAppID = $applicantIDRecord['applicantID'];
								$conn2=mysqli_connect('localhost','root','p3rsonn3lp0rt4','users');
								#$db = mysqli_select_db("users",$conn2);
								$applicantName = "SELECT firstName, lastName from accountCreation where id = '$currentAppID'";
								$appName = mysqli_query($conn2,$applicantName) or die("database error:". mysqli_error($conn));
								while($applicantNameSet = mysqli_fetch_assoc($appName)){
								?>
								<p>
                                        			 Applicant Name: <?php  echo $applicantNameSet['firstName'];?> <?php echo $applicantNameSet['lastName'];?>
                                        			<a href="#" class="btn btn-primary">Accept</a> <a href="#" class="btn btn-primary">Reject</a>
                                    				</p>
								
								<?php
								}
						}			
						}
						else {
						
						}
					?>
				
				
				
                                
				
                            </div>
                        
                        
			<?php } ?>
			<?php } ?>
                        <!-- end timeline content-->

                        
                        <!-- end settings content-->

                    </div>
                    <!-- end tab-content -->
                </div>
                <!-- end card-box-->

            </div>
            <!-- end col -->
        </div>

    </div>
    <br><br><br><br><br><br>


</body>

</html>
