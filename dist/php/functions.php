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
    header("Location: ../login.php");
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

function createUser($firstname, $lastname, $username, $email, $password) {
  global $connection;
  $status = 'inactive';

  $query = "INSERT INTO members (m_firstname, m_lastname, m_username, m_email, m_status, m_password) VALUES (?, ?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($connection);

  if(!mysqli_stmt_prepare($stmt, $query)){
    header("Location: new-member-request.php?signup=unkmown_error");
    exit();
  }else{
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $username, $email, $status, $hashed_password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);  
  }
}

function loginUser($username, $password){
  $userExists = userExists($username, $username);

  $hashed_password = $userExists["m_password"];
  $check_passwords = password_verify($password, $hashed_password);

  if(empty($username)){
    $userErr = "&user=required";
  }elseif($userExists === false) {
    $userErr = "&user=userExists";
  }

  if(empty($password)){
    $pwdErr = "&pwd=required";
  }elseif(!empty($username) && $check_passwords === false) {
   $pwdErr = "&pwd=wrong";
  }

  $errorMsg = $userErr . $pwdErr;

  if(!empty($errorMsg)){
    header("Location: ../login.php?login=failed$errorMsg");
    exit();
  }elseif($check_passwords === true){
    $_SESSION["memberId"] = $userExists["m_id"];
    $_SESSION["m_username"] = $userExists["m_username"];
    $_SESSION["m_image"] = $userExists["m_image"];

    header("Location: ../index.php");
    exit();
  }
}

?>