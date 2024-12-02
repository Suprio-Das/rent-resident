<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <title>RentHouse</title>
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

<div class="navbar bg-base-100 shadow-lg border border-2">
    <div class="navbar-start">
        <div class="dropdown">
            <!-- Hamburger menu icon, hidden on large screens -->
            <div tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li><a href="owner-index.php">Home</a></li>
                <li><a href="../about-us.php">About Us</a></li>
                <li><a href="../contact-us.php">Contact Us</a></li>

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
        <a class="btn btn-ghost text-lg">Rent-Resident</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1 text-md">
            <li><a href="owner-index.php">Home</a></li>
            <li><a href="../about-us.php">About Us</a></li>
            <li><a href="../contact-us.php">Contact Us</a></li>
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
  echo '<a href="../logout.php" class="btn btn-ghost text-sm text-primary">Logout</a>';
}

else {?>
        <li><a href="../how-to-register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li><a href="../how-to-login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php } ?>
    </div>
</div>
</div>



<script src="https://cdn.tailwindcss.com"></script>

</body>

</html>