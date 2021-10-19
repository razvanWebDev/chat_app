<?php
session_start();
if(isset($_SESSION["m_username"])){
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/fgEmojiPicker.js"></script>
    <?php $title = !empty($header_title) ? $header_title : "" ?>
    <title><?php echo $title ?></title>
</head>

<body class="overflow-x-hidden text-gray-700 debug-screen">
    <div class="flex items-center justify-center w-screen min-h-screen bg-blue-100 ">
        <div id="login-card"
            class="px-8 py-4 space-y-4 text-gray-600 bg-white border-t-4 rounded-lg shadow-lg border-primary w-96">
            <h2 class="text-3xl text-center">Member Login</h2>
            <hr>
            <p class="text-base text-center">You need to be logged in to have access to the chat area</p>
            <form action="php/login.php" method="post">
                <div class="flex h-10 rounded-md shadow-sm">
                    <input type="text" name="username" class="flex-1 block rounded-none input rounded-l-md sm:text-sm"
                        placeholder="Email / Username*" required>
                    <div
                        class="inline-flex items-center w-12 h-full p-2 border border-l-0 border-gray-300 rounded-r-md bg-gray-50">
                        <img src="img/icons/user.svg" alt="username" class="object-contain w-full h-full">
                    </div>
                </div>
                <div class="flex h-10 mt-4 rounded-md shadow-sm">
                    <input type="password" name="password"
                        class="flex-1 block rounded-none input rounded-l-md sm:text-sm" placeholder="Password*"
                        required>
                    <div
                        class="inline-flex items-center w-12 h-full p-2 border border-l-0 border-gray-300 rounded-r-md bg-gray-50">
                        <img src="img/icons/lock.svg" alt="username" class="object-contain w-full h-full">
                    </div>
                </div>
                <button type="submit" name="login" class="w-full h-10 py-2 mt-4 text-white transition rounded-md hover:opacity-75 bg-primary">Sign
                    In</button>
            </form>
            <div class="text-primary">
                <p class="mb-1">
                    <a href="forgot-password" class="hover:opacity-75">I forgot my password</a>
                </p>
                <p>
                    <a href="new-member-request" class="hover:opacity-75">Register a new membership</a>
                </p>
            </div>
        </div>
    </div>

<?php include "php/footer.php"; ?>