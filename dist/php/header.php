<?php ob_start(); ?>
<?php include "php/db.php" ?>
<?php include "php/functions.php" ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/fgEmojiPicker.js"></script>
    <?php $title = !empty($header_title) ? $header_title : "" ?>
    <title><?php echo $title ?></title>
</head>

<body class="overflow-x-hidden text-gray-700 debug-screen">