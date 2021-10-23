<?php include "db.php" ?>
<?php include "functions.php" ?>

<?php
    $searchTerm = escape($_POST['searchTerm']);
    $output = "";

    $query = "SELECT * FROM members WHERE m_firstname LIKE '%{$searchTerm}%' OR m_lastname LIKE '%{$searchTerm}%' OR m_username LIKE '%{$searchTerm}%'";
    $select_members = mysqli_query($connection, $query);

    if(mysqli_num_rows($select_members) > 0){
        include "members_list.php";
    }
    echo $output;
?>