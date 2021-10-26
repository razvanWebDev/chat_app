
<?php
    while($row = mysqli_fetch_assoc($select_members)){
        $firstname = $row['m_firstname'];
        $lastname = $row['m_lastname'];
        $unique_id = $row['m_unique_id'];
        $status = $row['m_status'];
        $status_color = ($status == "active" ? "green" : "gray");
        $image = !empty($row['m_image']) ? $row['m_image'] : "member.png";

        //Get last message
        $getLastMsgQuery = "SELECT * FROM messages WHERE 
            (incomming_msg_id = {$unique_id} OR outgoing_msg_id = {$unique_id})
             AND (incomming_msg_id = {$outgoing_id} OR outgoing_msg_id = {$outgoing_id})
             ORDER BY msg_id DESC LIMIT 1";

        $getLastMsg  = mysqli_query($connection, $getLastMsgQuery);

        $lastMsg = $lastMsgTime = $you = "";

        $row2 = mysqli_fetch_assoc($getLastMsg);
        if(mysqli_num_rows($getLastMsg) > 0){
            $lastMsg = $row2['msg'];
            $msgTimestamp = strtotime($row2['timestamp']);
            //check if the last msg was today
            $dateDiff = date("Ymd") - date("Ymd", $msgTimestamp);
            $lastMsgTime = $dateDiff == 0 ? date('H:i', $msgTimestamp) : ($dateDiff == 1 ? "Yesterday" : date("Y/m/d", $msgTimestamp));
            $you = $outgoing_id == $row2['outgoing_msg_id'] ? "You: " : "";
        }else{
            $lastMsg = "No messages";
        }

        //Display member
        $output .= '<a href="index.php?member_id='.$unique_id.'" class="panel-item">
                        <div
                            class="flex h-20 p-4 mb-2 mr-6 transition rounded bg-gray-50 chat-panel-item hover:bg-blue-300">
                            <div class="flex-none w-16">
                                <div style="background-image: url(img/members/'.$image.')"
                                    class="relative w-12 h-12 mr-3 bg-center bg-cover rounded-full user-image">
                                    <div class="absolute bottom-0 right-0 w-3 h-3 bg-'.$status_color.'-400 rounded-full"></div>
                                </div>
                            </div>
                            <div class="flex flex-col flex-auto h-full truncate justify-evenly">
                                <div class="flex w-full max-w-full overflow-hidden truncate">
                                    <p class="flex-auto text-sm truncate">
                                        <b>'.$firstname . " " . $lastname.'</b>
                                    </p>
                                    <p class="flex-none float-right ml-2 text-xs text-gray-500">'.$lastMsgTime.'</p>
                                </div>
                                <div>
                                    <p class="w-full text-xs text-gray-500 truncate">
                                        '.$you.$lastMsg.'
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>';
    }
?>