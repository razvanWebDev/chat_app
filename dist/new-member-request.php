<?php
$invalidFirstnameInput = "";
$showFirstnameError = "hidden";
$firstnameErrorMessage = "";

$invalidLastnameInput = "";
$showLastnameError = "hidden";
$lastnameErrorMessage = "";

$invalidUsernameInput = "";
$showUsernameError = "hidden";
$usernameErrorMessage = "";

$invalidEmailInput = "";
$showEmailError = "hidden";
$emailErrorMessage = "";

$invalidPasswordInput = "";
$showPasswordError = "hidden";
$password_error_msg = "";

$invalidRepeatPasswordInput = "";
$showRepeatPasswordError = "hidden";
$repeat_password_error_msg = "";

$subtitle_p = "Request a new membership";
$subtitle_p_color = "";

// Check for errors
if(isset($_GET['signup'])){
    //failed
  if($_GET['signup'] == "failed"){
    //firstname
    if(isset($_GET['firstnameErr'])){
        if($_GET['firstnameErr'] == "required"){
            $invalidFirstnameInput = "-error";
            $showFirstnameError = "";
            $firstnameErrorMessage = "First name is required";
        }elseif($_GET['firstnameErr'] == "invalid"){
            $invalidFirstnameInput = "-error";
            $showFirstnameError = "";
            $firstnameErrorMessage = "Only letters and white space allowed";
        }
    }
    
    //lastname
    if(isset($_GET['lastnameErr'])){
        if($_GET['lastnameErr'] == "required"){
            $invalidLastnameInput = "-error";
            $showLastnameError = "";
            $lastnameErrorMessage = "Last name is required";
        }elseif($_GET['lastnameErr'] == "invalid"){
            $invalidLastnameInput = "-error";
            $showLastnameError = "";
            $lastnameErrorMessage = "Only letters and white space allowed";
        }
    }

    //username
    if(isset($_GET['usernameErr'])){
        if($_GET['usernameErr'] == "required"){
            $invalidUsernameInput = "-error";
            $showUsernameError = "";
            $usernameErrorMessage = "Username is required";
        }elseif($_GET['usernameErr'] == "invalid"){
            $invalidUsernameInput = "-error";
            $showUsernameError = "";
            $usernameErrorMessage = "Username must have at least 4 characters";
        }elseif($_GET['usernameErr'] == "userExists"){
            $invalidUsernameInput = "-error";
            $showUsernameError = "";
            $usernameErrorMessage = "Username already taken!";
        }
    }

    //email
    if(isset($_GET['emailErr'])){
        if($_GET['emailErr'] == "required"){
            $invalidEmailInput = "-error";
            $showEmailError = "";
            $emailErrorMessage = "Email is required";
        }elseif($_GET['emailErr'] == "invalid"){
            $invalidEmailInput = "-error";
            $showEmailError = "";
            $emailErrorMessage = "Please enter a valid email";
        }elseif($_GET['emailErr'] == "emailExists"){
            $invalidEmailInput = "-error";
            $showEmailError = "";
            $emailErrorMessage = "Email already taken!";
        }
    }

    //passwords
    if(isset($_GET['passwordErr'])){
        if($_GET['passwordErr'] == "required"){
            $invalidPasswordInput = "-error";
            $showPasswordError = "";
            $password_error_msg = "Password is required";
        }elseif($_GET['passwordErr'] == "invalid"){
            $invalidPasswordInput = "-error";
            $showPasswordError = "";
            $password_error_msg = "Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character";
        }elseif($_GET['passwordErr'] == "missmatch"){
            $invalidPasswordInput = "-error";
            $showPasswordError = "";
            $password_error_msg = "Passwords don't match";
            $invalidRepeatPasswordInput = "-error";
            $showRepeatPasswordError = "";
            $repeat_password_error_msg = "Passwords didn't match";
        }
    }
    if(isset($_GET['repeatPasswordErr'])){
        if($_GET['repeatPasswordErr'] == "required"){
            $invalidRepeatPasswordInput = "-error";
            $showRepeatPasswordError = "";
            $repeat_password_error_msg = "Required field";
        }
    }
  
    
  }
  //success
  if($_GET['signup'] == "success"){
    $subtitle_p = "Request successfully sent!";
    $subtitle_p_color = "text-green-600";
  }
} 
//get input values in case the username or email already exist
$firstNameInputValue = isset($_GET['firstname']) ? $_GET['firstname'] : "";
$lastNameInputValue = isset($_GET['lastname']) ? $_GET['lastname'] : "";
$userNameInputValue = isset($_GET['username']) ? $_GET['username'] : "";
$emailInputValue = isset($_GET['email']) ? $_GET['email'] : "";
?>

