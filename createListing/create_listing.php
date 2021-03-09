<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Create Listing</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" href="css/create_listing.css">

</head>

<body>
    <?php include 'php/navbar.php'; ?>
    <div id = "page-container">
        <div id="content-wrap">
    <main>
        <div class="create_listing_heading_container">
            <h1 style="text-align: center;">New Listing</h1>
        </div>

        <div class="create_listing_form_container">
            <div class="creating_listing_content_container">
                <form action="php/createNewList.php" id="lisForm" method="post">
                    <div class="create_listing_form_table_container">

                        <table>
                            <tr>
                                <td>
                                    <label for="position_title">Company name</label>
                                </td>
                                <td>
                                <input type="text" class="width" id="company_name" name="company_name" placeholder="Company name" required >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="position_ID">Postition Title</label>
                                </td>
                                <td>
                                <input type="text" class="width" id="position_title" name="position_title" placeholder="Position Title" required >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="location">Location</label>
                                </td>
                                <td>
                                <input type="text" class="width" id="locationInt" name="locationInt" placeholder="Location" required >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="location">Position Field</label>
                                </td>
                                <td class="width"><select class="width" id="position_field" name="position_field" required >
                                                    <option>IT</option>
                                                    <option>Engineering</option>
                                                    <option>Meidcal</option>
                                                    <option>Culinary</option>
                                                    <option>Art/Design</option>
                                                </select></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">
                                    <label for="description">Description</label>
                                </td>
                                <td>
                                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter the description" required></textarea>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="create_listing_form_right_container">
                        <table>
                            <tr>
                                <td>
                                    <label for="additional_information">Additional Information</label>
                                </td>
                                <td>
                                    <textarea name="additional_information" id="additional_information" cols="50" rows="31" placeholder="Additional information"></textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="create_listing_button_continer">
                    <p align="center">
                    <input align="center" class="width1" type="submit" value="Submit" name="submit">
                    </p>
                    </div>
                </form>
            </div>
            
        </div>
        </div>
        </div>
    </main>

    <footer>
    <?php include 'php/footer.php'; ?>
    </footer>
</div>
</body>

</html>