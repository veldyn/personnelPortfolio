<?php include 'header.php';


if($_GET['page'] == "jobs"){

include("listings_page.php");

}else if($_GET['page'] == "listings"){

include("create_listing.php");

}else if($_GET['page'] == "login"){

include("login2.php");

}else if($_GET['page'] == "createAccount"){

include("create_account.php");

}else if($_GET['page'] == "logout"){

include("logout.php");

}else if($_GET['page'] == "employer"){

include("employer_profile.php");

}else if($_GET['page'] == "profile"){

include("profile_page1.php");

} else if($_GET['page'] == "aboutUs") {
	include("about_us.php");
} else if($_GET['page'] == "contactUs") {
	include("contact_us.php");
}

else{

include("home.php");

}
if($_GET['page'] != "jobs"){

include("footer.php");
}

?>
