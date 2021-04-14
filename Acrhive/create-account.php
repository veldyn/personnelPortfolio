<div class="content">
<div class="row">
<div class="borderAroundForm">
    <div class="col-sm 8 text-center">
      <form action="register.php" id="regForm" method="post">
        <h1 align="center">Create an Account</h1>
        <div class="border">
          <div class="col-sm 6 text-center">
                <div class="row">
                    <input type="text" placeholder="First Name" name="firstName" id="firstName" required>&nbsp;&nbsp;&nbsp;
                    <input type="text" placeholder="Last Name" name="lastName" id="lastName" required>
                </div>
            </div>
            <br>
            <div class="col-sm 6 text-center">
                <div class="row">
            <input type="text" name="emailAddress" placeholder="Email-Address" id="emailAddress" required>
            </div>
            </div>
            <br>
            <div class="col-sm 6 text-center">
                <div class="row">
            <input type="text"  placeholder="Home Address" name="address" id="address" required>
            </div>
            </div>
            <br>
            <div class="col-sm 6 text-center">
                <div class="row">
                <label>User Role:</label><br>
           	<input type="radio" name="userRole" id="e" value= "e" required>
		<label for="Employer">Employer</label><br>
           	<input type="radio" name="userRole" id="s" value= "s" required>
                <label for="Student">Student</label>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            </div>
            <br>
            <div class="col-sm 6 text-center">
                <div class="row">
            <input placeholder="Username" type="text" name="username" id="username" required>
            </div>
            </div>
            <br>
            <div class="col-sm 6 text-center">
                <div class="row">
            <input placeholder="Password" type="text" name="password" id="password" required>
            <br><br>
                <p align="center">
                    <input class="submitButton" align="center" type="submit" value="Submit" name="submit">
                </p
                </div>
            </div>
            </div>
      </form>
</div>
</div>
</div>
