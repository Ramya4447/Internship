<?php
$conn = mysqli_connect("remotemysql.com", "LkNu0Yx9kJ","hSarwM8pAU", "LkNu0Yx9kJ");
if (isset($_POST['submit'])) {
    echo "hello";
    $first = $_POST["firstname"];
    $last = $_POST["lastname"];
    $qus = $_POST["subject"];
    $sql = "INSERT INTO ask (firstname,lastname,qustion) VALUES ('$first','$last','$qus')";
    if(mysqli_query($conn,$sql)){
        header("Location: https://ramya4447.github.io/Internship/ramya2.html");
    }
    else{
        header("Location: ramya2.html");
    }
}
?>
