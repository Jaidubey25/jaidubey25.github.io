<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
 <style>
     .form-div{
         margin: 50px auto 50px;
         padding: 25px 15px 10px 15px;
         border: 1px solid #80ced7;
         border-radius : 5px;
         font-size:1.1em;
         width: 90%;
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

    <div class="container">
        <div class="row">
            <div class="col-md offset-md-4 form-div login">
                <div class="alert alert-success">
                you are logged in!
                </div>
                <h3>Welocme, JAI</h3>
                <h4>Thanks For Visiting!</h4>
                <a href="#" class="logout">logout</a>
            </div>
        </div>
    </div>
</body>

</html>