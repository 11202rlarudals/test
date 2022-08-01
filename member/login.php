<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>  
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js" ></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js" ></script>  
    <link rel="stylesheet" href="./style.css">   
</head>
<body>        
<div class="loginmodal-container">
    <h1>로그인</h1><br>
    <?php
    if(isset($_SESSION["name"])){
        echo $_SESSION["name"]"로그인되었습니다";
    }else{
    }
    ?>
    <form action="loginok.php" method="post">
        <input type="text" name="user" placeholder="아이디입력">
        <input type="password" name="pass" placeholder="패스워드입력">
        <input type="submit" name="login" class="login loginmodal-submit" value="로그인">
    </form>

    <div class="login-help">
        <a href="./register.html">회원가입</a>
    </div>
</div>
</body>
</html>