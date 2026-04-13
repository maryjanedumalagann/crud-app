<?php
include 'config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (name, email) VALUES ('$name', '$email')";
    mysqli_query($conn, $sql);
}
?>

<form method="POST">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    <button name="submit">Add</button>
</form>
