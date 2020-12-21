<?php 
     require_once '../controller/autoController.php'; 
    if(!isset($_SESSION['id'])){
        header('location:../login/login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rasoda.in | Menu</title>
    <link rel="stylesheet" href="menu_style.css">
    <link rel="stylesheet" href="../style/btn.css">
</head>

<body>
<header>
        <a href="../index.php" class="logo">Rasoda.In</a>




        <form action="menu.php" method="get">
            <button type="submit" name="user1" class="autho"> <?php if (!isset($_SESSION['id'])) {
                                                                                                    echo 'Login/Register';
                                                                                                } else {
                                                                                                    echo $_SESSION['username'];
                                                                                                } ?> </button> </form>


    </header>
    <div class="wrapper">
        <div class="title">
            <h4><span></span>our menu</h4>
        </div>
        <div class="menu">
            <div class="single-menu">
                <img src="https://cdn.pixabay.com/photo/2017/01/11/11/33/cake-1971552_960_720.jpg" alt="">
                <div class="menu-content">
                    <h4> <a href="http://localhost/1/section_menu/section_menu.php"> Chatak Matak Mess</a><span>₹/month</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://cdn.pixabay.com/photo/2017/05/07/08/56/pancakes-2291908_960_720.jpg" alt="">
                <div class="menu-content">
                    <h4>Snacks'n Shakes <span>₹/month</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://cdn.pixabay.com/photo/2017/01/07/20/40/candy-1961536_960_720.jpg" alt="">
                <div class="menu-content">
                    <h4>90's Mess<span>₹/month</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://cdn.pixabay.com/photo/2017/12/09/08/18/pizza-3007395_960_720.jpg" alt="">
                <div class="menu-content">
                    <h4>Cafein <span>₹/month</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://cdn.pixabay.com/photo/2017/03/30/15/47/churros-2188871_960_720.jpg" alt="">
                <div class="menu-content">
                    <h4>INdian Coffee House <span>₹/month</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://cdn.pixabay.com/photo/2017/03/30/15/47/churros-2188871_960_720.jpg" alt="">
                <div class="menu-content">
                    <h4>Sapna Sweets <span>₹/month</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>