<?php require_once 'controller/autoController.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style/style_home.css">
    <link rel="stylesheet" href="Style/btn.css">
    <title>Rasoda.in | Home</title>
</head>

<body>
    <header>
        <a href="#home" class="logo">Rasoda.In</a>




        <form action="index.php" method="get">
            <button type="submit" name="user" class="autho">
                <?php if (!isset($_SESSION['id'])) {

                    echo 'Login/Register';
                } else {
                    echo $_SESSION['username'];
                } ?>
            </button>
        </form>


    </header>
    <div class="slider">
        <section id="home">
            <div class="display">

                <div class="demo">

                    <h1>Welcome to Rasoda.in</h1>
                    <h3>We got something for everyone.</h3>
                    <div>

                        <a href="Food_Menu/menu.php"> <button class="btn btn2">Explore</button></a>

                    </div>

                </div>
            </div>

        </section>
        <section id="services">
            <div class="fix">
                <div class="hcon">
                    <h1 id="serhead"> SERVICES</h1>
                    <div class="sernav">
                        <a href="#ss"> <input type="radio" name="btn" id=""></a>
                        <a href="#ss1"> <input type="radio" name="btn" id=""></a>
                        <a href="#ss2"> <input type="radio" name="btn" id=""></a>

                    </div>
                </div>
            </div>
            <div class="show">
                <div class="cont">



                </div>
            </div>
        </section>
        <section id="team"></section>
    </div>
    <div class="navigation">
        <div class="control">
            <a href="#home"> <img src="asset/back.png" class="navdot" alt=""> </a>
        </div>
        <div class="navigation1">

            <div class="control">
                <a href="#services"> <img src="asset/next.png" class="navdot" alt=""></a>
            </div>

        </div>

    </div>
</body>

</html>