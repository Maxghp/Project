<?php
if(isset($_POST['email'])&&(isset($_POST['password']))){
    $link = mysqli_connect('localhost','root','','site') or die ("Error: " . mysqli_error($link));
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $query = "SELECT * FROM users WHERE email = '$email' OR password = SHA('$password')" or die ("Error: " . mysqli_error($link));
    $data = mysqli_query($link,$query) or die ("Error: " . mysqli_error($link));
    if(mysqli_num_rows($data) == 1){
        session_start();
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
		header('Location:index.php');
    } else {echo "Sorry, you dont have account";}
}
?>