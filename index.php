<?php 
session_start();

include("navbar.php");

 ?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

body,
html {
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    font-style: normal;
}

.hero {
    background: url("./images/house-1.jpg");
    background-size: cover;
    background-postion: center center;
    background-repeat: no-repeat;
    background-color: rgba(0, 0, 0, 0.547);
    background-blend-mode: multiply;
}

/* For small devices */
@media (max-width: 640px) {

    /* Adjust the width as per your requirement */
    .hero {
        background-position: center center;
    }
}

.gradient-title {
    background: #fc00ff;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #00dbde, #fc00ff);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #00dbde, #fc00ff);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color: white;

}
</style>
<script src="./JS/script.js"></script>

<!-- Hero section -->
<section class="lg:w-[95%] mx-auto lg:mt-8 hero h-[450px]">
    <div class="flex flex-col justify-center items-center gap-y-5">
        <h4 class="text-xl lg:text-5xl font-bold text-white">Welcome To Rent Resident</h4>
        <h4 class="text-sm lg:text-xl text-white">Dedicated rental portal in Bangladesh</h4>
        <form method="POST" action="search-property.php">
            <div class="join ">
                <input class="input input-bordered join-item" placeholder="Enter Location to Search"
                    name="search_property" />
                <button type="submit" class="btn join-item rounded-r-full gradient-title">Search</button>
            </div>
        </form>
    </div>
</section>

<!-- Tenant-Owner Hero -->
<section class="w-[95%] mx-auto my-[90px]">
    <div class="bg-gray-700 w-full font-[sans-serif]">
        <div class="grid md:grid-cols-2 items-center md:max-h-[475px] overflow-hidden  hover:bg-gray-800">
            <div class="p-8 order-2 md:order-1">
                <h1 class="sm:text-4xl text-2xl font-bold text-white">Find <span class="text-orange-400">Your
                        Perfect Home Today!</span></h1>
                <p class="mt-4 text-sm text-gray-300 lg:text-justify">Looking for a place to call your own? Discover a
                    wide
                    range of
                    homes tailored to your needs. Whether you're searching for a cozy apartment, a spacious family
                    house, or something in between, our platform connects you with the best options available. </p>
                <p class="mt-2 text-sm text-gray-300">Enjoy
                    seamless browsing, detailed property information, and easy communication with property owners. Start
                    your journey to finding the perfect home that fits your lifestyle and budget today!</p>
                <a href="tenant-register.php">
                    <button type="button"
                        class="px-6 py-3 mt-8 rounded-md text-white text-sm tracking-wider border-none outline-none bg-orange-500 hover:bg-orange-600">Get
                        started</button></a>
            </div>
            <img src="https://readymadeui.com/team-image.webp"
                class="w-full h-full object-cover shrink-0 order-1 md:order-2" />
        </div>
        <div class="grid md:grid-cols-2 items-center md:max-h-[475px] overflow-hidden hover:bg-gray-800">
            <img src="https://www.apartments.com/images/default-source/2019-naa/adobestock_30691356d4e63242-be01-45d2-9f32-59a0da0f8db9.tmb-featuredim.jpg"
                class="w-full h-full object-cover shrink-0 order-1 md:order-1" />
            <div class="p-8 order-2 md:order-2">
                <h1 class="sm:text-4xl text-2xl font-bold text-white ">List <span class="text-orange-400">Your Rental
                        Property!</span></h1>
                <p class="mt-4 text-sm text-gray-300">Unlock the potential of your property by listing it with us today.
                    Whether you have a cozy apartment, a luxury condo, or a spacious family home, our platform connects
                    you with quality tenants looking for their next place to call home.</p>
                <p class="mt-2 text-sm text-gray-300">Enjoy a simple and hassle-free listing process, gain exposure to a
                    wide audience, and manage inquiries effortlessly. Start earning from your property by listing it on
                    our platform today!</p>
                <a href="owner-register.php">
                    <button type="button"
                        class="px-6 py-3 mt-8 rounded-md text-white text-sm tracking-wider border-none outline-none bg-orange-500 hover:bg-orange-600">Get
                        started</button></a>
            </div>
        </div>
    </div>
</section>



