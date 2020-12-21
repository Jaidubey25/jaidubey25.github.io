<?php require_once '../controller/autoController.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="section_style.css">
    <link rel="stylesheet" href="../Style/btn.css">
    <link rel="stylesheet" href="../Style/style_home.css">
    <title>Document</title>
</head>

<body>
<header>
        <a href="../index.php" class="logo">Rasoda.In</a>




        <form action="section_menu.php" method="get">
            <button type="submit" name="user1" class="autho"> <?php if (!isset($_SESSION['id'])) {
                                                                                                    echo 'Login/Register';
                                                                                                } else {
                                                                                                    echo $_SESSION['username'];
                                                                                                } ?> </button> </form>


    </header>
<form action="section_checkout.php" method="get">
    <div class="menu-container">
        <h1 style="text-transform: uppercase;" > <img src="../Asset/tacu-tacu.png" style="width: 40px;margin-top: 5px;" alt=""> Directly from the kitchen of LUNCH BOX</h1>
        <div class="details">

            <div class="schedule" style="display: inline-block;" >
                <h2 style="font-size: 1.9em;">SCHEDULE</h2> <br>
                <p> <b><?php echo $_SESSION['id'] ?></b>  Poha,upma,idli & chutney , sandwich , bread-toast</p>
                <p> <b> II.Lunch:</b> 4 Chapati/paratha + Rice+ Dal + Pickel </p> 
                <p> <b> III.Dinner:</b> 5 Chapati/paratha + Rice+ Dal + Pickel </p> 
                <br><br>
                <p>*Everyday Different</p>
                <p>**PerDay Differnt Seasonal Vegetable</p>
            </div>
            
            <div class="mess-service">
                <h2>SERVICES</h2>
                <p>
                    1) Every Sunday Special LunchBox.
                    
                </p>
                <p>
                    2) Breakfast Timing (7:30pm - 10:30pm).
                    
                </p>
                <p>3) Lunch Timing (12:30pm -2:30pm)</p>
                <p>4) Dinner Timming (7:00pm - 9:30pm)</p>
                <p>5) Free Delivery & Live Traking</p>
                <p>6) Safety meaasures followed at this restaurant(WHO Sanatized Protocol)</p>
                <p>7) Average Cost (10,000 per month)</p>
            </div>
            
        </div>
        <br><br>
            <div class="invoice">
                
                    <fieldset>
                        <legend>INVOICE</legend>
                      <div class="amount">

                          <p>
                              Charge per month:  10000
                            </p>
                            <p>18% gst  :900</p>
                            <p>Grand Total:10900 </p>
                            
                        </div>
                        <button class="pay-btn" type="submit" name="pay">MAKE A PAYMENT</button>
                    
                    </fieldset>
                
            </div>
            
            
        </div>
        </form>



</body>

</html>