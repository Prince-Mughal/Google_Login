<?php

/* Server Name  */
	$DB_HOST = "localhost";
/* Account Name */
        $DB_USER = "root";
/* Password */
        $DB_PASS = "786Diana";
/* Database Name */
        $DB_NAME = "Google";
/* Connect to Database */
	$CONNECTION = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
        /* Check Connection */
        if(!$CONNECTION){
           /* Capture Error */
           $errMSG = mysqli_error($CONNECTION);
           /* Display Error */
           echo $errMSG;
           /* Stop Execution */
           die("Try Again...");
        }else{
            /* Connected to Server */
            echo "Connection Established.<br>";}

/* Full Name */
	$NAME  = $_POST['Fname']." ";
        $NAME .= $_POST['Lname'];
/* Username */
	$USERNAME = $_POST['Username'];
/* Password */
	$PASS = $_POST['Password'];
/* Date of Birth */
	$DATE  = $_POST['Day']."-";
	$DATE .= $_POST['Month']."-";
	$DATE .= $_POST['Year'];
/* Gender */
	$GENDER = $_POST['Gender'];
/* Phone */
	$PHONE = $_POST['Phone'];
/* Current Email */
	$C_EMAIL = $_POST['CEmail'];
/* Location */
	$LOC = $_POST['Location'];
/* Insert data */
	$Query = "INSERT INTO Account (Name, Username, Password, DOB, Gender, Phone, CEmail, Location";
        $Query .=") VALUES ('$NAME','$USERNAME','$PASS','$DATE','$GENDER','$PHONE','$C_EMAIL','$LOC')";
        $Result = mysqli_query($CONNECTION,$Query);
        /* Check the Query */
        if($Result){
            echo "Sucessfully Inserted.<br>";
        }else{
            die("Couldn't Execute Query.<br>");}
 

/* Read entire table */
	$Query = "SELECT * FROM Account";
        $Result = mysqli_query($CONNECTION,$Query);
        /* Check the Query */
        if($Result){
            echo "Sucessfully Retrieved.<br>";
        }else{
            die("Couldn't Execute Query.<br>");}
        echo "<table border='2' style='border: 1px solid black;'>";
        echo "<tr><th>Name</th><th>Username</th><th>PASS</th><th>DOB</th><th>Gender</th><th>Phone</th><th>Curren Email</th><th>Location</th>";
        $NROW = mysqli_num_rows($Result);
        if($NROW == 0){ die("Error: Database is Empty.<br>");}
        for($I = 0; $I < $NROW ; $I++){
	    $ROW = mysqli_fetch_assoc($Result);
            $LINE  = "<tr><td>".$ROW["Name"]."</td><td>".$ROW["Username"]."</td><td>".$ROW["Password"]."</td><td>".$ROW["DOB"]."</td><td>";
            $LINE .= $ROW["Gender"]."</td><td>".$ROW["Phone"]."</td><td>".$ROW["CEmail"]."</td><td>".$ROW["Location"]."</td></tr><br>";
            echo $LINE;
        }
        echo "</table>";
/* Close Connection */
        mysqli_close($CONNECTION);


 ?>
