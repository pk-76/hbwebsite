<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taj Hotel- About Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php require('inc/links.php'); ?>
    <style>
        .box {
            border-top-color: var(--teal) !important;
        }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php') ?>

    <div class="m-5 p-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non aliquam possimus aut
            similique in consectetur <br>
            qui nobis. Ipsa quos quidem error unde eos autem quibusdam, eveniet eius tempore corporis ut.</p>
    </div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam odit adipisci sequi, dolores
                    obcaecati cum expeditaLorem ipsum dolor sit amet consectetur adipisicing elit. Numquam odit adipisci
                    sequi, dolores obcaecati cum expedita.</p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/about.jpg" class="w-100">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
                    <img src="images/about/customers.svg" width="70px">
                    <h4 class="mt-3">250+ Customers</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.svg" width="70px">
                    <h4 class="mt-3">24*7 Support</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
                    <img src="images/about/rating.svg" width="70px">
                    <h4 class="mt-3">150+ Ratings</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 h-font text-center fw-bold">MANAGEMENT TEAM</h3>
    <div class="container px-4">
        
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-light text-center overflow-hidden rounded">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-light text-center overflow-hidden rounded">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-light text-center overflow-hidden rounded">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-light text-center overflow-hidden rounded">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-light text-center overflow-hidden rounded">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <?php require('inc/footer.php') ?>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 40,
                pagination: {
                    el: ".swiper-pagination",
                },

                breakpoints: {
                    320: {
                        slidesPerView: "1"
                    },
                    680: {
                        slidesPerView: "1"
                    },
                    768: {
                        slidesPerView: "3"
                    },
                    680: {
                        slidesPerView: "3"
                    }
                }
            });
        </script>

</body>

</html>


<?php

/*   USER END

Book Hotel Room
check booking availability
Manage booking - modify booking or cancel booking
Give review and rating og booked rooma and its ervices
user login and registraion system
profile management
payment integration*/

/* Admin End

Room management - add , modify and delete rooms details
Manage users : views, delete, ban and unban users 
Booing management : Arrival status, checkout status
Refund and early checkout and cancellation
Finalize booking - invoice genrate


Technology

Front End :
HTML CSS, Javascript and AJAX  Bootstrap 5 (framework)
Some additional plugin or libraries for animation, invoice generation carasoul

Backend :
PHP | MysSql 

*/


?>