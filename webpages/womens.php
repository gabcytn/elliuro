<?php
    session_start();
    include "../includes/db_connection.php";
    if (!isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] != true) {
        header("Location: login.php");
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women's</title>
    <link rel="preload" href="../fonts/SeasonRegular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../fonts/GeraldineDEMOVer.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../fonts/TroyeFree-Sans.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="../img/logo_elliuro.JPG" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4bc1035a4c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../styles/mens.css">
</head>
<body>
    <header>
        <nav class="container">
            <div class="nav-main">
                <h1 class="nav-brand">ELLIURO</h1>
                <ul class="nav-list">
                    <li class="nav-item"><a href="mens.php" class="nav-link">Men</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Women</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Kids</a></li>
                </ul>
            </div>
            <div class="nav-icons">
                <a href="#"><span class="material-symbols-outlined">search</span></a>
                <a href="#"><span class="material-symbols-outlined">person</span></a>
                <a href="../webpages/item.php"><span class="material-symbols-outlined">local_mall</span></a>
            </div>
        </nav>
    </header>
    <main>
        <p id="main-title">Women's Collection</p>
        <section class="section-items__sort">
            <div class="items-header container">
                <div class="items-header__left">
                    <div class="items-header__category">
                        <p>Material</p>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    <div class="items-header__category">
                        <p>Color</p>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    <div class="items-header__category">
                        <p>Price</p>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    <div class="items-header__category">
                        <p>Size</p>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                </div>
                <div class="items-header__right">
                    <p>Clear</p>
                    <div class="sort">
                        <p>Sort by relevance</p>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                </div>
            </div>
        </section>

        <?php
            $stmt = $conn->prepare("SELECT * FROM items");
            $stmt->execute();

            $cur = $stmt->get_result();
        ?>

        <section class="section-main container">
            <div class="items-row">
                <?php  while ($row = $cur->fetch_assoc()): ?>
                    <div class="shop-item">
                        <div class="shop-item__image">
                            <a href="item.php?iid=<?php echo $row["item_id"];?>&s=women">
                                <img src="<?php echo $row["item_img"]; ?>" alt="">
                            </a>
                        </div>
                        <div class="shop-item__texts">
                            <p><?php echo $row["item_name"];?></p>
                            <p>$<?php echo $row["item_price"];?></p>
                            <p>3 colors</p>
                        </div>
                    </div>
                <?php 
                    endwhile;
                ?>

            </div>

            <div class="items-row">
                <div class="shop-item">
                    <div class="shop-item__image">
                        <a href="item.php?iid=1&s=women">
                            <img src="../img/index-2.png" alt="">
                        </a>
                    </div>
                    <div class="shop-item__texts">
                        <p>Elliuro Urban Hoodie</p>
                        <p>$1300</p>
                        <p>3 colors</p>
                    </div>
                </div>
                <div class="shop-item">
                    <div class="shop-item__image">
                        <a href="item.php?iid=1&s=women">
                            <img src="../img/hoodie.png" alt="">
                        </a>
                    </div>
                    <div class="shop-item__texts">
                        <p>Elliuro Urban Hoodie</p>
                        <p>$1300</p>
                        <p>3 colors</p>
                    </div>
                </div>
                <div class="shop-item">
                    <div class="shop-item__image">
                        <a href="item.php?iid=1&s=women">
                            <img src="../img/hoodie.png" alt="">
                        </a>
                    </div>
                    <div class="shop-item__texts">
                        <p>Elliuro Urban Hoodie</p>
                        <p>$1300</p>
                        <p>3 colors</p>
                    </div>
                </div>
            </div>

            <!-- <div class="items-row">
                <?php  while ($row = $cur->fetch_assoc()): ?>
                    <div class="shop-item">
                        <div class="shop-item__image">
                            <a href="item.php?iid=<?php echo $row["item_id"];?>">
                                <img src="<?php echo $row["item_img"]; ?>" alt="">
                            </a>
                        </div>
                        <div class="shop-item__texts">
                            <p><?php echo $row["item_name"];?></p>
                            <p>$<?php echo $row["item_price"];?></p>
                            <p>3 colors</p>
                        </div>
                    </div>
                <?php 
                    endwhile;
                ?>

            </div> -->
            
        </section>
       
    </main>

    <?php
        include "../includes/footer.php";
    ?>
</body>
</html>