<?php
    $conn=mysqli_connect("localhost", "root", "", "test");
    $query= "SELECT * FROM ajatest";
    $result=mysqli_query($conn, $query);
    $users=mysqli_fetch_all($result, MYSQLI_ASSOC);



    echo json_encode($users);  
?>