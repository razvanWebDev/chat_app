<?php 
$header_title = "Forgot Password";
include "php/header.php"; 
?>
    <div class="flex items-center justify-center w-screen min-h-screen bg-blue-100 ">
        <div id="login-card"
            class="px-8 py-4 space-y-4 text-gray-600 bg-white border-t-4 rounded-lg shadow-lg border-primary w-96">
            <h2 class="text-3xl text-center">Recover password</h2>
            <hr>
            <p class="text-base text-center">You forgot your password? Here you can easily retrieve a new password.</p>
            <form action="" method="post">
                <div class="flex h-10 mb-4 rounded-md shadow-sm">
                    <input type="email" name="email" class="flex-1 block rounded-none input rounded-l-md sm:text-sm"
                        placeholder="Email" required>
                    <div
                        class="inline-flex items-center w-12 h-full p-2 border border-l-0 border-gray-300 rounded-r-md bg-gray-50">
                        <img src="img/icons/email.svg" alt="email" class="object-contain w-full h-full">
                    </div>
                </div>
                <button class="w-full h-10 py-2 text-white transition rounded-md hover:opacity-75 bg-primary">Request
                    new passord</button>
            </form>
            <div class="text-primary">
                <p>
                    <a href="login" class="hover:opacity-75">Login</a>
                </p>
            </div>
        </div>
    </div>

<?php include "php/footer.php"; ?>