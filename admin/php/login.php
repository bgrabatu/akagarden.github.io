<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$errors = array();


include_once('dbconnect.php');
include_once('errors.php');

session_start();


//Giris Kodu
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE `user_name`='$username' AND `user_password`='$password'";
        $results = mysqli_query($db, $query);
        $userControl = mysqli_fetch_assoc($results);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $userControl['user_id'];
            $_SESSION['success'] = "You are now logged in";
            header('location:admin/architecture/index.php');
        }
    } else {
        array_push($errors, "Wrong username/password combination");
    }
}
