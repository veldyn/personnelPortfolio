<!DOCTYPE html>
<html lang="en">

<head>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <meta charset="utf-8">
    <title>Personnel Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
  <body>
       <?php include 'header.php'; ?>
              
    <div class="content">
      <br><br>
      <form action="connection.php" id="regForm" method="post">
        <h1 align="center">Create an Account</h1>
        <table>
          <tr>
            <td class="width2">First Name:</td>
            <td class="width"><input class="width" type="text" name="firstName" id="firstName" required></td>
          </tr>
          <tr>
            <td class="width2">Last Name:</td>
            <td class="width"><input class="width" type="text" name="lastName" id="lastName" required></td>
          </tr>
          <tr>
            <td class="width2">Email-Address:</td>
            <td class="width"><input class="width" type="text" name="emailAddress" id="emailAddress" required></td>
          </tr>
          <tr>
            <td class="width2">Address:</td>
            <td class="width"><input class="width" type="text" name="address" id="address" required></td>
          </tr>
          <tr>
            <td class="width2">Username:</td>
            <td class="width"><input class="width" type="text" name="username" id="username" required></td>
          </tr>
          <tr>
            <td class="width2">Password:</td>
            <td class="width"><input class="width" type="text" name="password" id="password" required></td>
          </tr>
        </table>
        <br>
        <p align="center">
        <input align="center" class="width1" type="submit" value="Submit" name="submit">
        </p>
      </form>
    </div>
  </body>
</html>




