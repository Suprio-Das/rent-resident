<?php 
ob_start();
session_start();
if(isset($_SESSION["email"])){
  ob_end_clean();
  header("location:owner/owner-index.php");
}

include("navbar.php");
include("owner-engine.php");

 ?>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<section class="tenant-bg">
    <div class="relative flex flex-col justify-center h-screen overflow-hidden">
        <div class="w-[95%] lg:w-full p-6 m-auto bg-white rounded-md shadow-md ring-2 ring-gray-800/50 lg:max-w-lg">
            <h1 class="text-3xl font-semibold text-center text-gray-700">LOGIN</h1>
            <form class="space-y-4" method="POST">
                <div>
                    <label class="label">
                        <span class="text-base label-text">Email</span>
                    </label>
                    <!-- <input type="text" placeholder="Email Address" class="w-full input input-bordered" /> -->
                    <input type="email" id="email" placeholder="Enter email" name="email"
                        class="w-full input input-bordered" required>
                </div>
                <div>
                    <label class="label">
                        <span class="text-base label-text">Password</span>
                    </label>
                    <!-- <input type="password" placeholder="Enter Password" class="w-full input input-bordered" /> -->
                    <input type="password" id="pwd" placeholder="Enter password" name="password"
                        class="w-full input input-bordered" required>
                </div>
                <a href="#" class="text-xs text-gray-600 hover:underline hover:text-blue-600">Forget Password?</a>
                <div>
                    <input type="submit" id="submit" name="owner_login" class="btn-neutral btn btn-block" value="Login">
                    <!-- <button class="btn-neutral btn btn-block">Login</button> -->
                </div>
            </form>
        </div>
    </div>
</section>