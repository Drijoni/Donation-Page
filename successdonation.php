<?php
session_start();

$fullName =  $_SESSION['fullName'];
if ($fullName != "") {

?>
    <!--Tailwind-->
    <link href="src/style/dist/output.css" rel="stylesheet">
    <!--Style-->
    <link href="src/style/donation.css" rel="stylesheet">
    <!--AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <body class="flex items-center justify-center flex-col">

        <div id='defaultModal' tabindex='-1' data-aos="fade-up" aria-hidden='true' class='overflow-y-auto overflow-x-hidden z-50'>
            <div class='relative p-4 w-full max-w-2xl h-full md:h-auto'>
                <div class='relative bg-white rounded-lg shadow dark:bg-gray-700'>
                    <div class='flex justify-center items-start rounded dark:border-gray-600 p-8'>
                        <h3 class='text-xl font-semibold text-gray-900 dark:text-white'>
                            Thank you so much for your donation <?php $fullName ?>!
                        </h3>
                    </div>
                </div>
            </div>
        </div>
         <!--AOS SCRIPT-->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
<?php

    ///header("refresh:1; url=form.php");


    echo "<script>setTimeout(()=> {
        window.location.href = 'http://localhost/Paypal/form.php';
    },1000)</script>";


} else {
    header("Location:form.php");
}

session_destroy();
/**/
?>