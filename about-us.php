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
                    <p class="gradient-title btn" onclick="my_modal_5.showModal()">Read More</p>
                </div>
            </div>
            <!-- Modal Contents-1 -->
            <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
                <div class="modal-box">
                    <h3 class="text-lg font-bold">Vision!</h3>
                    <p class="py-4">At our core, we believe that finding the perfect rental home should be a hassle-free
                        experience, and managing rental properties should be efficient and straightforward for property
                        owners. Our platform serves as a bridge between tenants searching for their ideal homes and
                        property owners looking for a streamlined way to manage their properties. By focusing on
                        user-friendliness and simplicity, we aim to transform the rental experience into something
                        seamless and enjoyable for both parties.</p>
                    <p class="text-2xl font-semibold">For Tenants</p>
                    <p>We understand that searching for a rental property can be time-consuming and sometimes
                        overwhelming. That’s why we’ve designed our platform to simplify the process from start to
                        finish. Our easy-to-use search tools allow tenants to filter properties based on their specific
                        needs, such as location, price range, property size, and amenities. Whether you’re looking for a
                        cozy apartment in the city or a spacious family home in the suburbs, our platform brings you a
                        wide range of options, making it easier to find exactly what you're looking for.
                        <br><br>
                        Once a property catches your eye, you can view detailed information, including high-quality
                        images, descriptions, and reviews from previous tenants. To make things even more convenient,
                        tenants can book consultations and property viewings directly through the platform, helping you
                        save time and stay organized during your search.
                        <br><br>
                        We also prioritize trust and transparency. By offering tenant reviews of properties and
                        landlords, we ensure that renters have the necessary information to make informed decisions. Our
                        goal is to make the tenant experience as smooth and stress-free as possible, so you can focus on
                        settling into your new home.
                    </p>

                    <p class="text-2xl font-semibold mt-3">For Owners</p>
                    <p>For property owners, managing rental properties can sometimes feel like an uphill battle. From
                        listing properties to dealing with tenant inquiries and managing bookings, there are a lot of
                        moving parts. Our platform is designed to help you streamline your property management tasks,
                        saving you time and effort. We offer an intuitive property listing system that allows you to
                        create professional listings complete with photos, descriptions, and relevant details in just a
                        few simple steps.
                        <br><br>
                        But we don’t stop there. Our platform gives property owners access to a host of management
                        tools, such as booking calendars, inquiry tracking, and automated reminders. You’ll have full
                        visibility of your property listings and can update them as needed, whether it’s adjusting
                        availability, changing rental rates, or adding new features. With everything organized in one
                        place, you can focus more on providing excellent service to your tenants and less on the
                        administrative details.
                        <br><br>
                        Additionally, we understand that effective communication between property owners and tenants is
                        key to a successful rental experience. That’s why we’ve built a messaging system into our
                        platform that allows for direct communication. Owners can respond to tenant inquiries quickly,
                        and tenants can feel confident that their concerns are being addressed. We believe in creating a
                        transparent, professional, and collaborative environment that benefits both owners and renters.
                    </p>

                    <div class="modal-action">
                        <form method="dialog">
                            <!-- if there is a button in form, it will close the modal -->
                            <button class="btn">Close</button>
                        </form>
                    </div>
                </div>
            </dialog>
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
                    <p class="gradient-title btn" onclick="my_modal_6.showModal()">Read More</p>
                </div>
                <!-- Modal Contents-2 -->
                <dialog id="my_modal_6" class="modal modal-bottom sm:modal-middle">
                    <div class="modal-box">
                        <h3 class="text-lg font-bold">Mission!</h3>
                        <p class="py-4">At our core, we believe that finding the perfect rental home should be a
                            hassle-free
                            experience, and managing rental properties should be efficient and straightforward for
                            property
                            owners. Our platform serves as a bridge between tenants searching for their ideal homes and
                            property owners looking for a streamlined way to manage their properties. By focusing on
                            user-friendliness and simplicity, we aim to transform the rental experience into something
                            seamless and enjoyable for both parties.</p>
                        <p class="text-2xl font-semibold">For Tenants</p>
                        <p>We understand that searching for a rental property can be time-consuming and sometimes
                            overwhelming. That’s why we’ve designed our platform to simplify the process from start to
                            finish. Our easy-to-use search tools allow tenants to filter properties based on their
                            specific
                            needs, such as location, price range, property size, and amenities. Whether you’re looking
                            for a
                            cozy apartment in the city or a spacious family home in the suburbs, our platform brings you
                            a
                            wide range of options, making it easier to find exactly what you're looking for.
                            <br><br>
                            Once a property catches your eye, you can view detailed information, including high-quality
                            images, descriptions, and reviews from previous tenants. To make things even more
                            convenient,
                            tenants can book consultations and property viewings directly through the platform, helping
                            you
                            save time and stay organized during your search.
                            <br><br>
                            We also prioritize trust and transparency. By offering tenant reviews of properties and
                            landlords, we ensure that renters have the necessary information to make informed decisions.
                            Our
                            goal is to make the tenant experience as smooth and stress-free as possible, so you can
                            focus on
                            settling into your new home.
                        </p>

                        <p class="text-2xl font-semibold mt-3">For Owners</p>
                        <p>For property owners, managing rental properties can sometimes feel like an uphill battle.
                            From
                            listing properties to dealing with tenant inquiries and managing bookings, there are a lot
                            of
                            moving parts. Our platform is designed to help you streamline your property management
                            tasks,
                            saving you time and effort. We offer an intuitive property listing system that allows you to
                            create professional listings complete with photos, descriptions, and relevant details in
                            just a
                            few simple steps.
                            <br><br>
                            But we don’t stop there. Our platform gives property owners access to a host of management
                            tools, such as booking calendars, inquiry tracking, and automated reminders. You’ll have
                            full
                            visibility of your property listings and can update them as needed, whether it’s adjusting
                            availability, changing rental rates, or adding new features. With everything organized in
                            one
                            place, you can focus more on providing excellent service to your tenants and less on the
                            administrative details.
                            <br><br>
                            Additionally, we understand that effective communication between property owners and tenants
                            is
                            key to a successful rental experience. That’s why we’ve built a messaging system into our
                            platform that allows for direct communication. Owners can respond to tenant inquiries
                            quickly,
                            and tenants can feel confident that their concerns are being addressed. We believe in
                            creating a
                            transparent, professional, and collaborative environment that benefits both owners and
                            renters.
                        </p>

                        <div class="modal-action">
                            <form method="dialog">
                                <!-- if there is a button in form, it will close the modal -->
                                <button class="btn">Close</button>
                            </form>
                        </div>
                    </div>
                </dialog>
            </div>
            <div>
                <img src=" https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/about-us-img3.jpg" alt=""
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