<!-- Perfect Choise -->
<section class="w-[95%] mx-auto bg-gray-100 p-5 my-[90px] grid grid-cols-1 lg:grid-cols-2 items-center h-60 gap-5">
    <div>
        <h1 class="text-3xl">What Can We Help You Find?</h1>
        <div class="flex items-center gap-2">
            <div class="flex -space-x-4 rtl:space-x-reverse">
                <img class="w-10 h-10 border-2 border-white rounded-full"
                    src="https://static.vecteezy.com/system/resources/thumbnails/023/308/053/small_2x/ai-generative-exterior-of-modern-luxury-house-with-garden-and-beautiful-sky-photo.jpg"
                    alt="">
                <img class="w-10 h-10 border-2 border-white rounded-full"
                    src="https://img.staticmb.com/mbcontent/images/crop/uploads/2022/12/Most-Beautiful-House-in-the-World_0_1200.jpg"
                    alt="">
                <img class="w-10 h-10 border-2 border-white rounded-full"
                    src="https://image.cnbcfm.com/api/v1/image/103500764-GettyImages-147205632-2.jpg?v=1691157601"
                    alt="">
                <img class="w-10 h-10 border-2 border-white rounded-full"
                    src="https://cms.interiorcompany.com/wp-content/uploads/2023/11/simple-house-design-go-for-minimalist.png"
                    alt="">
            </div>
            <p><a href="#properties">Explore Properties ></a></p>
        </div>
    </div>
    <!-- Feature Card -->
    <div class="flex flex-col lg:flex-row justify-between items-center gap-5">
        <div
            class="w-[100%] lg:w-40 bg-white p-2 shadow-lg rounded-lg flex flex-col justify-center items-center hover:border-black hover:border-2 transition ease-in-out duration-300">
            <img src="https://homeid-elementor-demo3.g5plus.net/wp-content/uploads/2021/09/icon-box-32-min.png" alt=""
                class="w-20">
            <p class="font-bold">Rent as Tenant</p>
        </div>
        <div
            class="w-[100%] lg:w-40 bg-white p-2 shadow-lg rounded-lg flex flex-col justify-center items-center hover:border-black hover:border-2 transition ease-in-out duration-300">
            <img src="https://homeid-elementor-demo3.g5plus.net/wp-content/uploads/2021/09/icon-box-31.png" alt=""
                class="w-28">
            <p class="font-bold">Rent as Owner</p>
        </div>
        <div
            class="w-[100%] lg:w-40 bg-white p-2 shadow-lg rounded-lg flex flex-col justify-center items-center hover:border-black hover:border-2 transition ease-in-out duration-300">
            <img src="https://homeid-elementor-demo3.g5plus.net/wp-content/uploads/2021/09/icon-box-30.png" alt=""
                class="w-24">
            <p class="font-bold">User Friendly</p>
        </div>
    </div>
</section>

<!-- Properties -->
<section class="lg:w-[95%] mx-auto mt-[450px] lg:mt-auto" id="properties">
    <h2 class="text-4xl text-center lg:text-left">Featured Properties</h2>
    <p class="w-60 mt-4 border-t-4 border-lime-500 rounded-lg mx-auto lg:mx-0"></p>
    <?php 

 include("property-list.php");

 ?>
</section>

<div class="bg-[#182b50] px-8 py-16 font-[sans-serif] w-[95%] mx-auto my-20 rounded-lg">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 justify-center items-center gap-12">
        <div class="text-center md:text-left">
            <h2 class="text-4xl lg:text-5xl font-extrabold text-white mb-6 md:!leading-[55px]">Unlock Premium Features
            </h2>
            <p class="text-lg lg:text-xl text-white">Login or Signup to supercharge your experience. <br> Don't miss
                out!</p>
            <a href="tenant-register.php"
                class="mt-12 bg-[#a91079] hover:bg-opacity-80 text-white py-3 px-6 rounded-full text-lg lg:text-xl transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl inline-block gradient-title">
                Signup
            </a>
        </div>
        <div class="text-center">
            <img src="https://readymadeui.com/management-img.webp" alt="Premium Benefits" class="w-full mx-auto" />
        </div>
    </div>
</div>

<!-- Destination we love most -->
<section class="bg-black h-auto lg:h-96 flex items-center my-24">
    <div class="lg:w-[95%] mx-auto text-white">
        <h2 class="text-base lg:text-3xl font-semibold my-11">Destinations We Love The Most</h2>
        <div class="grid grid-cols-1 lg:grid-cols-6 mb-11 gap-5 mx-auto justify-items-center">
            <div>
                <img src="https://static.fibre2fashion.com/newsresource/images/271/shutterstock-705507505-1_283043.jpg"
                    alt="" class="rounded-xl w-52 h-56">
                <div>
                    <p class="mt-2">Chattogram</p>
                </div>
            </div>
            <div>
                <img src="https://t4.ftcdn.net/jpg/04/63/39/01/360_F_463390163_N3oBb5v0VlBxBjlvaytqTAVfs4iBSsdM.jpg"
                    alt="" class="rounded-xl w-52 h-56">
                <div>
                    <p class="mt-2">Dhaka</p>
                </div>
            </div>
            <div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Comilla_City_%284%29-01.jpg/1024px-Comilla_City_%284%29-01.jpg"
                    alt="" class="rounded-xl w-52 h-56">
                <div>
                    <p class="mt-2">Cumilla</p>
                </div>
            </div>
            <div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ad/Sylhet%2C_by_Murshed.jpg" alt=""
                    class="rounded-xl w-52 h-56">
                <div>
                    <p class="mt-2">Sylhet</p>
                </div>
            </div>
            <div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Nagar_Bhaban%2C_Khulna.jpg/1280px-Nagar_Bhaban%2C_Khulna.jpg"
                    alt="" class="rounded-xl w-52 h-56">
                <div>
                    <p class="mt-2">Khulna</p>
                </div>
            </div>
            <div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/Arial_view_of_rajshahi.jpg" alt=""
                    class="rounded-xl w-52 h-56">
                <div>
                    <p class="mt-2">Rajshahi</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Review section -->
