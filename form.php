<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Tailwind-->
    <link href="src/style/dist/output.css" rel="stylesheet">
    <!--Style-->
    <link href="src/style/donation.css" rel="stylesheet">
    <!--AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Donate</title>
</head>

<body class="overflow-hidden">

    <!-- Main modal -->
    <div id="donationForm" tabindex="-1" data-aos="fade-up" data-aos-delay="300" aria-hidden="true" class="h-full flex items-center justify-center overflow-y-auto overflow-x-hidden z-50 md:inset-0 tranistion-all">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded shadow dark:bg-gray-700 p-2">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-4 rounded border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Donate with Paypal
                    </h3>
                </div>
                <!-- Modal body -->
                <form action="charge.php" method="post" class="m-2">
                    <div>
                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your full name</label>
                        <input type="text" name="fullName" required class="block p-2 w-full text-gray-900 bg-gray-50 rounded border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mt-5">
                        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select amount</label>
                    </div>


                    <div>
                        <div class="flex flex-row w-full">
                            <div id="10d" data-value="10.0" class="cursor-pointer option w-1/2 text-yellow-400 hover:text-white border border-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded text-sm px-5 py-2.5 text-center mr-2 mb-2">$10</div>
                            <div id="25d" data-value="25.0" class="cursor-pointer option w-1/2 text-yellow-400 hover:text-white border border-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded text-sm px-5 py-2.5 text-center mr-2 mb-2">$25</div>
                        </div>

                        <div class="flex flex-row w-full">
                            <div id="50d" data-value="50.0" class="cursor-pointer option w-1/2 text-yellow-400 hover:text-white border border-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded text-sm px-5 py-2.5 text-center mr-2 mb-2">$50</div>
                            <div id="100d" data-value="100.0" class="cursor-pointer option w-1/2 text-yellow-400 hover:text-white border border-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded text-sm px-5 py-2.5 text-center mr-2 mb-2">$100</div>
                        </div>

                        <div class="flex flex-row w-full">
                            <div class="w-1/2 flex flex-row pr-2">

                                <div class="rounded-l w-auto px-5 py-2.5 text-center bg-yellow-500 text-white font-bold">$</div>
                                <input id="customDon" min="10" value="" required onchange="changeDonation()" class="option w-full text-yellow-400 border outline-none border-yellow-400 font-bold bg-transparent rounded-r text-sm px-5 py-2.5 text-left" type="text" placeholder="Other" autocomplete="off">

                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="amount" id="amount" value="" required>


                    <label for="message" class="mt-10 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                    <textarea id="message" name="message" value="" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>



                    <!-- Modal footer -->
                    <div class="flex items-center justify-end my-6 border-t border-gray-200 dark:border-gray-600">
                        <button type="submit" name="submit" class="my-6 text-gray-900 bg-[#F7BE38] hover:bg-[#F7BE38]/90 focus:ring-4 focus:outline-none focus:ring-[#F7BE38]/50 font-medium rounded text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#F7BE38]/50 mr-2 mb-2">
                            <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="paypal" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="currentColor" d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4 .7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9 .7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z"></path>
                            </svg>
                            Check out with PayPal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

 
    <!--AOS SCRIPT-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--Main script-->
    <script src="src/js/donation.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>