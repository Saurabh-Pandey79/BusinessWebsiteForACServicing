<?php
         if(isset($_POST["submit"])){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "aspdatabase";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 


$name = $_POST['name'];
$number = $_POST['number'];
$address = $_POST['address'];
$need = $_POST['need'];
$feedback = $_POST['feedback'];

$sql = " insert into customerinfo(Name, PhoneNumber, Address, Need, Feedback)
values('$name', '$number', '$address', '$need', '$feedback') ";
            if (mysqli_query($conn, $sql)) {
                echo "we got your data successfully Thank you,We will try to reach you as soon as possible,Have a nice day.";
            } else {
                echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
        }
        
?>


