<?php
 $hostName = 'localhost';
 $hostUser = 'root';
 $hostPass = '';
 $databaseName = 'atom';
 $databaseConnect = mysqli_connect($hostName, $hostUser, $hostPass, $databaseName);

 ?>





<?php
$name = $_POST['fname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$numbers = preg_match('@[0-9]@', $pass);
$uppercase = preg_match('@[A-Z]@', $pass);
$lowercase = preg_match('@[a-z]@', $pass);
$special_character = preg_match('@[!,#,$,%,^,&,*]@', $pass);
$re_pass = $_POST['re_pass'];
$country = $_POST['country'];
$gender = $_POST['gender'];
$hobbies = $_POST['hobbies'];
$after_implode_hobbies = implode(',' , $hobbies);
echo $after_implode_hobbies;
$subject = $_POST['subject'];
$dob = $_POST['dob'];
$after_implode_subject = implode(',' , $subject);
$message = $_POST['message'];


  if(empty($name)){
    $error_msg = "Please Input Your Name";
    header('location:index.php?nam_error=' . $error_msg);
  } elseif (empty($email)) {
    $error_msg = "Please Input Your Email";
    header('location:index.php?email_error=' . $error_msg);
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error_msg = "Please input a valid email address";
    header('location: index.php?email_error=' . $error_msg);
  } elseif (empty($pass)) {
    $error_msg = "Please Input Your Password";
    header('location: index.php?pass_error=' . $error_msg);
  } elseif(!$numbers || !$uppercase || !$lowercase || !$special_character || strlen($pass) < 8){
    $error_msg = "Password must contain 'A-Z', 'a-z', '0-9', '!-*', and 8 digits";
    header('location: index.php?pass_error=' . $error_msg);
  } elseif (empty($re_pass)) {
    $error_msg = "Please Confirm Your Password";
    header ('location: index.php?re_pass_error=' . $error_msg);
  } elseif ($re_pass != $pass) {
    $error_msg = "Password Did not match !!!";
    header ('location: index.php?re_pass_error=' . $error_msg);
  } elseif (empty($country)){
    $error_msg = "Please Select Your Country";
    header('location: index.php?country_error=' . $error_msg);
  } elseif (empty($gender)) {
    $error_msg = "Please select your gender";
    header('location: index.php?gen_error=' . $error_msg);
  }elseif (empty($hobbies)){
    $error_msg = "Please Select your hobbies to proceed further";
    header('location: index.php?hob_error=' . $error_msg);
  } elseif(empty($subject)){
    $error_msg = "Please Select your subjects";
    header('location: index.php?sub_error=' . $error_msg);
  } elseif (empty($message)) {
    $error_msg = "Please Provide Your Feedback to Continue Further";
    header('location: index.php?msg_error=' . $error_msg);
  } elseif (str_word_count($message) < 10) {
    $error_msg = "Feedback must be atleast 10 -100 words Thank you !!!!";
    header ('location: index.php?msg_error=' . $error_msg);
  } elseif (str_word_count($message) > 20) {
    $error_msg = "Stop talking to much Limit Reached Thank you !!!!";
    header ('location: index.php?msg_error=' . $error_msg);
  } elseif(empty($dob)){
    $error_msg = "Submit your jonmotarikh";
    header ('location: index.php?dob_error=' . $error_msg);
  }









   else {
    // $insert = INSERT INTO users(Name, Email, Password, Re-type Password, Country, Gender, Subject, Hobbies, Date of Birth, Feedback)VALUES('$name','$email','$pass','$re_pass', '$country', '$gender', '$subject','$hobbies', '$dob', '$message');
    // $insert_result = mysqli_query($databaseConnect, $insert);
  }

 ?>
