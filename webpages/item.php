<?php
    session_start();
    include "../includes/db_connection.php";
    if (!isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] != true) {
        header("Location: login.php");
    }   

    $uid = $_SESSION["user_id"];
    $iid = $_GET["iid"];
    $s = $_GET["s"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Item</title>
    <link rel="preload" href="../fonts/SeasonRegular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../fonts/GeraldineDEMOVer.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../fonts/TroyeFree-Sans.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="../img/logo_elliuro.JPG" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4bc1035a4c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../styles/item.css">
</head>
<body>
    <header>
        <nav class="container">
            <div class="nav-main">
                <a href="../index.php" class="nav-brand">ELLIURO</a>
                <ul class="nav-list">
                    <li class="nav-item"><a href="mens.php" class="nav-link">Men</a></li>
                    <li class="nav-item"><a href="womens.php" class="nav-link">Women</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Kids</a></li>
                </ul>
            </div>
            <div class="nav-icons">
                <a href="#"><span class="material-symbols-outlined">search</span></a>
                <a href="profile.php"><span class="material-symbols-outlined">person</span></a>
                <a href="cart.php"><span class="material-symbols-outlined">local_mall</span></a>
            </div>
        </nav>
    </header>
    <main>
        <?php
            $item_id = $_GET["iid"];
            $stmt = $conn->prepare("SELECT * FROM items WHERE item_id = ?");
            $stmt->bind_param("s", $item_id);
            $stmt->execute();
            $cur = $stmt->get_result();

            $row = $cur->fetch_assoc();

        ?>
        <section class="section-main container">
            <div class="section-main__img">
                <img src="<?php echo $row["item_img"]; ?>" alt="Item">
            </div>
            <div class="section-main__details">
                <h1 id="item-name"><?php echo $row["item_name"]; ?></h1>
                <p id="item-price">$<?php echo $row["item_price"]; ?></p>
                <div class="item-color">
                    <p>Color</p>
                    <p>Cool gray</p>
                </div>
                <div class="item-sizes">
                    <div class="size"><img src="<?php echo $row["item_img"]; ?>" alt=""></div>
                    <div class="size"><img src="<?php echo $row["item_img"]; ?>" alt=""></div>
                    <div class="size"><img src="<?php echo $row["item_img"]; ?>" alt=""></div>
                </div>
                <div class="item-size">
                    <p>Size</p>
                    <i class="fa-solid fa-angle-down"></i>
                </div>
                <button id="add-to-cart"><a href="../php/add-to-cart.php?iid=<?php echo $iid; ?>&s=<?php echo $s; ?>">Add to cart</a></button>
            </div>
        </section>
    </main>


    <?php
        include "../includes/footer.php"
    ?>
</body>
</html>