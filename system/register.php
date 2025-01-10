<?php

if(isset($_POST['register'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tel = $_POST['tel'];
    $birth = $_POST['birth'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $nationality = $_POST['nationality'];


    include_once('db.php');
    $sql = "INSERT INTO users(firstname, lastname, email, password, tel, birth, gender, address, nationality, id_role) 
        VALUES('$firstname','$lastname','$email','$password','$tel','$birth','$gender','$address','$nationality','2')";
    if($conn->query($sql)){
        $_SESSION['alert'] = 'Register Success';
        header('location: ../login.php');
        exit(0);
    }else{
        $_SESSION['alert'] = 'Register Error';
        header('location: ../register.php');
        exit(0);
    }
}

?>