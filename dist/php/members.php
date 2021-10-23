<?php include "db.php" ?>
<?php include "functions.php" ?>
<?php session_start(); ?>

<?php
$query = "SELECT * FROM members";
$select_members = mysqli_query($connection, $query);

$output = "";

if(mysqli_num_rows($select_members) == 1){
    $output .= "No users are available";
}elseif(mysqli_num_rows($select_members) > 0){
    while($row = mysqli_fetch_assoc($select_members)){
        $firstname = $row['m_firstname'];
        $lastname = $row['m_lastname'];
        $status = $row['m_status'];
        $status_color = $status == "active" ? "green" : "gray";
        $image = !empty($row['m_image']) ? $row['m_image'] : "member.png";


        $output .= '<a href="#" class="panel-item">
                        <div
                            class="flex h-20 p-4 mr-6 transition rounded chat-panel-item active-panel-item hover:bg-blue-300">
                            <div class="flex-none w-16">
                                <div style="background-image: url(img/members/'.$image.')"
                                    class="relative w-12 h-12 mr-3 bg-center bg-cover rounded-full user-image">
                                    <div class="absolute bottom-0 right-0 w-3 h-3 rounded-full"></div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between flex-auto h-full truncate">
                                <div class="flex w-full max-w-full overflow-hidden truncate">
                                    <p class="flex-auto text-sm truncate">
                                        <b>'.$firstname . " " . $lastname.'</b>
                                    </p>
                                    <p class="flex-none float-right ml-2 text-xs text-gray-500">23:44</p>
                                </div>
                                <div>
                                    <p class="w-full text-xs text-'.$status_color.'-500 truncate"><span>You</span>
                                        Lorem ipsum
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>';
    }
}

echo $output;
?>