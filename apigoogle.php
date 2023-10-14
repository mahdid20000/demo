<?php



   require_once('google-api/vendor/autoload.php');

   $google=new Google_Client();
   $google->setClientId('528832892552-vfv1om91n1sqljq6os0udrpr9uqomjdb.apps.googleusercontent.com');
   $google->setClientSecret('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');
   $google->setRedirectUri('http://localhost/task/apigoogle.php');
   $google->addScope('email');
   $google->addScope('profile');

   if(isset($_GET['code']))
   {
     $code=$google->fetchAccessTokenWithAuthCode($_GET['code']);
     $google->setAccessToken($code);
     $service=new Google_Service_Oauth2($google);
     $userinfo = $service->userinfo->get();  
     $email=$service->userinfo->get()->email;
     $name=$userinfo->name."<br>";
     $username=explode(" ",$name)[0];
     header("location:view/dashbord.user.php?username=".urlencode($username));

   }
  
  else
  {
     header("location:".$google->createAuthUrl());
  }



   ?>
   