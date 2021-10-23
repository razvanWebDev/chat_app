<?php include "db.php" ?>
<?php session_start(); ?>

<?php
$query = "SELECT * FROM members";
$select_members = mysqli_query($connection, $query);

$output = "";

if(mysqli_num_rows($select_members) == 1){
    $output .= "No users are available";
}elseif(mysqli_num_rows($select_members) > 0){
    include "members_list.php";
}

echo $output;
?>