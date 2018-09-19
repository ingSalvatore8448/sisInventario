<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Transparent Login Form</title>
    <style>
        body
        {
            margin: 0;
            padding: 0;
            background-image: url('../Imagenes/Usuarios/bg.jpg');
            background-size: cover;
            font-family: sans-serif;
        }
        .loginBox
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 350px;
            height: 420px;
            padding: 80px 40px;
            box-sizing: border-box;
            background: rgba(0,0,0,.5);
        }
        .user
        {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            position: absolute;
            top: calc(-100px/2);
            left: calc(50% - 50px);
        }
        h2
        {
            margin: 0;
            padding: 0 0 20px;
            color: #efed40;
            text-align: center;
        }
        .loginBox p
        {
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: #fff;
        }
        .loginBox input
        {
            width: 100%;
            margin-bottom: 20px;
        }
        ::placeholder
        {
            color: rgba(255,255,255,.5);
        }
        .loginBox input[type="submit"]
        {
            border: none;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
            background: #ff267e;
            cursor: pointer;
            border-radius: 20px;
        }
        .loginBox input[type="submit"]:hover
        {
            background: #efed40;
            color: #262626;
        }
        .loginBox a
        {
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
        }

    </style>

    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
</head>
<body>
<div class="loginBox">
    <img src="{{asset('Imagenes/Usuarios/user.png')}}" class="user">
    <h2>Log In Here</h2>
    <!doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Transparent Login Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="loginBox">
        <img src="user.png" class="user">
        <h2>Log In Here</h2>
        <!doctype html>
        <html>
        <head>
            <meta charset="utf-8">
            <title>Transparent Login Form</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
        <div class="loginBox">
            <img src="user.png" class="user">
            <h2>Log In Here</h2>
            <form>
                <p>Email</p>
                <input type="text" name="" placeholder="Enter Email">
                <p>Password</p>
                <input type="password" name="" placeholder="••••••">
                <input type="submit" name="" value="Sign In">
                <a href="#">Forget Password</a>
            </form>
        </div>
        </body>
        </html>

    </div>
    </body>
    </html>

</div>
</body>
</html>
