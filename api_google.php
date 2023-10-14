<?php

// include('db.php');
// use Kreait\Firebase\Factory;
// use Kreait\Firebase\Auth;

// require 'vendor/autoload.php';

// $factory = (new Factory())
//     ->withServiceAccount(__DIR__.'/task-d4a8c-firebase-adminsdk-l714g-a541612e09.json')
//     ->withDatabaseUri('https://task-d4a8c-default-rtdb.firebaseio.com/');

// $auth = $factory->createAuth();

// try {
//     $user = $auth->getUser('ali@gmail.com');

//     if (!$user) {
//         $provider = new \Kreait\Firebase\Auth\SignInWithGoogle();
//         $redirectUrl = '../view/dashbord.user.php'; 
//         $url = $provider->buildUrlForSignIn([], $redirectUrl);
//         header("Location: $url");
//         exit();
//     } else {
        
//         header("Location: ../view/dashboard.user.php");
//         exit();
//     }
// } catch (\Kreait\Firebase\Exception\Auth\SignInWithGoogleFailed $e) {
//     echo "Google Sign-In failed: " . $e->getMessage();
// } catch (\Exception $e) {
//     echo "An error occurred: " . $e->getMessage();
// }









?>
