<?php
$conn = mysqli_connect("localhost", "root","", "ramya");
if (isset($_POST['submit'])) {
    echo "hello";
    $first = $_POST["firstname"];
    $last = $_POST["lastname"];
    $qus = $_POST["subject"];
    $sql = "INSERT INTO ask (firstname,lastname,qustion) VALUES ('$first','$last','$qus')";
    if(mysqli_query($conn,$sql)){
        header("Location: ramya2.html");
    }
    else{
        header("Location: ramya2.html");
    }
}
?>
