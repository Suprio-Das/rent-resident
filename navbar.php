<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <title>Rent-Resident</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');

    body {
        font-family: "Poppins", sans-serif;
    }
    </style>
</head>

<body>
    <div class="navbar bg-base-100 shadow-lg border border-2">
        <div class="navbar-start">
            <div class="dropdown">
                <!-- Hamburger menu icon, hidden on large screens -->
                <div tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                    <?php if (!isset($_SESSION["email"]) || empty($_SESSION['email'])) { ?>
                    <li>
                        <details>
                            <summary>Register</summary>
                            <ul class="bg-base-100 rounded-t-none p-2">
                                <li><a href="tenant-register.php">Tenant</a></li>
                                <li><a href="owner-register.php">Owner</a></li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>Login</summary>
                            <ul class="bg-base-100 rounded-t-none p-2">
                                <li><a href="tenant-login.php">Tenant</a></li>
                                <li><a href="owner-login.php">Owner</a></li>
                                <li><a href="admin-login.php">Admin</a></li>
                            </ul>
                        </details>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <a href="index.php"><img src="./images/rent-resident-logo.png" alt="" class="w-[300px]"></a>
            <!-- <a class="btn btn-ghost text-xl">Rent-Resident</a> -->
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 text-md">
                <li><a href="index.php">Home</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
                <?php if (!isset($_SESSION["email"]) || empty($_SESSION['email'])) { ?>
                <li>
                    <details>
                        <summary>Register</summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                            <li><a href="tenant-register.php">Tenant</a></li>
                            <li><a href="owner-register.php">Owner</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details>
                        <summary>Login</summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                            <li><a href="tenant-login.php">Tenant</a></li>
                            <li><a href="owner-login.php">Owner</a></li>
                            <li><a href="admin-login.php">Admin</a></li>
                        </ul>
                    </details>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="navbar-end hidden-sm">
            <?php 
            if(isset($_SESSION["email"]) && !empty($_SESSION['email'])){ 
                include("config/config.php");
                $u_email= $_SESSION["email"];

                $sql="SELECT * from tenant where email='$u_email'";
                $result=mysqli_query($db,$sql);

                if(mysqli_num_rows($result) > 0) {
                    $rows = mysqli_fetch_assoc($result);
            ?>
            <div class="dropdown dropdown-end">
                <div tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="<?php echo $rows['id_photo']; ?>" height="100px">
                    </div>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="booked-property.php">Booked Property</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <?php 
                } else {
                    // User no longer exists, destroy the session and redirect to login
                    //session_destroy();
                    header('Location: how-to-login.php');
                    exit();
                }
            } 
            ?>
        </div>
    </div>

    <!-- Your other content here -->

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>