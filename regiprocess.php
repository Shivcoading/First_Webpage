<?php
include 'database.php';
if(isset($_POST['register'])){
    $name=$_POST['name'];
    $lname=$_POST['lname'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="insert into  student(name, lname, mobile, email, username, password)
    values('$name', '$lname', '$mobile','$email', '$username', '$password')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Registration Successfull !!!')</script>";
        echo "<script>window.open('login.php', '_self')</script>";
    }
    else{
        echo "Error: ".mysqli_error($conn);
        echo "<script>window.open('registration.php', '_self')</script>";
    }
    mysqli_close($conn);
}