<?php
session_start();
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent-Resident</title>
    <style>
    .about-bg {
        background: url("https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/about-us-title-img.jpg");
        background-size: cover;
        background-postion: center center;
        background-repeat: no-repeat;
        background-color: rgba(0, 0, 0, 0.547);
        background-blend-mode: multiply;
    }

    .ad-bg {
        background: url("https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/about-us-img4.jpg");
        background-size: cover;
        background-postion: center center;
        background-repeat: no-repeat;
        background-color: rgba(0, 0, 0, 0.547);
        background-blend-mode: multiply;
    }
    </style>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Hero Section -->
    <section class="w-[95%] mx-auto my-11 ">
        <div class="about-bg h-96 rounded-lg  relative">
            <nav class="absolute top-[50%] left-[50%] translate-x-[-50%]">
                <ol class="flex justify-items-center items-center gap-2">
                    <li>
                        <a class="font-medium text-2xl text-white" href="index.php">Home /</a>
                    </li>
                    <li class="text-2xl text-white">About Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Vision -->
    <section class="w-[95%] mx-auto my-11 p-8">
        <!-- Mission -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-20">
            <div>
                <img src="https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/about-us-img1.jpg" alt=""
                    class="w-[600px] rounded-lg">
            </div>
            <div class="flex flex-col justify-between h-auto">
                <p class="text-5xl font-semibold">Vision</p>
                <p class="text-gray-500 leading-8">Our platform connects tenants with their ideal rental homes while
                    empowering
                    property owners to
                    efficiently list and manage their rental properties. We strive to create a seamless, user-friendly
                    experience that simplifies the rental process, ensuring satisfaction for both tenants and property
                    owners.</p>
                <div>
                    <p class="gradient-title btn">Read More</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Stats -->
    <section class="w-[95%] mx-auto my-20 bg-gray-200 p-2 lg:p-8 flex justify-center">
        <div class="stats shadow w-full lg:w-3/4 h-40">
            <div class="stat place-items-center">
                <div class="stat-title">Sells</div>
                <div class="stat-value">531K BDT.</div>
                <div class="stat-desc">From January 1st to August 1st</div>
            </div>

            <div class="stat place-items-center">
                <div class="stat-title">Users</div>
                <div class="stat-value text-secondary">4,200</div>
                <div class="stat-desc text-secondary">↗︎ 40 (2%)</div>
            </div>

            <div class="stat place-items-center">
                <div class="stat-title">New Registers</div>
                <div class="stat-value">1,200</div>
                <div class="stat-desc">↘︎ 90 (14%)</div>
            </div>
        </div>
    </section>
    <!-- Mission -->
    <section class="w-[95%] mx-auto my-11 p-8">
        <!-- Mission -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-20">

            <div class="flex flex-col justify-between h-auto">
                <p class="text-5xl font-semibold">Mission</p>
                <p class="text-gray-500 leading-8">Our mission is to revolutionize the rental experience by providing a
                    comprehensive platform that connects tenants with the perfect rental properties while offering
                    property owners an efficient and effective way to manage their listings. We are committed to
                    delivering a user-friendly, secure, and transparent environment that fosters trust, convenience, and
                    satisfaction for all our users.</p>
                <div>
                    <p class="gradient-title btn">Read More</p>
                </div>
            </div>
            <div>
                <img src="https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/about-us-img3.jpg" alt=""
                    class="w-[600px] rounded-lg">
            </div>
        </div>
    </section>

    <section class="w-[95%] mx-auto my-20">
        <div class="ad-bg h-[500px] rounded-lg relative">
            <div class="absolute top-[50%] px-5 translate-y-[-50%]">
                <p class="text-3xl lg:text-5xl text-white">Premium Houses <br> and Apartments</p>
                <p class="text-white">* Save your time and easily rent or sell your property</p>
            </div>
        </div>
    </section>

    <?php
    include('footer.php');
    ?>

</body>

</html>