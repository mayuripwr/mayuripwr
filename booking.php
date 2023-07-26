<?php

    include("connect.php");

    $location = $_POST['location'];
    $members = $_POST['members'];
    $fromdate = $_POST['fromdate'];
    $todate = $_POST['todate'];
    $details = $_POST['details'];


    $insert = mysqli_query($connect, "INSERT INTO booking (location, members, fromdate, todate, details) VALUES ('$location', '$members', '$fromdate', '$todate', '$details')");
        if($insert){
            echo '
            <script>
                alert("Booking Successfull!");
                window.location = "../";
            </script>
        ';
        }

        else{
            echo '
                <script>
                    alert("Some error occured!");
                    window.location = "../routes/register.html";
                </script>
            ';
        }

?>