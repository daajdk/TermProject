<?php
/* The functions here will allow a new user account to be created. */
require_once('connectDB.php');

function createNewUser() {
    // create dbhandle
    $dbh = connectDB();
    
    $username = mysqli_real_escape_string($dbh, $_POST['username']);
    $firstname = mysqli_real_escape_string($dbh, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($dbh, $_POST['lastname']);
    $city = mysqli_real_escape_string($dbh, $_POST['city']);
    $zip = mysqli_real_escape_string($dbh, $_POST['zip']);
    $password = mysqli_real_escape_string($dbh, $_POST['password']);
    
    $sql = "insert into User (username, firstname, lastname, city, zip, password)
            values ('$username', '$firstname', '$lastname', '$city', '$zip', '$password')";
            
    if (!mysqli_query($dbh,$sql))
    {
        die('Error: '.mysqli_error($dbh).'<br>');
    }
    else
    {
        echo "1 record added".'<br>';
        $sql = "select * from User;";
        $result = mysqli_query($dbh,$sql);
        if(!$result)
        {
            die('Error: '.mysqli_error($dbh).'<br>');
        }
        else
        {
            while ($row = $result->fetch_assoc()) {
                echo $row['username'].'<br>';
            }
        }
    }   
}

if(isset($_POST['submit']))
{
    echo "POST submit IS set".'<br>';
    createNewUser();
}

?>