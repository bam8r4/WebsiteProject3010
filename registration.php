
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Website Project 3010</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="inputValidate.php"></script>
    <link rel="stylesheet" type="text/css" href="styles.css" />



</head>

<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $addressErr = $zipErr = $firstnameErr = $lastnameErr = $cityErr = $stateErr = $phoneErr = $marErr = $dobErr = $passErr = "";
$name = $em = $gen = $comment = $fname = $lname = $add1 = $add2 = $cit = $stat = $ph = $marital = $bd = "";

$isValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {



 if(isset($_POST['submitted'])) {

     $name = $_POST['username'];
     $pword = $_POST['password'];
     $fname = $_POST['firstname'];
     $lname = $_POST['lastname'];
     $add1 = $_POST['address1'];
     $add2 = $_POST['address2'];
     $cit = $_POST['cit'];
     $sta = $_POST['stat'];
     $zp = $_POST['zi'];
     $ph = $_POST['phone'];
     $em = $_POST['emai'];
     $gen = $_POST['gender'];
     $mar = $_POST['marital'];
     $bd = $_POST['do'];

     $isValid = true;


     if (empty($name)) {
         $nameErr = "This field is required";
         $isValid = false;
     } else {
         // check if name only contains letters and whitespace
         if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
             /*
             The preg_match() function searches a string for pattern,
             returning true if the pattern exists, and false otherwise.
             */
             $nameErr = "Only letters and white space allowed";
             $isValid = false;
         }
     }

     if (empty($_POST["password"])) {
         $passwordErr = "This field is required";
         $isValid = false;
     } else {

         if (!preg_match("/^[a-zA-Z0-9]*$/", $pword)) {
             $passwordErr = "Only letters and numbers allowed and passwords must mach";
             $isValid = false;
         }
     }

     if (empty($_POST["firstname"])) {
         $fnameErr = "This field is required";
         $isValid = false;
     } else {

         if (!preg_match("/^[a-zA-Z]*$/", $fname)) {
             $fnameErr = "Only letters allowed";
             $isValid = false;
         }
     }

     if (empty($_POST["lastname"])) {
         $lnameErr = "This field is required";
         $isValid = false;
     } else {

         if (!preg_match("/^[a-zA-Z]*$/", $lname)) {
             $lnameErr = "Only letters allowed";
             $isValid = false;
         }
     }

     if (empty($_POST["address1"])) {
         $address1Err = "This field is required";
         $isValid = false;
     } else {

         if (!preg_match("/^[a-zA-Z0-9 ]*$/", $add1)) {
             $address1Err = "Only alphanumeric digits allowed";
             $isValid = false;
         }
     }

     if (empty($_POST["cit"])) {
         $cityErr = "This field is required";
         $isValid = false;
     } else {

         if (!preg_match("/^[a-zA-Z0-9 ]*$/", $cit)) {
             $cityErr = "Only letters allowed";
             $isValid = false;
         }
     }

     if (empty($_POST["stat"])) {
         $stateErr = "This field is required";
         $isValid = false;
     } else {

         if (!preg_match("/^[a-zA-Z ]*$/", $sta)) {
             $stateErr = "Only letters allowed";
             $isValid = false;
         }
     }

     if (empty($_POST["zi"])) {
         $zipcodeErr = "This field is required";
         $isValid = false;
     } else {

         if (!preg_match("/^\d{1,5}$/", $zp)) {
             $zipcodeErr = "Only 5 numbers allowed";
             $isValid = false;
         }
     }

     if (empty($_POST["phone"])) {
         $phoneErr = "Phone Number is required";
         $isValid = false;
     } else {

         if (!preg_match("/^\d{1,10}$/", $ph)) {
             $phoneErr = "Only 10 numbers allowed";
             $isValid = false;
         }
     }

     if (empty($_POST["emai"])) {
         $emailErr = "Email is required";
         $isValid = false;
     } else {

         // check if e-mail address is well-formed
         if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
             $emailErr = "Invalid email format";
             $isValid = false;
         }
     }

     if (empty($_POST["gender"])) {
         $genderErr = "Gender is required";
         $isValid = false;
     }

     if (empty($_POST["marital"])) {
         $marErr = "This field is required";
         $isValid = false;
     }

     if (empty($_POST["do"])) {
         $dobErr = "This field is required";
         $isValid = false;
     }


     if ($isValid = true) {

         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "project";

         // Create connection
         $conn = new mysqli($servername, $username, $password, $dbname);
         // Check connection
         if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
         }

         $sql = "INSERT INTO registration (userName, password, firstName, lastName, address1, address2, city, state, zipCode, phone, email, gender, maritalStatus, dateOfBirth)
        VALUES ('$name', '$pword', '$fname', '$lname', '$add1', '$add2', '$cit', '$sta', '$zp', '$ph', '$em', '$gen', '$mar', '$bd' )";

         if ($conn->query($sql) === TRUE) {
             echo "New record created successfully";
         } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
         }

         $conn->close();
     }
 }
}
?>

<div class="container-fixed">

    <div class="header">

        <img   class="img-responsive" id="climate" src="melt6.jpg" alt="Melting ice caps.">

        <img   class="img-responsive" id="climate1" src="earth2.jpg" alt="A picture of planet earth.">

        <img   class="img-responsive" id="climate2" src="melt7.jpg" alt="More melting polar ice.">

    </div>

</div>

