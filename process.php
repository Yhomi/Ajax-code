<?php
$conn=mysqli_connect("localhost","root", "", "test");
echo "Processing....";

//GET variable name
if(isset($_GET['name'])){
    echo "GET: Your name is ".$_GET['name']; 
}




//POST variable name
if(isset($_POST['name'])){
    $name=mysqli_real_escape_string($conn, $_POST['name']);
    //echo "POST: Your name is ".$_POST['name'];
    echo "<br>";
    $query= "INSERT INTO ajatest(Name) VALUES('$name')";
    if(mysqli_query($conn, $query)){
        echo "User Added....";
    }else{
        echo "Error: ".mysqli_error($conn);  
    }
}
?>
