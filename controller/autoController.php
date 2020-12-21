<?php 

session_start();
// require '../config/db.php';
define('DB_HOST' , 'localhost');
define('DB_USER' , 'root');
define('DB_PASS' , '');
define('DB_NAME' , 'registration');
$conn = new mysqli(DB_HOST , DB_USER , DB_PASS , DB_NAME);

if($conn->connect_error) {
    die('Database error:' . $conn->connect_error);
}

$errors = array();
$fname= "";
$lname= "";
$mnum= "";
// $gender= "";
$username = "";
$email = "";

if(isset($_POST['register-btn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $mnum =$_POST['mnum'];
    // $gender =$_POST['gender'];
    if(empty($fname)){
        $errors['username'] = "Username is required";
    }
    if(empty($lname)){
        $errors['username'] = "Username is required";
    }
    if(empty($username)){
        $errors['username'] = "Username is required";
    }
    if(empty($mnum)){
        $errors['username'] = "Username is required";
    }
    // if(empty($gender)){
    //     $errors['username'] = "Username is required";
    // }
    if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Invalid Email";
    }
    if(empty($email)){
         $errors['email'] = "Email is required";
    }
    if(empty($password1)){
        $errors['password'] = "Password is required"; 
    }
    
    if($password1 != $password2){
        $errors['password'] = "Password Do Match"; 
    }
$emailQuery = "SELECT * FROM usr_det WHERE email=? LIMIT 1";
$stmt = $conn->prepare($emailQuery);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();
$userCount = $result->num_rows;

if($userCount > 0)
{
     $errors['email'] = "email is required";
}
if(count($errors) == 0){
    $password = password_hash($password1 ,PASSWORD_DEFAULT);
    // $token = bin2hex(random_bytes(20));
    $sql = "INSERT INTO usr_det ( fname , lname ,  username , mnum   , email , password ) VALUES (? , ?  , ? , ? , ? , ? ) ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssdss',$fname , $lname , $username , $mnum  , $email , $password);
    if($stmt->execute()){
        $user_id = $conn->insert_id;
        $_SESSION['id'] = $user_id;
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['username'] = $username;
        $_SESSION['mnum'] = $mnum;
        // $_SESSION['gender'] = $gender;
        // $_SESSION['type'] = $type;
        $_SESSION['email'] = $email;
        $_SESSION['message'] = "You are logged in!";
        $_SESSION['alert-class'] = "alert-success";
        header('location:../index.php');
        exit();
        
    } else{
        $errors['db_error']="DATABASE ERROR : FAILED TO REGISTER";
    }

}

}

//LOgin

if(isset($_POST['login-btn'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username)){
        $errors['username'] = "Username is required";
    }
    
    
    if(empty($password)){
        $errors['password'] = "Password is required"; 
    }
    if(count($errors) === 0){

        $sql = "SELECT * FROM usr_det WHERE  username= ? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s' , $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        
        if( password_verify($password , $user['password'])){
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['message'] = "You are logged in!";
            $_SESSION['alert-class'] = "alert-success";
            header('location: ../index.php');
            exit();
        }else{
            $errors['login_error']="Wrong Credentials";
            $errors['login']= $password;
            $errors['login1']= $user['password'];
        }
    }
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location:../index.php');
    exit();
}

if(isset($_GET['home'])){
    
    header('location:../index.php');
    exit();
}


if(isset($_GET['user'])){
    if(!isset($_SESSION['id'])){
        header('location: login/login.php');
        exit();
    }else{
        header('location: login/up.php');
        exit();
    }
}


if(isset($_GET['user1'])){
    if(!isset($_SESSION['id'])){
        header('location: ../login/login.php');
        exit();
    }else{
        header('location: ../login/up.php');
        exit();
    }
}