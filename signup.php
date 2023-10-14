<?php
include('../db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    if ($password !== $repassword) {
        echo "password notmatch";
    } elseif (empty($username) || empty($email) || empty($password) || empty($repassword)) {
        echo "fill all fileds";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "enter correct email ";
    } else {
        $result = $database->getReference('user');
        $queryemail = $result->orderByChild('email')->equalTo($email)->getValue();

        if ($queryemail) {
            echo "The email is already exsists.";
        } else {
            $queryusername = $result->orderByChild('username')->equalTo($username)->getValue();
            
            if ($queryusername) {
                echo "the username is already taken";
            } else {
                $userData = [
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                ];
                $table = 'user';
                $register = $database->getReference($table)->push($userData);

                if ($register) {
                    echo "register successful.";
                } else {
                    echo "error to register.";
                }
            }
        }
    }
} else {
    header('Location: index.html');
}
?>
