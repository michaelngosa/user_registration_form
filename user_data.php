<?php
$error = '';
$name = '';
$email = '';
$dob = '';
$gender = '';
$country = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
 $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }
 
 if(empty($_POST["dob"]))
 {
  $error .= '<p><label class="text-danger">Please Enter Date of birth </label></p>';
 }
 else
 {
 $dob = clean_text($_POST["dob"]);
  
 }
 
 
 if(empty($_POST["gender"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Gender</label></p>';
 }
 else
 {
 $gender = clean_text($_POST["gender"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$gender))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 
 if(empty($_POST["country"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Country</label></p>';
 }
 else
 {
 $country = clean_text($_POST["country"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$country))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 
 if($error == '')
 {
  $file_open = fopen("contact_data.csv", "a");
  $no_rows = count(file("contact_data.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'sr_no'  => $no_rows,
   'name'  => $name,
   'email'  => $email,
   'dob' => $dob,
   'gender' => $gender,
   'country' => $country
  );
  fputcsv($file_open, $form_data);
 
  echo "Here are your details	<br/> <br/>"; 

  print_r($form_data);
  
 }
}
?>

