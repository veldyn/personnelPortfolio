<?php
session_start();
include "php/connection.php";
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                    <img src="images/<?php echo $username;?>.jpg" class="rounded-circle avatar-xl img-thumbnail" alt="profile-image">

                    <h4 class="mb-0">John Smith</h4>
                    <p class="text-muted">@johnsmith</p>


                    <!-- <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                    <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button> -->

                    <div class="text-left mt-3">
                        <h4 class="font-13 text-uppercase">About Me :</h4>
                        <p class="text-muted font-13 mb-3" contenteditable="true">
                            Computer Science sophomore skilled in working with multiple programming languages and utilizing
                            troubleshooting and problem solving skills to solve technology issues. Quickly and accurately learn and
                            perform complex tasks. Strong team player with the proven capability to multitask.
                        </p>
                        <p class="text-muted mb-2 font-13"><strong>School: </strong> <span class="ml-2" contenteditable="true">Oakland University</span></p>

                        <p class="text-muted mb-2 font-13"><strong>Major: </strong><span class="ml-2" contenteditable="true">Computer Science</span></p>

                        <p class="text-muted mb-2 font-13"><strong>Email: </strong> <span class="ml-2 " contenteditable="true">johnsmith@oakland.edu</span></p>

                        <p class="text-muted mb-1 font-13"><strong>Location: </strong> <span class="ml-2" contenteditable="true">USA</span></p>
                    </div>

                    <div class="profile_image_upload">
                        <form action="php/uploadImg.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="file" />

                            <button type="submit" name="submit" style="float: left;">Upload Profile Image</button>
                            <br>
                        </form>
                    </div>

                </div>
                <!-- end card-box -->

                <div class="card-box">
                    <h4 class="header-title">Skills</h4>
                    <p class="mb-3"><span contenteditable="true">Programming Languages</span>:<span contenteditable="true"> Visual Basic, Java, SQL</span></p>
                    <p class="mb-3"><span contenteditable="true">Software Applications</span>:<span contenteditable="true"> Microsoft Word, Excel, PowerPoint, Access, JOOMLA</span></p>
                    <p class="mb-3"><span contenteditable="true">Operating Systems</span>:<span contenteditable="true"> Windows 8</span></p>
                    <!-- <div class="pt-1">
                        <h6 class="text-uppercase mt-0">Java <span class="float-right">90%</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="sr-only">90% Complete</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-2 pt-1">
                        <h6 class="text-uppercase">C <span class="float-right">70%</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                <span class="sr-only">70% Complete</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-2 pt-1">
                        <h6 class="text-uppercase">Japanese <span class="float-right">50%</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                <span class="sr-only">50% Complete</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-2 pt-1">
                        <h6 class="text-uppercase">Spanish <span class="float-right">30%</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                <span class="sr-only">30% Complete</span>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="mt-2 pt-1">
                        <h6 class="text-uppercase">ReactJs <span class="float-right">72%</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                                <span class="sr-only">72% Complete</span>
                            </div>
                        </div>
                    </div> -->

                </div>
                <!-- end card-box-->

            </div>
            <!-- end col-->

            <div class="col-lg-8 col-xl-8">
                <div class="card-box">
                    <!-- <ul class="nav nav-pills navtab-bg">
                        <li class="nav-item">
                            <a href="#about-me" data-toggle="tab" aria-expanded="true" class="nav-link ml-0 active">
                                <i class="mdi mdi-face-profile mr-1"></i>About Me
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="mdi mdi-settings-outline mr-1"></i>Settings
                            </a>
                        </li>
                    </ul> -->

                    <div class="tab-content">

                        <div class="tab-pane show active" id="about-me">

                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-briefcase mr-1"></i> Resume
                            </h5>


                            <iframe src="resumes/<?php echo $username;?>.pdf" style="width:710px; height:900px;" frameborder="0"></iframe>

                            <div class="resume_upload_button">
                                <form action="php/uploadResume.php" method="post" enctype="multipart/form-data">
                                    <input type="file" name="file" />
                                    <button type="submit" name="submit">Upload Resume</button>
                                </form>
                            </div> <br>

                            <h5 class="mb-3 mt-4 text-uppercase"><i class="mdi mdi-cards-variant mr-1"></i> Projects
                            </h5>
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Project Name</th>
                                            <th>Start Date</th>
                                            <th>Due Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td contentEditable="true">Website Design Project</td>
                                            <td contentEditable="true">January 20xx</td>
                                            <td contentEditable="true">April 20xx</td>
                                            <td><span class="badge badge-info" contentEditable="true">Done</span></td>
                                        </tr>
                                        <!-- <tr>
                                            <td>Data Structures Project</td>
                                            <td>November 2020</td>
                                            <td>November 2020</td>
                                            <td><span class="badge badge-success">Done</span></td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="mb-3 mt-4 text-uppercase"><i class="mdi mdi-cards-variant mr-1"></i> Work & Volunteer Experience
                            </h5>
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Company Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td contentEditable="true">Oakland University</td>
                                            <td contentEditable="true">April 20xx</td>
                                            <td contentEditable="true">Present</td>
                                            <td contentEditable="true">Help Desk Technician</td>
                                        </tr>
                                        <tr>
                                            <td contentEditable="true">ABC Company</td>
                                            <td contentEditable="true">August 20xx</td>
                                            <td contentEditable="true">April 20xx</td>
                                            <td contentEditable="true">Cashier</td>
                                        </tr>
                                        <tr>
                                            <td contentEditable="true">XYZ Restaurant</td>
                                            <td contentEditable="true">April 20xx</td>
                                            <td contentEditable="true">August 20xx</td>
                                            <td contentEditable="true">Server/Bartender</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- end timeline content-->

                        <div class="tab-pane" id="settings">
                            <form>
                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">First Name</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="Enter first name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">Last Name</label>
                                            <input type="text" class="form-control" id="lastname" placeholder="Enter last name">
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="userbio">Bio</label>
                                            <textarea class="form-control" id="userbio" rows="4" placeholder="Write something..."></textarea>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="useremail">Email Address</label>
                                            <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                                            <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                            <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building mr-1"></i> Company Info</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="companyname">Company Name</label>
                                            <input type="text" class="form-control" id="companyname" placeholder="Enter company name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cwebsite">Website</label>
                                            <input type="text" class="form-control" id="cwebsite" placeholder="Enter website url">
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth mr-1"></i> Social</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="social-fb">Facebook</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="social-fb" placeholder="Url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="social-tw">Twitter</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="social-tw" placeholder="Username">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="social-insta">Instagram</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="social-insta" placeholder="Url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="social-lin">Linkedin</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="social-lin" placeholder="Url">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="social-sky">Skype</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-skype"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="social-sky" placeholder="@username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="social-gh">Github</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-github"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="social-gh" placeholder="Username">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="text-right">
                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                </div>
                            </form>
                        </div>
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
