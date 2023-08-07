<?php
include('connection.php');

if (isset($_POST['uname']) && isset($_POST['pword'])) {
    $username = $_POST['uname'];
    $password = $_POST['pword'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);

    $sql = "SELECT * FROM reguser WHERE username = '$username' AND pword = '$password'";
    $result = mysqli_query($con, $sql);

    if ($result === false) {
        die("Query execution failed: " . mysqli_error($con));
    }

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo "<h1><center> Login successful $username </center></h1>";
    } else {
        echo "<h1> Login failed. Invalid username or password.</h1>";
    }
} else {
    echo "<h1> Form not submitted. </h1>";
}
?>
