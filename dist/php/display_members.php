<?php include "db.php" ?>
<?php session_start(); ?>

<?php
 $outgoing_id = $_SESSION['unique_id'];

$query = "SELECT * FROM members WHERE NOT m_unique_id={$outgoing_id}";
$select_members = mysqli_query($connection, $query);

$output = "";

if(mysqli_num_rows($select_members) == 0){
    $output .= "No users are available";
}elseif(mysqli_num_rows($select_members) > 0){
    include "members_list.php";
}

echo $output;
?>