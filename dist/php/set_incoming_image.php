<?php
 include "db.php";
session_start();
$output = "";

if(isset($_SESSION['incoming_id']) && !empty($_SESSION['incoming_id'])){
    $query = "SELECT * FROM members WHERE m_unique_id = {$_SESSION['incoming_id']}";
    $select_member = mysqli_query($connection, $query);
    if(mysqli_num_rows($select_member) > 0){
        $row = mysqli_fetch_assoc($select_member);

        $firstname = $row['m_firstname'];
        $lastname = $row['m_lastname'];
        $image = !empty($row['m_image']) ? $row['m_image'] : "member.png";
        $status = $row['m_status'];
        $status_color = ($status == "active" ? "green" : "gray");

        $output .= '<div style="background-image: url(img/members/'.$image.')"
                        class="relative w-12 h-12 mr-3 bg-center bg-cover rounded-full user-image">
                        <div class="absolute bottom-0 right-0 w-3 h-3 bg-'.$status_color.'-400 rounded-full">
                        </div>
                    </div>
                    <p class="text-sm truncate"><b>'.$firstname . " " . $lastname.'</b></p>';

    }
}
echo $output;
?>