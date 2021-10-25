<?php include "db.php" ?>
<?php include "functions.php" ?>
<?php session_start(); ?>

<?php
if(isset($_SESSION['unique_id'])){
    $outgoing_id = $_SESSION['unique_id'];
    $incoming_id = escape($_POST['incoming_id']);
    $output = "";

    if(!empty($incoming_id)){
        // get incomming message sender detais
        $getMemberQuery = "SELECT * FROM members WHERE m_unique_id = {$incoming_id}";
        $getMemberDetails = mysqli_query($connection, $getMemberQuery);
        while($memberRow = mysqli_fetch_assoc($getMemberDetails)){
            $incoming_member_img = $memberRow['m_image'];
        }

        //get messages
        $query = "SELECT * FROM messages WHERE (outgoing_msg_id = {$outgoing_id} AND incomming_msg_id = {$incoming_id}) OR (outgoing_msg_id = {$incoming_id} AND incomming_msg_id = {$outgoing_id}) ORDER BY msg_id";
        $getMessages = mysqli_query($connection, $query);

        if(mysqli_num_rows($getMessages) > 0){
            while($row = mysqli_fetch_assoc($getMessages)){
                $msgTimestamp = strtotime($row['timestamp']);
                //show message time
                $msgTime = date('Y/m/d, H:i', $msgTimestamp);
                //TODO check if message was sent yesterday or before
                $dateDiff = date("Ymd") -  date("Ymd", $msgTimestamp);
                $dateShown = $dateDiff == 0 ? "" : $dateDiff == 1 ? "Yesterday" : date("Y : m : d", $msgTimestamp);
   
                if((int)$row['outgoing_msg_id'] === $outgoing_id){//send message
                    $output .= '<div class="max-w-3/4 w-max">
                                    <div class="relative self-start px-4 py-1 text-white rounded-lg bg-primary">
                                        <p>'.$row['msg'].'</p>
                                        <div class="absolute p-1 bg-white rounded-full -left-6 -bottom-6">
                                            <div style="background-image: url(img/members/'.$_SESSION['m_image'].')"
                                                class="w-8 h-8 bg-center bg-cover rounded-full ">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="ml-5 text-xs text-gray-500">'.$msgTime.'</p>
                                </div>';
                }else{//receive message
                    $output .= '<div class="self-end max-w-3/4 w-max">
                                    <div class="relative px-4 py-1 bg-gray-100 rounded-lg">
                                        <p>'.$row['msg'].'</p>
                                        <div class="absolute p-1 bg-white rounded-full -right-4 -bottom-4">
                                            <div style="background-image: url(img/members/'.$incoming_member_img.')"
                                                class="w-6 h-6 bg-center bg-cover rounded-full ">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mr-5 text-xs text-right text-gray-500">'.$msgTime.'</p>
                                </div>';
                }
                
            }
            echo $output;
        }
    }
}else{
    header("Location: ../login");
}
?>