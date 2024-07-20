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
    <title>Profile</title>
    <link rel="preload" href="../fonts/SeasonRegular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../fonts/GeraldineDEMOVer.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../fonts/TroyeFree-Sans.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="../img/logo_elliuro.JPG" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4bc1035a4c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../styles/profile.css">
    <script src="../js/profile.js" defer></script>
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
                <a href=""><span class="material-symbols-outlined">search</span></a>
                <a href=""><span class="material-symbols-outlined">person</span></a>
                <a href="cart.php"><span class="material-symbols-outlined">local_mall</span></a>
            </div>
        </nav>
    </header>
    <main>
        <?php 
            $stmt = $conn->query("SELECT * FROM users WHERE user_id = '$uid'");
            $row = $stmt->fetch_assoc();
        ?>
        <section class="container">
            <div class="profile-details">
                <div class="profile-details__img">
                    <img src="<?php echo $row["user_img"] ?>" alt="Profile picture">
                </div>
                <div class="profile-details__bio">
                    <p><?php echo $row["user_firstname"] . " " . $row["user_lastname"]; ?></p>
                    <p><?php echo $row["user_email"] ?></p>
                    <p>
                        <?php
                            $bio = $row["user_bio"];
                            if ($bio == null) {
                                echo "No bio yet";
                            } else {
                                echo $bio;
                            }
                        ?>
                    </p>
                </div>
                <button id="edit-btn">Edit</button>
                <button id="logout-btn">Logout</button>
            </div>
            <div class="past-items">
                <div class="past-items__titles">
                    <h1>Orders</h1>
                    <h1>Reviews</h1>
                </div>
                <div class="past-items__content">
                    <div class="history-items">
                        <?php 
                            $new_stmt = $conn->query("SELECT * FROM history WHERE history_item_buyerID = '$uid'");
                            while ($new_row = $new_stmt->fetch_assoc()):
                                $item_id = $new_row["history_item_id"];
                                $items = $conn->query("SELECT * FROM items WHERE item_id = '$item_id'");
                                while ($all_items = $items->fetch_assoc()):
                        ?>
                                    <div class="row-item">
                                        <div class="row-item__img">
                                            <img src="<?php echo $all_items["item_img"] ?>" alt="item">
                                        </div>
                                        <div class="row-item__details">
                                            <div class="item-details">
                                                <p><?php echo $all_items["item_name"]; ?></p>
                                                <p>$<?php echo $all_items["item_price"]; ?></p>
                                                <p>Section: <?php echo $all_items["item_section"]; ?></p>
                                            </div>
                                            <div class="item-date-details">
                                                <p id="qty">Qty: <?php echo $new_row["history_qty"] ?></p>
                                                <p id="date"><?php echo $new_row["date"] ?></p>
                                            </div>
                                        </div>
                                    </div>
                            <?php endwhile; ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="history-reviews">
                        <h3>Elliuro</h3>
                        <div class="history-reviews__stars">
                            <i class="fa-solid fa-star" style="color: #fffd54;"></i>
                            <i class="fa-solid fa-star" style="color: #fffd54;"></i>
                            <i class="fa-solid fa-star" style="color: #fffd54;"></i>
                            <i class="fa-regular fa-star" style="color: #fffd54;"></i>
                            <i class="fa-regular fa-star" style="color: #fffd54;"></i>
                        </div>
                        <div class="history-reviews__messages">
                            <div class="msg1">
                                <p>The products are nice. Very comfortable to wear even after laundry washes. It doesn't fade out and very long-lasting. I like the quality!</p>
                            </div>
                            <div class="msg2">
                                <p>Thank you ma'am/sir!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>

    <?php
    include "../includes/footer.php";
    ?>

    <dialog id="edit-dialog">
            <?php 
                $form = $conn->query("SELECT * FROM users WHERE user_id = '$uid'");
                $form_row = $form->fetch_assoc();
            ?>
        <form action="../php/update_profile.php" enctype="multipart/form-data" method="post">
            <h2>Edit Profile</h2>
            <div class="file-upload">
                <label for="profile_img">Upload profile photo</label>
                <input type="file" name="profile_pic" id="profile_img" value="<?php echo $form_row["user_img"] ?>">
            </div>

            <input type="email" name="email" id="email" placeholder="EMAIL ADDRESS" value="<?php echo $form_row["user_email"] ?>" required>
            <input type="text" name="lname" id="lname" placeholder="LAST NAME" value="<?php echo $form_row["user_lastname"] ?>" required>
            <input type="text" name="fname" id="fname" placeholder="FIRST NAME" value="<?php echo $form_row["user_firstname"] ?>" required>
            <input type="text" name="un" id="un" placeholder="USERNAME" value="<?php echo $form_row["user_username"] ?>" required>
            <input type="text" name="bio" id="bio" placeholder="ADD BIO" value="<?php echo $form_row["user_bio"]; ?>">

            <?php $conn->close(); ?>
            <div class="form-buttons">
                <button type="button" id="close-edit">Close</button>
                <button type="submit" id="save-edit">Save</button>
            </div>
        </form>
    </dialog>

    <dialog id="logout-dialog">
        <form action="../php/logout.php" class="">
            <h2>Are you sure you want to logout?</h2>
            <div class="logout-buttons">
                <button type="button" id="no-logout">No</button>
                <button type="submit" id="yes-logout">Yes</button>
            </div>
            
        </form> 
    </dialog>
</body>
</html>