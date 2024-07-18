<?php
    session_start();
    if (!isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] != true) {
        header("Location: webpages/login.php");
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>elliuro</title>
    <link rel="preload" href="fonts/SeasonRegular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/GeraldineDEMOVer.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/TroyeFree-Sans.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="img/logo_elliuro.JPG" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4bc1035a4c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="styles/index.css">
    
</head>
<body>
    <section class="video">
        <video id="video" loop src="img/home_banner.mp4"></video>
        <header class="container">
            <nav>
                <div class="nav-location">
                    <span class="material-symbols-outlined">language</span>
                    <p>Manila, Philipines</p>
                </div>
                <div class="nav-main">
                    <div class="main_title">
                        <h1>Elliuro</h1>
                    </div>
                    <div class="nav-sections">
                        <a href="webpages/mens.php">MEN</a>
                        <a href="#">WOMEN</a>
                        <a href="#">KIDS</a>
                    </div>
                </div>
                <div class="nav-icons">
                    <a href="#"><span class="material-symbols-outlined">search</span></a>
                    <a href="#"><span class="material-symbols-outlined">person</span></a>
                    <a href="webpages/cart.php"><span class="material-symbols-outlined">local_mall</span></a>

                </div>
            </nav>
            <h1 id="main-subtitle">BRING ELEGANCE TO THE<br/> STREETS</h1>
        </header>
    </section>

    <main>
        <section class="new-arrivals container">
            <h1 class="new-arrivals__title">New in</h1>
            <div class="new-arrivals__carousel">
                <div class="new-arrivals__card">
                    <img class="new-arrivals__img" src="img/new-arrival.png" alt="New arrival image">
                    <div class="new-arrivals__text">
                        <p class="new-arrival__name">ELLIURO CLASSIC</p>
                        <p class="new-arrival__price">$300</p>    
                    </div>
                </div>
                <div class="new-arrivals__card">
                    <img class="new-arrivals__img" src="img/new-arrival.png" alt="New arrival image">
                    <div class="new-arrivals__text">
                        <p class="new-arrival__name">ELLIURO CLASSIC</p>
                        <p class="new-arrival__price">$300</p>    
                    </div>
                </div>
                <div class="new-arrivals__card">
                    <img class="new-arrivals__img" src="img/new-arrival.png" alt="New arrival image">
                    <div class="new-arrivals__text">
                        <p class="new-arrival__name">ELLIURO CLASSIC</p>
                        <p class="new-arrival__price">$300</p>    
                    </div>
                </div>
                <div class="new-arrivals__card">
                    <img class="new-arrivals__img" src="img/new-arrival.png" alt="New arrival image">
                    <div class="new-arrivals__text">
                        <p class="new-arrival__name">ELLIURO CLASSIC</p>
                        <p class="new-arrival__price">$300</p>    
                    </div>
                </div>
                <div class="new-arrivals__card">
                    <img class="new-arrivals__img" src="img/new-arrival.png" alt="New arrival image">
                    <div class="new-arrivals__text">
                        <p class="new-arrival__name">ELLIURO CLASSIC</p>
                        <p class="new-arrival__price">$300</p>    
                    </div>
                </div>
                <div class="new-arrivals__card">
                    <img class="new-arrivals__img" src="img/new-arrival.png" alt="New arrival image">
                    <div class="new-arrivals__text">
                        <p class="new-arrival__name">ELLIURO CLASSIC</p>
                        <p class="new-arrival__price">$300</p>    
                    </div>
                </div>
                <div class="new-arrivals__card">
                    <img class="new-arrivals__img" src="img/new-arrival.png" alt="New arrival image">
                    <div class="new-arrivals__text">
                        <p class="new-arrival__name">ELLIURO CLASSIC</p>
                        <p class="new-arrival__price">$300</p>    
                    </div>
                </div>
            </div>
        </section>

        <section class="section-him container">
            <div class="section-him__poster">
                <img src="img/index-2.png" alt="">
                <div class="section-him__poster--texts">
                    <h2>LUXE HOODIE</h2>
                    <button>SHOP NOW</button>
                </div>
            </div>
            <div class="section-him__carousel">
                <div class="section-him__carousel--container">
                    <!-- <img src="img/index-3.jpg" alt=""> -->
                    <button id="btn-carousel__left">&#10094</button>
                    <button id="btn-carousel__right">&#10095</button>
                </div>
                <div class="section-him__carousel--texts">
                    <h3>STREET TEE</h3>
                    <p>$150 </p>
                </div>
            </div>
        </section>

        <section class="summer-collection container">
            <h1>SUMMER COLLECTION</h1>
            <div class="summer-collection__list">
                <div class="new-arrivals__card">
                    <img class="new-arrivals__img" src="img/new-arrival.png" alt="New arrival image">
                    <div class="new-arrivals__text">
                        <p class="new-arrival__name">ELLIURO CLASSIC</p>
                        <p class="new-arrival__price">$300</p>    
                    </div>
                </div>
                <div class="new-arrivals__card">
                    <img class="new-arrivals__img" src="img/new-arrival.png" alt="New arrival image">
                    <div class="new-arrivals__text">
                        <p class="new-arrival__name">ELLIURO CLASSIC</p>
                        <p class="new-arrival__price">$300</p>    
                    </div>
                </div><div class="new-arrivals__card">
                    <img class="new-arrivals__img" src="img/new-arrival.png" alt="New arrival image">
                    <div class="new-arrivals__text">
                        <p class="new-arrival__name">ELLIURO CLASSIC</p>
                        <p class="new-arrival__price">$300</p>    
                    </div>
                </div><div class="new-arrivals__card">
                    <img class="new-arrivals__img" src="img/new-arrival.png" alt="New arrival image">
                    <div class="new-arrivals__text">
                        <p class="new-arrival__name">ELLIURO CLASSIC</p>
                        <p class="new-arrival__price">$300</p>    
                    </div>
                </div><div class="new-arrivals__card">
                    <img class="new-arrivals__img" src="img/new-arrival.png" alt="New arrival image">
                    <div class="new-arrivals__text">
                        <p class="new-arrival__name">ELLIURO CLASSIC</p>
                        <p class="new-arrival__price">$300</p>    
                    </div>
                </div><div class="new-arrivals__card">
                    <img class="new-arrivals__img" src="img/new-arrival.png" alt="New arrival image">
                    <div class="new-arrivals__text">
                        <p class="new-arrival__name">ELLIURO CLASSIC</p>
                        <p class="new-arrival__price">$300</p>    
                    </div>
                </div><div class="new-arrivals__card">
                    <img class="new-arrivals__img" src="img/new-arrival.png" alt="New arrival image">
                    <div class="new-arrivals__text">
                        <p class="new-arrival__name">ELLIURO CLASSIC</p>
                        <p class="new-arrival__price">$300</p>    
                    </div>
                </div>
            </div>
        </section>

        <section class="section-her container">
            <div class="section-her__carousel">
                <div class="section-her__carousel--container">
                    <!-- <img src="img/index-3.jpg" alt=""> -->
                    <button id="btn-carousel__left">&#10094</button>
                    <button id="btn-carousel__right">&#10095</button>
                </div>
                <div class="section-her__carousel--texts">
                    <h3>STREET TEE</h3>
                    <p>$150 </p>
                </div>
            </div>
            <div class="section-her__poster">
                <img src="img/hoodie-girl.png" alt="">
                <div class="section-her__poster--texts">
                    <h2>LUXE HOODIE FOR HER</h2>
                    <button>SHOP NOW</button>
                </div>
            </div>
        </section>


        <section class="section-testimonies container">
            <h1 class="section-testimonies__title">Testimonies</h1>
            <div class="section-testimonies__carousel">
                <div class="section-testimonies__card">
                    <div class="testimonies-stars">
                        <i class="fa-solid fa-star" style="color: #fffd54;"></i>
                        <i class="fa-solid fa-star" style="color: #fffd54;"></i>
                        <i class="fa-solid fa-star" style="color: #fffd54;"></i>
                        <i class="fa-regular fa-star" style="color: #fffd54;"></i>
                        <i class="fa-regular fa-star" style="color: #fffd54;"></i>
                    </div>
                    <h1 class="testimonies-title">ELLIURO STREET TEE</h1>
                    <h2 class="testimonies-subtitle">Good Quality!</h2>
                    <p class="testimonies-content">I recently purchased the elliuro street tee, and it has quickly become my favorite piece of clothing. The material is incredibly soft and comfortable, making it perfect for both lounging at home and running errands around town.</p>
                    <p class="testimonies-sender">Lo Ys</p>
                    <p class="testimonies-date">July 14, 2024</p>
                </div>
                <div class="section-testimonies__card">
                    <div class="testimonies-stars">
                        <i class="fa-solid fa-star" style="color: #fffd54;"></i>
                        <i class="fa-solid fa-star" style="color: #fffd54;"></i>
                        <i class="fa-solid fa-star" style="color: #fffd54;"></i>
                        <i class="fa-regular fa-star" style="color: #fffd54;"></i>
                        <i class="fa-regular fa-star" style="color: #fffd54;"></i>
                    </div>
                    <h1 class="testimonies-title">ELLIURO STREET TEE</h1>
                    <h2 class="testimonies-subtitle">Good Quality!</h2>
                    <p class="testimonies-content">I recently purchased the elliuro street tee, and it has quickly become my favorite piece of clothing. The material is incredibly soft and comfortable, making it perfect for both lounging at home and running errands around town.</p>
                    <p class="testimonies-sender">Lo Ys</p>
                    <p class="testimonies-date">July 14, 2024</p>
                </div>
                <div class="section-testimonies__card">
                    <div class="testimonies-stars">
                        <i class="fa-solid fa-star" style="color: #fffd54;"></i>
                        <i class="fa-solid fa-star" style="color: #fffd54;"></i>
                        <i class="fa-solid fa-star" style="color: #fffd54;"></i>
                        <i class="fa-regular fa-star" style="color: #fffd54;"></i>
                        <i class="fa-regular fa-star" style="color: #fffd54;"></i>
                    </div>
                    <h1 class="testimonies-title">ELLIURO STREET TEE</h1>
                    <h2 class="testimonies-subtitle">Good Quality!</h2>
                    <p class="testimonies-content">I recently purchased the elliuro street tee, and it has quickly become my favorite piece of clothing. The material is incredibly soft and comfortable, making it perfect for both lounging at home and running errands around town.</p>
                    <p class="testimonies-sender">Lo Ys</p>
                    <p class="testimonies-date">July 14, 2024</p>
                </div>
                <div class="section-testimonies__card">
                    <div class="testimonies-stars">
                        <i class="fa-solid fa-star" style="color: #fffd54;"></i>
                        <i class="fa-solid fa-star" style="color: #fffd54;"></i>
                        <i class="fa-solid fa-star" style="color: #fffd54;"></i>
                        <i class="fa-regular fa-star" style="color: #fffd54;"></i>
                        <i class="fa-regular fa-star" style="color: #fffd54;"></i>
                    </div>
                    <h1 class="testimonies-title">ELLIURO STREET TEE</h1>
                    <h2 class="testimonies-subtitle">Good Quality!</h2>
                    <p class="testimonies-content">I recently purchased the elliuro street tee, and it has quickly become my favorite piece of clothing. The material is incredibly soft and comfortable, making it perfect for both lounging at home and running errands around town.</p>
                    <p class="testimonies-sender">Lo Ys</p>
                    <p class="testimonies-date">July 14, 2024</p>
                </div>
            </div>
        </section>

    </main>

    <?php 
        include "includes/footer.php";
    ?>
</body>
</html>