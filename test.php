<?php
  $name = $_POST["sirname"]; 
  $email = $_POST["email"];
  $text_message = $_POST["message"];

  $link = mysqli_connect("localhost", "root", "");
  mysqli_select_db($link, "praktika");

$sql = "INSERT INTO message(name, email, message) VALUES ('$name', '$email', '$text_message')";
$result=mysqli_query($link, $sql);

header("Location: ".$_SERVER["HTTP_REFERER"]); 
exit;
?>