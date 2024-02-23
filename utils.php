<?php


require_once 'config.php';

class Utils{
  // Method to sanitize input value
  public static function sanitize($input){
    $input = trim($input);
    $input = htmlspecialchars($input);
    $input = stripslashes($input);
    return $input;
  }

  // Method to redirect to a given page
  public static function redirect($page) {
    header('location: ' . BASE_URL . '/' .$page);
  }

  // Method to set a flash message
  public static function setFlash($name, $message){
    if(!empty($_SESSION[$name])){
      unset($_SESSION[$name]);
    }

    // SESSION variable is defined here for the FIRST TIME such that when redirection takes place, the SESSION 'register_success' or 'login_error' will contain their respective value and when displayFlash method called in index.php or register.php, the flash message is displayed in the div with alert-$type.
    $_SESSION[$name] = $message;
  }

  // Method to display a flash message
  public static function displayFlash($name, $type){
    if(isset($_SESSION[$name])){
      echo '<div class="alert alert-'.$type.'">'.$_SESSION[$name].'</div>';
      unset($_SESSION[$name]);
    }
  }

  // Method to check if user is logged in
  public static function isLoggedIn(){
    if(isset($_SESSION['user'])){
      return true;
    } else {
      return false;
    }
  }

  // method to send email
  public static function sendEmail($message){
    $curl = curl_init();

    curl_setopt_array($curl, [
      CURLOPT_URL => "https://api.smtp2go.com/v3/email/send",
      CURLOPT_POSTFIELDS => json_encode($message),
      CURLOPT_HTTPHEADER => [
        "Accept: application/json",
        "Content-Type: application/json"
      ],


    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if($err) {
      return false;
    } else {
      return true;
    }
  }





}