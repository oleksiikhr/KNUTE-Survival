<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Authorization</title>

    <link rel="stylesheet" href="/public/css/auth/style.css?1326">
    <link rel="stylesheet" href="/public/libs/css/font-awesome.min.css">

    <link href="/public/fonts/Lato.ttf">
    <link href="/public/fonts/Roboto.ttf">

    <script type="text/javascript" src="/public/libs/js/jquery.js"></script>
    <script type="text/javascript" src="/public/js/auth/script.js?1636"></script>
</head>
<body>

<div class="wrap">
    <div class="inner">
        <div class="container">
            <img src="/public/img/logo.png" alt="Logo KNUTE">

            <form id="auth_form">
                <h2>Authorization</h2>
                <input type="text" name="login" placeholder="Login">
                <input type="password" name="pass" placeholder="Password">
                <input type="submit" value="Sign In">
                <span class="error hidden"></span>
            </form>

            <form id="registration_form">
                <h2>Registration</h2>
                <input type="text" name="login" placeholder="Login">
                <input type="password" name="pass" placeholder="Password">
                <input type="submit" value="Sign Up">
                <span class="error hidden"></span>
            </form>
        </div>
    </div>
</div>

<div id="particles-js"></div>
<script type="text/javascript" src="/public/libs/js/particles.min.js"></script>
<script type="text/javascript" src="/public/js/auth/particles.js"></script>

</body>
</html>
