<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taj Hotel- facilities</title>
    <?php require('inc/links.php'); ?>
    <style>
        .pop:hover {
            border-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php') ?>

    <div class="m-5 p-4">
        <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non aliquam possimus aut
            similique in consectetur <br>
            qui nobis. Ipsa quos quidem error unde eos autem quibusdam, eveniet eius tempore corporis ut.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 px-4 mb-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/IMG_43553.svg" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At natus perspiciatis necessitatibus
                        aperiam corporis nobis obcaecati!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 px-4 mb-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/IMG_43553.svg" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At natus perspiciatis necessitatibus
                        aperiam corporis nobis obcaecati!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 px-4 mb-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/IMG_43553.svg" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At natus perspiciatis necessitatibus
                        aperiam corporis nobis obcaecati!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 px-4 mb-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/IMG_43553.svg" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At natus perspiciatis necessitatibus
                        aperiam corporis nobis obcaecati!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 px-4 mb-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/IMG_43553.svg" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At natus perspiciatis necessitatibus
                        aperiam corporis nobis obcaecati!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 px-4 mb-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/IMG_43553.svg" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At natus perspiciatis necessitatibus
                        aperiam corporis nobis obcaecati!</p>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            }

        });

        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
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
                    slidesPerView: "2"
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