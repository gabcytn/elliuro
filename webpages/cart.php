<?php
    session_start();
    include "../includes/db_connection.php";
    if (!isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] != true) {
        header("Location: login.php");
    }   

    $uid = $_SESSION["user_id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <link rel="preload" href="../fonts/SeasonRegular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../fonts/GeraldineDEMOVer.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../fonts/TroyeFree-Sans.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="../img/logo_elliuro.JPG" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4bc1035a4c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../styles/cart.css">

</head>
<body>
    <header>
        <nav class="container">
            <div class="nav-main">
                <a href="../index.php" class="nav-brand">ELLIURO</a>
                <ul class="nav-list">
                    <li class="nav-item"><a href="mens.php" class="nav-link">Men</a></li>
                    <li class="nav-item"><a href="womens.php" class="nav-link">Women</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Kids</a></li>
                </ul>
            </div>
            <div class="nav-icons">
                <a href="#"><span class="material-symbols-outlined">search</span></a>
                <a href="profile.php"><span class="material-symbols-outlined">person</span></a>
                <a href=""><span class="material-symbols-outlined">local_mall</span></a>
            </div>
        </nav>
    </header>
    <main>
        <?php
            $stmt = $conn->prepare("SELECT * FROM cart_items WHERE cart_item_buyerID = ?");
            $stmt->bind_param("s", $uid);
            $stmt->execute();

            $result = $stmt->get_result();
            $price = 0;

        ?>

        <section class="main-section container">
            <div class="main-section__bag">
                <h1>Bag</h1>
                <?php
                    while ($row = $result->fetch_assoc()):
                        $item_id = $row["cart_item_id"];
                        $new_stmt = $conn->query("SELECT * FROM items WHERE item_id = '$item_id'");
                        $new_result = $new_stmt->fetch_assoc();

                        $price += $row["cart_item_qty"] * $new_result["item_price"];
                ?>
                    <div class="row-item">
                        <a class="xmark" href="../php/qty-delete.php?iid=<?php echo $row["cart_item_id"]; ?>"><i class="fa-solid fa-xmark" style="color: #333;"></i></a>
                        <div class="row-item__img">
                            <img src="<?php echo $new_result["item_img"]; ?>" alt="item">
                        </div>
                        <div class="row-item__details">
                            <p><?php echo $new_result["item_name"]; ?></p>
                            <p>$<?php echo $new_result["item_price"]; ?></p>
                            <p>Section: <?php echo $row["cart_item_section"]; ?></p>
                            <div class="row-item__qty">
                                <a href="../php/qty-decrease.php?iid=<?php echo $row["cart_item_id"]; ?>&qty=<?php echo $row["cart_item_qty"]; ?>"><i class="fa-solid fa-circle-minus"></i></a>
                                <p><?php echo $row["cart_item_qty"]; ?></p>
                                <a href="../php/qty-increase.php?iid=<?php echo $row["cart_item_id"]; ?>&qty=<?php echo $row["cart_item_qty"]; ?>"><i class="fa-solid fa-circle-plus"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            </div>
            <?php 

            ?>
            <div class="main-section__summary">
                <h1>Summary</h1>
                <div class="summary-details">
                    <div class="summary-row">
                        <p>Subtotal</p>
                        <p>$<?php echo $price; ?></p>
                    </div>
                    <div class="summary-row">
                        <p>Shipping</p>
                        <p>$0</p>
                    </div>
                    <div class="summary-row">
                        <p>Estimated total</p>
                        <p>$<?php echo $price; ?></p>
                    </div>
                    <form action="../php/checkout.php" method="post">
                        <button type="submit">Checkout</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php
        include "../includes/footer.php";
    ?>
</body>
</html>