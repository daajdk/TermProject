<?php
/* The functions here will allow a new user account to be created. */
require_once('connectDB.php');

function createNewUser() {
    // create dbhandle
    $dbh = connectDB();

    $customerID = mysqli_real_escape_string($dbh, $_POST['customerID']);
    $firstname = mysqli_real_escape_string($dbh, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($dbh, $_POST['lastname']);
    $city = mysqli_real_escape_string($dbh, $_POST['city']);
    $phone = mysqli_real_escape_string($dbh, $_POST['phone']);
    $password = mysqli_real_escape_string($dbh, $_POST['password']);

    $sql = "insert into customer (customerID, fname, lname, phone)
            values ('$customerID', '$firstname', '$lastname', '$phone')";

    if (!mysqli_query($dbh,$sql))
    {
        die('Error: '.mysqli_error($dbh).'<br>');
    }
    else
    {
        echo "1 record added".'<br>';
        $sql = "insert into newUser (customerID, firstname, lastname, city, phone, password)
                values ('$customerID', '$firstname', '$lastname', '$city', '$phone', '$password')";
        $result = mysqli_query($dbh,$sql);
        if(!$result)
        {
            die('Error: '.mysqli_error($dbh).'<br>');
        }
        else
        {
            while ($row = $result->fetch_assoc()) {
                echo $row['customerID'].'<br>';
            }
        }
    }
}

if(isset($_POST['register']))
{
    echo "POST submit IS set".'<br>';
    createNewUser();
}

?>
