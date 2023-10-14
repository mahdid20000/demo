<?php
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
   
   include('../db.php');
   $email=$_POST['emails'];
   $password=$_POST['passwords'];
   if(empty($email)||empty($password))
   {
    echo "Fill All Filed";
   }
   else
   if(!filter_var($email,FILTER_VALIDATE_EMAIL))
   {
    echo "Enter correct email ";
   }
   else
   {
   $senddata = [
    'email'=>$email,
    'password'=>$password];
    $table="user";
    $result= $database->getReference($table);
    $query=$result->orderBychild('email')->equalTo($email)->getValue() ;
    if($query>0 && current($query)['password']==$password)
    { 

      echo("welcome"." ".current($query)['username']);
    }
    else{
      echo "email or password not correct ";
    }
 }
}
 else
 {
    header('Location:index.html');
 }





?>