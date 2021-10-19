<?php
$site_key = '';
$secret_key = '';

// PRODUCTION =============

// $server = 'sql108.epizy.com';
// $username = 'epiz_29581335';
// $password = 'bTEi09aoTZ9P';
// $dbname = 'epiz_29581335_new_template'; 

$website_url = "";

//LOCAL=================================
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'chat_app';    

  $connection = mysqli_connect($server, $username, $password, $dbname);

if (!$connection) {
  die("Failed to connect to MySQL: " . mysqli_connect_error()) ;
}
?>