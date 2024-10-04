<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taj Hotel - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php require('inc/links.php'); ?>
    <style>
        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width:575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>

</head>

<body class="bg-light">

    <?php require('inc/header.php') ?>
    <!-- Carasoul -->
    <div class="container-fluid px-lg-4 mt-4">
        <!-- Swiper -->
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images\carousel\IMG_55677.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images\carousel\IMG_15372.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_40905.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images\carousel\IMG_62045.png" class="w-100 d-block" />
                </div>
            </div>

        </div>
    </div>
    <!-- check availability form -->

    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h4 class="mb-4">Check Availability</h4>
                <form action="">
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500">Adult</label>
                            <select class="form-select shadow-none">

                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight:500">Children</label>
                            <select class="form-select shadow-none">

                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- our rooms -->

    <h2 class="mt-5 pt-4 mb-5 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple room name</h5>
                        <h6 class="mb-4">₹800/- per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Feauters</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                1 Sofa
                            </span>
                        </div>
                        <div class="fascilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                1 Room heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple room name</h5>
                        <h6 class="mb-4">₹800/- per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Feauters</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                1 Sofa
                            </span>
                        </div>
                        <div class="fascilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                1 Room heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple room name</h5>
                        <h6 class="mb-4">₹800/- per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Feauters</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                1 Sofa
                            </span>
                        </div>
                        <div class="fascilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                TV
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">
                                1 Room heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="3" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
        </div>
    </div>
    <!-- our fascilities -->
    <h2 class="mt-5 pt-4 mb-5 text-center fw-bold h-font">OUR FASCILITIES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_43553.svg" width="80px" alt="">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_27079.svg" width="80px" alt="">
                <h5 class="mt-3">Charging</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_47816.svg" width="80px" alt="">
                <h5 class="mt-3">Sofa</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_96423.svg" width="80px" alt="">
                <h5 class="mt-3">Heater</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_41622.svg" width="80px" alt="">
                <h5 class="mt-3">TV</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="3" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Fascilities >>></a>
            </div>
        </div>
    </div>

    <!-- testimonial -->
    <h2 class="mt-5 pt-4 mb-5 text-center fw-bold h-font">TESTIMONIAL</h2>
    <div class="container mt-5">
        <!-- Swiper -->
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/IMG_27079.svg" width="30px" alt="">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas libero inventore odit labore
                        nemo possimus, magnam autem doloribus non ducimus?</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/IMG_27079.svg" width="30px" alt="">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas libero inventore odit labore
                        nemo possimus, magnam autem doloribus non ducimus?</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/IMG_27079.svg" width="30px" alt="">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas libero inventore odit labore
                        nemo possimus, magnam autem doloribus non ducimus?</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="3" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
        </div>
    </div>


    <br><br><br>

    <!-- Reach US -->

    <h2 class="mt-5 pt-4 mb-5 text-center fw-bold h-font">Reach US</h2>
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497700.1123005915!2d77.30127814132629!3d12.95379021332858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1727958962998!5m2!1sen!2sin"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white rounded p-4 mb-4">
                    <h5>Call Us</h5>
                    <a href="tel :+917976192071" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> + 91 7976192071</a><br>
                    <a href="tel :+917976192071" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> + 91 7976192071</a>
                </div>
                <div class="bg-white rounded p-4 mb-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="d-inline-block mb-2">
                        <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-twitter me-1"></i>Twitter
                        </span>
                    </a><br>
                    <a href="#" class="d-inline-block mb-2">
                        <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-facebook me-1"></i>Facebook
                        </span>
                    </a><br>
                    <a href="#" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-instagram me-1"></i>Instgram
                        </span>
                    </a><br>
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