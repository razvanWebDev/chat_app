<?php

function escape($string) {
    global $connection;
    return mysqli_real_escape_string($connection, trim($string));
  }

function userExists($username, $email) {
    global $connection;
  
    $query = "SELECT * FROM members WHERE m_username = ? OR m_email = ?";
    $stmt = mysqli_stmt_init($connection);
  
    if(!mysqli_stmt_prepare($stmt, $query)){
     // header("Location: ../login.php");
      exit();
    }else{
      mysqli_stmt_bind_param($stmt, "ss", $username, $email);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);
      if($row = mysqli_fetch_assoc($resultData)){
        return $row;
      }else{
        $result = false;
        return $result;
      }
      mysqli_stmt_close($stmt);
    }
  }

function loginUser($username, $password){
    $userExists = userExists($username, $username);
  
    if($userExists === false) {
        echo "1";
     // header("Location: ../login.php");
      exit();
    }
  
    $hashed_password = $userExists["m_password"];
    $check_passwords = password_verify($password, $hashed_password);
  
    if($check_passwords === false) {
        echo "2";
     // header("Location: ../login.php");
      exit();
    }else if($check_passwords === true){
        echo "3";
      $_SESSION["memberId"] = $userExists["m_id"];
      $_SESSION["m_username"] = $userExists["m_username"];
      $_SESSION["m_image"] = $userExists["m_image"];
  
      header("Location: ../index.php");
      exit();
    }
  }

?>