<section id="testimonials" aria-label="What our customers are saying" class="bg-slate-50 py-20 sm:py-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl md:text-center">
            <h2 class="font-display lg:text-3xl tracking-tight text-slate-900 text-lg text-center">What Our Customers
                Are
                Saying
            </h2>
        </div>
        <ul role="list"
            class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:gap-8 lg:mt-20 lg:max-w-none lg:grid-cols-3">
            <li>
                <ul role="list" class="flex flex-col gap-y-6 sm:gap-y-8">
                    <li>
                        <figure class="relative rounded-2xl bg-white p-6 shadow-xl shadow-slate-900/10"><svg
                                aria-hidden="true" width="105" height="78" class="absolute left-6 top-6 fill-slate-100">
                                <path
                                    d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z">
                                </path>
                            </svg>
                            <blockquote class="relative">
                                I found the best home through this site. The quality is exceptional, and the prices
                                are
                                unbeatable.
                            </blockquote>
                            <figcaption
                                class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                                <div>
                                    <div class="font-display text-base text-slate-900">Viserys Targaryen</div>
                                    <p class="text-sm text-primary">Tenant</p>
                                </div>
                                <div class="overflow-hidden rounded-full bg-slate-50 border-4 border-green-600">
                                    <img alt="" class="h-14 w-14 object-cover" style="color:transparent"
                                        src="https://dmtalkies.com/wp-content/uploads/2022/08/ezgif-4-36b2b51af7.jpg">
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </li>
            <li>
                <ul role="list" class="flex flex-col gap-y-6 sm:gap-y-8">
                    <li>
                        <figure class="relative rounded-2xl bg-white p-6 shadow-xl shadow-slate-900/10"><svg
                                aria-hidden="true" width="105" height="78" class="absolute left-6 top-6 fill-slate-100">
                                <path
                                    d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z">
                                </path>
                            </svg>
                            <blockquote class="relative">
                                <!-- <p class="text-lg tracking-tight text-slate-900">"-->
                                I listed my home here and found the
                                best tenants. The service is exceptional, and the experience was seamless.
                            </blockquote>
                            <figcaption
                                class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                                <div>
                                    <div class="font-display text-base text-slate-900">Rhaenyra Targaryen</div>
                                    <p class="text-sm text-primary">Owner</p>
                                </div>
                                <div class="overflow-hidden rounded-full bg-slate-50 border-4 border-green-600">
                                    <img alt="" class="h-14 w-14 object-cover" style="color:transparent"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhPZWmIwCUQ-ke-jtMTBXBnkEUz8csOGgISQ&s">
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </li>
            <li>
                <ul role="list" class="flex flex-col gap-y-6 sm:gap-y-8">
                    <li>
                        <figure class="relative rounded-2xl bg-white p-6 shadow-xl shadow-slate-900/10"><svg
                                aria-hidden="true" width="105" height="78" class="absolute left-6 top-6 fill-slate-100">
                                <path
                                    d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z">
                                </path>
                            </svg>
                            <blockquote class="relative">
                                I discovered my ideal home on this site. The listings are exceptional, and the process
                                was effortless.
                            </blockquote>
                            <figcaption
                                class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                                <div>
                                    <div class="font-display text-base text-slate-900">Dameon Targaryen</div>
                                    <p class="text-sm text-primary">Tenant</p>
                                </div>
                                <div class="overflow-hidden rounded-full bg-slate-50 border-4 border-green-600">
                                    <img alt="" class="h-14 w-14 object-cover" style="color:transparent"
                                        src="https://static1.cbrimages.com/wordpress/wp-content/uploads/2022/10/Daemon-Targaryen.jpg">
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>

<!-- Team Members -->
<!-- <section class="w-[95%] mx-auto">
    <div id="team-container">

    </div>
</section> -->

<?php
    include('footer.php');
    ?>