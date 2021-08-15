<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập / Đăng ký</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Transparent login form using html and css" />
    <meta name="keywords" content="Transparent login form, login form, HTML, CSS, Background Blur, login form using html and css, Avatar Icon, Login with Facebook and Google" />
    <meta name="author" content="HTMLCSS3TUTORIALS" />
    <link rel="shortcut icon" href="{{asset('assets/favicon.ico')}}" type="image/x-icon">
    <style>

        body {
            margin: 0;
            padding: 0;
            font-family: 'PT Sans Narrow', sans-serif;
        }

        body:before {
            content: '';
            position: fixed;
            width: 100vw;
            height: 100vh;
            background-image: url("{{asset('assets/images/bg-login.jpg')}}");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: 'PT Sans Narrow', sans-serif;
        }

        .blur {
            background: rgb(0 0 0 / 20%);
            backdrop-filter: blur(6px);
            height: 100vh;
            width: 100%;
        }

        .formContent {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            height: 550px;
            padding: 40px 40px;
            box-sizing: border-box;
            background: rgb(255 255 255 / 11%);
            box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
            border-radius: 10px;
        }

        .avatarImg {
            position: absolute;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            top: calc(-80px/2);
            left: calc(50% - 40px);
        }

        .formContent h2 {
            margin: 0;
            padding: 0 0 20px;
            color: #fff;
            text-align: center;
            text-transform: uppercase;
            font-family: 'PT Sans Narrow', sans-serif;
        }

        .formContent label {
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: #fff;
        }

        .formContent input {
            width: 100%;
            margin-bottom: 20px;
        }

        .formContent input[type="text"],
        .formContent input[type="password"],
        .formContent input[type="email"] {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }

        .formContent input[type="submit"] {
            color: #000;
            font-size: 16px;
            background: #e8e8e8;
            cursor: pointer;
            border-radius: 5px;
            border: 1px solid #000;
            outline: none;
            margin-top: 5px;
            padding: 10px 10px 10px 10px;
        }

        .formContent input[type="submit"]:hover {
            color: #fff;
            background: #104e99;
        }

        .formContent a {
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
        }

        input[type="checkbox"] {
            width: 6%;
        }

        .remember span {
            color: #fff;
            font-family: 'PT Sans Narrow', sans-serif;
        }

        .remember span a {
            color: #fff;
            font-family: 'PT Sans Narrow', sans-serif;
        }

        .login {
            color: #fff;
            text-align: center;
            margin: 20px 0;
            font-family: 'PT Sans Narrow', sans-serif;
        }

        .Oroption:before {
            content: "";
            display: block;
            width: 115px;
            height: 1px;
            background: #e8e8e8;
            left: 0;
            position: absolute;
            left: 15%;
            margin-top: 10px;
        }

        .Oroption:after {
            content: "";
            display: block;
            width: 115px;
            height: 1px;
            background: #e8e8e8;
            right: 58px;
            /* top: 50%; */
            position: absolute;
            margin-top: -10px;
        }

        .links {
            cursor: pointer;
            color: white;
            margin: 0 0 20px 0;
        }
        .facebook {
            margin-top: 15px;
        }
        .facebook img,
        .google img {
            width: 100%;
        }

        .links i {
            font-size: 17px;
        }

        i span {
            margin-left: 8px;
            font-weight: 500;
            letter-spacing: 1px;
            font-size: 16px;
            font-family: 'PT Sans Narrow', sans-serif;
        }

        .signup {
            font-size: 15px;
            color: white;
            font-family: 'PT Sans Narrow', sans-serif;
            text-align: center;
        }

        .signup a {
            color: #387aff;
            text-decoration: none;
        }
    </style>
    <script>
        function formSubmit(event) {
            event.preventDefault()
        }
    </script>
</head>

<body>
    <div class="blur"></div>
    <div class="formContent blur" onsubmit="return formSubmit(event)">
        <h2>Đăng Ký Thành Viên</h2>
        <form>
            <label>Tài khoản</label>
            <input type="text" name="email" placeholder="Enter Email">
            <label>Mật khẩu</label>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Đăng nhập">
            <div class="remember">
                <div class="login">
                    <div class="Oroption">Hoặc</div>
                </div>
                <div>Đăng nhập với Facebook</div>
                <div class="links">
                    <div class="facebook">
                        <a href="{{route('getLogin')}}">
                        <img src="{{asset('assets/images/login-fb-icon.png')}}" alt="Facebook Icon" /> 
                        </a></div>
                </div>
                <div class="signup"> Không có tài khoản? <a href="#">Đăng Ký</a> </div>
            </div>
        </form>
    </div>
</body>

</html>