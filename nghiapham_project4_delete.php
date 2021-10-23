<?php
    include "nghiapham_project4_connect.php";
    $id = $_GET['id'];

    $sql = "delete from `login` WHERE `username`= '$id'";
    if ($conn->query($sql) === TRUE) {
        header("Location:nghiapham_project4_retrival.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>