<div class="container-fluid">

    <div class="row content">

        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 sidenav">

            <ul class="sideul">

                <a href="http://localhost/project1/home.html">Home</a>
                <a href="http://localhost/project1/registration.php">Registration</a>
                <a href="http://localhost/project1/animations.html">Animations</a>
                <a href="https://climate.nasa.gov/evidence/" target="_blank">Evidence</a>

            </ul>

        </div>


        <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 registration">

            <form method="post" action="registration.php">
                <input type="hidden" name="submitted" value="true"/>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 regstuff">

                    <label>
                        Username:<br/>
                        <input id="first" class="input" type="text" name="username" minlength="6" maxlength="50" value="<?php echo $name;?>" oninput="checkinput()" required>
                        <span class='error'>* <?php echo $nameErr;?></span>
                        <p id="usermess" class="alert" hidden>Need more than 6 characters.</p>
                    </label><br/>

                    <label>
                        Password:<br/>
                        <input id="pass" class="input" type="password" name="password" minlength="8" maxlength="50" oninput="checkinput2()" required>
                        <span class='error'>* <?php echo $passErr;?></span>
                        <p id="passmess" class="alert" hidden>Needs upper case. Lowercase. Number. Special Character.</p>
                    </label><br/>

                    <label>
                        Repeat Password:<br/>
                        <input id="rpass" class="input" type="password" name="rpassword" minlength="8" maxlength="50"  oninput="checkinput3()" required>
                        <p class= "alert" id="conpass" hidden>Passwords don't match.</p>
                        <span class='error'>* <?php echo $passErr;?></span>
                    </label><br/>

                    <label id="firstname">
                        First name:<br/>
                        <input  id="beg" type="text" name="firstname"  maxlength="50" class="input" value="<?php echo $fname;?>" oninput="checkinput4()" required>
                        <span class='error'>* <?php echo $firstnameErr;?></span>
                    </label><br/>

                    <label id="lastname">
                        Last name:<br/>
                        <input   id="las" class="input" type="text" name="lastname"  maxlength="50" value="<?php echo $lname;?>" oninput="checkinput5()" required>
                        <span class='error'>* <?php echo $lastnameErr;?></span>
                    </label><br/>

                    <label>
                        Address 1:<br/>
                        <input  class="input" type="text" name="address1" maxlength="100" value="<?php echo $add1;?>" oninput="checkinput6()" required>
                        <span class='error'>* <?php echo $addressErr;?></span>
                    </label><br/>

                    <label>
                        Address 2: Optional<br/>
                        <input id="add" class="input" type="text" name="address2" maxlength="100">
                    </label><br/>

                    <label>
                        City:<br/>
                        <input  id="city" class="input" type="text" name="cit" maxlength="50" value="<?php echo $cit;?>" oninput="checkinput7()" required>
                        <span class='error'>* <?php echo $cityErr;?></span>
                    </label><br/>


                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 regstuff">

                    <label>
                        State:<br/>
                        <input  id="state" name="stat" class="input" list="States" maxlength="52"  oninput="checkinputstate()" required>
                        <span class='error'>* <?php echo $stateErr;?></span>
                        <datalist id="States">
                            <option value="Missouri">
                            <option value="California">
                            <option value="Texas">
                            <option value="New York">
                            <option value="Other">
                        </datalist>
                    </label><br/>

                    <label>
                        Zipcode:<br/>
                        <input  id="zip" class="input" type="text" name="zi" minlength="5" maxlength="5"  onkeyup="replacezip()" oninput="checkinputzip()" required>
                        <span class='error'>* <?php echo $zipErr;?></span>
                    </label><br/>

                    <label>
                        Phone Number:<br/>
                        <input  id="phonenum" class="input" type="text" name="phone" maxlength="12" value="<?php echo $ph;?>" onkeyup="replacephone()" oninput="checkinputphone()" required>
                        <span class='error'>* <?php echo $phoneErr;?></span>
                    </label><br/>

                    <label>
                        Email:<br/>
                        <input id="email" class="input" type="text" name="emai"  value="<?php echo $em;?>" oninput="checkinputemail()" required>
                        <span class='error'>* <?php echo $emailErr;?></span>
                    </label><br/>

                    <label>
                        Gender:<br/>
                        <input type="radio" name="gender" value="male"  oninput="deselectGen()" required> Male<br/>
                        <input  type="radio" name="gender" value="female" oninput="deselectGen()"> Female<br/>
                        <span class='error'>* <?php echo $genderErr;?></span>

                    </label><br/>

                    <label>
                        Marital Status:<br/>
                        <input  type="radio" name="marital" value="single" oninput="deselectMar()" required> Single<br/>
                        <input  type="radio" name="marital" value="married" oninput="deselectMar()"> Married<br/>
                        <span class='error'>* <?php echo $marErr;?></span>

                    </label><br/>

                    <label>
                        Date of Birth:<br/>
                        <input  id="dob" class="input" type="date" name="do" oninput="checkinputdob()" required>
                        <span class='error'>* <?php echo $dobErr;?></span>
                    </label><br/>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 regstuff">

                    <label>
                        <button type="submit" class="submit-button" value="Submit">Submit</button>
                        <button type="reset" value="Reset">Reset</button>
                    </label>

                </div>

            </form>

            <script src="scripts.js"></script>

        </div>

    </div>

</div>

<div class="container-fixed">
    <footer class="footer">

        <a href="https://climate.nasa.gov/evidence/" target="_blank">Evidence From Nasa</a>
        <a href="https://www.ucsusa.org/global-warming" target="_blank">Union of Concerned Scientists</a>
        <a href="https://www.google.com/" target="_blank">Google</a>

    </footer>
</div>

</body>

</html>