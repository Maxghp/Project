<?php
function saveUser(){
    $link = mysqli_connect('localhost','root','','site') or die ("Error: " . mysqli_error($link));
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = trim($_POST['password']);

    $query ="INSERT INTO `users` (`first_name`, `last_name`, `email`, `phone`, `password`, `create_at`) VALUES('$first_name', '$last_name', '$email', '$phone', SHA('$password'), NOW() )";
    $data = mysqli_query($link,$query) or die ("Error: " . mysqli_error($link));
    if($data){
        session_start();
        $_SESSION['first_name']=$first_name;
        $_SESSION['last_name']=$last_name;
        $_SESSION['email']=$email;
        $_SESSION['phone']=$phone;
        $_SESSION['password']=$password;
        header('Location:index.php');
        echo"Congratulations your registration is completed!!";
    }

}
function getUserByEmailPassword(){
    $link = mysqli_connect('localhost','root','','site') or die ("Error: " . mysqli_error($link));
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $query = "SELECT * FROM users WHERE email = '$email' OR password = SHA('$password')" or die ("Error: " . mysqli_error($link));
    $data = mysqli_query($link,$query) or die ("Error: " . mysqli_error($link));
    if(mysqli_num_rows($data) == 0){
        saveUser();
    } else {echo "Sorry, this user alredy exist";}

}
if(isset($_POST['submit'])){
    getUserByEmailPassword();
}

?>