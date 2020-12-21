<?php require_once '../controller/autoController.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/btn.css">
    <title>Document</title>
 <style>
     
     .form-div{
    margin: 50px auto 50px;
    padding: 25px 15px 10px 15px;
    border: 1px solid #80ced7;
    border-radius : 5px;
    font-size:1.1em;
    width: 25%;
    font-family: var(--bs-font-sans-serif);
}

.form-control:focus{
    box-shadow: none;
}
form p{
    font-size: .89em;
}
.form-div.login{
    margin-top:100px;
}
 
 </style>

</head>

<body>
<form action="up.php" method="get">
    <div class="container-up">
        <div class="row">
            <div class=" form-div login">
                <div class="alert alert-success">
                You are logged in!
                </div>
                <h3> <strong>Welocme, Jai</strong> </h3>
                <h4>Thanks For Visiting!</h4> <br>
               <span>  <button type="submit" class="btn-primary" name="logout" >Logout</button>  </span>
               
            
               <span>  <button type="submit" class="btn-primary" name="home" >Home</button> </a> </span>
            </div>
        </div>
    </div>
    </form>
</body>

</html>