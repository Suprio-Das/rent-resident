<footer class="bg-white shadow dark:bg-gray-900 mt-20">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Rent Resident</span>
            </a>
            <ul
                class="flex flex-wrap justify-center sm:justify-start items-center mb-6 text-sm font-medium text-gray-500 dark:text-gray-400">
                <li class="mr-4 md:mr-6">
                    <a href="#" class="hover:underline">About</a>
                </li>
                <li class="mr-4 md:mr-6">
                    <a href="#" class="hover:underline">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>

        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 text-center dark:text-gray-400">©
            <span id="year"></span>
            <a href="index.php" class="hover:underline">Rent Resident</a>. All Rights Reserved.
        </span>
    </div>
</footer>

<script>
document.getElementById("year").textContent = new Date().getFullYear();
</script>