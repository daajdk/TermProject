<?php
/* Web Programming and Databases Term Project
   by John Costantino and Kevin McCarthy
   ConnectDB.php file to initiate connection
   with database to be used for project */


	function connectDB() {
        // Create connection
        $dbh = mysqli_connect("elvis.rowan.edu","mccarthyk1","password1","mccarthyk1");
		// Check connection
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: ".mysqli_connect_error().'<br>';
		}
        else 
        {
            echo "Successfully connected to MySQL database!".'<br>';
            return $dbh;
        }
    }
    
    function disconnectDB($dbh) {
        // Close connection
        if (mysqli_close($dbh)){
            echo "Database connection successfully closed".'<br>';
        }
        else {
            echo "Error disconnecting from database!!!".'<br>';
        }
    }
?>