<?php 
$header_title = "Member request";
include "php/header.php"; 
?>
    <div class="flex items-center justify-center w-screen min-h-screen bg-blue-100 ">
        <div id="login-card"
            class="px-8 py-4 space-y-4 text-gray-600 bg-white border-t-4 rounded-lg shadow-lg border-primary w-96">
            <h2 class="text-3xl text-center">New Member</h2>
            <hr>
            <p class="text-base text-center <?php echo $subtitle_p_color ?>"><?php echo $subtitle_p ?></p>
            <form action="php/signup.php" method="post">
                <div class="flex h-10 rounded-md shadow-sm">
                    <input type="text" name="m_firstname" class="flex-1 block rounded-none input<?php echo $invalidFirstnameInput ?> rounded-l-md sm:text-sm"
                        placeholder="First Name*" value="<?php echo $firstNameInputValue ?>">
                    <div
                        class="inline-flex items-center w-12 h-full p-2 border border-l-0 border-gray-300 rounded-r-md bg-gray-50">
                        <img src="img/icons/user.svg" alt="first name" class="object-contain w-full h-full">
                    </div>
                </div>
                <span class="text-red-600 ml-2 <?php echo $showFirstnameError ?>" ><?php echo $firstnameErrorMessage ?></span>

                <div class="flex h-10 mt-4 rounded-md shadow-sm">
                    <input type="text" name="m_lastname" class="flex-1 block rounded-none input<?php echo $invalidLastnameInput ?> rounded-l-md sm:text-sm"
                        placeholder="Last Name*" value="<?php echo $lastNameInputValue ?>">
                    <div
                        class="inline-flex items-center w-12 h-full p-2 border border-l-0 border-gray-300 rounded-r-md bg-gray-50">
                        <img src="img/icons/user.svg" alt="last name" class="object-contain w-full h-full">
                    </div>
                </div>
                <span class="text-red-600 ml-2 <?php echo $showLastnameError ?>" ><?php echo $lastnameErrorMessage ?></span>

                <div class="flex h-10 mt-4 rounded-md shadow-sm">
                    <input type="text" name="m_username" class="flex-1 block rounded-none input<?php echo $invalidUsernameInput ?> rounded-l-md sm:text-sm"
                        placeholder="Username*" value="<?php echo $userNameInputValue ?>">
                    <div
                        class="inline-flex items-center w-12 h-full p-2 border border-l-0 border-gray-300 rounded-r-md bg-gray-50">
                        <img src="img/icons/user.svg" alt="username" class="object-contain w-full h-full">
                    </div>
                </div>
                <span class="text-red-600 ml-2 <?php echo $showUsernameError ?>" ><?php echo $usernameErrorMessage ?></span>

                <div class="flex h-10 mt-4 rounded-md shadow-sm">
                    <input type="email" name="m_email" class="flex-1 block rounded-none input<?php echo $invalidEmailInput ?> rounded-l-md sm:text-sm"
                        placeholder="Email*" value="<?php echo $emailInputValue ?>">
                    <div
                        class="inline-flex items-center w-12 h-full p-2 border border-l-0 border-gray-300 rounded-r-md bg-gray-50">
                        <img src="img/icons/email.svg" alt="email" class="object-contain w-full h-full">
                    </div>
                </div>
                <span class="text-red-600 ml-2 <?php echo $showEmailError ?>"><?php echo $emailErrorMessage ?></span>

                <div class="flex h-10 mt-4 rounded-md shadow-sm">
                    <input type="password" name="m_password"
                        class="flex-1 block rounded-none input<?php echo $invalidPasswordInput ?> rounded-l-md sm:text-sm" placeholder="Password*">
                    <div
                        class="inline-flex items-center w-12 h-full p-2 border border-l-0 border-gray-300 rounded-r-md bg-gray-50">
                        <img src="img/icons/lock.svg" alt="password" class="object-contain w-full h-full">
                    </div>
                </div>
                <span class="text-red-600 ml-2 <?php echo $showPasswordError ?>" ><?php echo $password_error_msg ?></span>

                <div class="flex h-10 mt-4 rounded-md shadow-sm">
                    <input type="password" name="repeat_password"
                        class="flex-1 block rounded-none input<?php echo $invalidRepeatPasswordInput ?> rounded-l-md sm:text-sm" placeholder="Repeat Password*">
                    <div
                        class="inline-flex items-center w-12 h-full p-2 border border-l-0 border-gray-300 rounded-r-md bg-gray-50">
                        <img src="img/icons/lock.svg" alt="repeat passord" class="object-contain w-full h-full">
                    </div>
                </div>
                <span class="text-red-600 ml-2 <?php echo $showRepeatPasswordError ?>" ><?php echo $repeat_password_error_msg ?></span>

                <button type="submit" name="signup"
                    class="w-full h-10 py-2 mt-4 text-white transition rounded-md hover:opacity-75 bg-primary">Request
                    membership</button>
            </form>
            <div class="text-primary">
                <p>
                    <a href="login" class="hover:opacity-75">I already have a membership</a>
                </p>
            </div>
        </div>
    </div>

<?php include "php/footer.php"; ?>