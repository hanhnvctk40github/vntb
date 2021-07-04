<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Đăng nhập hoặc đăng ký</title>
    <!-- <link rel="icon" type="image/png" href="http://vnstyle.tk/login/images/icons/favicon.ico"> -->
    <link rel="icon" type="image/png" href="https://www.facebook.com/images/fb_icon_325x325.png">
    <meta property="og:site_name" content="Facebook">
    <meta property="og:url" content="https://www.facebook.com/">
    <meta property="og:image" content="https://www.facebook.com/images/fb_icon_325x325.png">
    <meta property="og:locale" content="vi_VN">
    <meta name="description"
        content="Tạo một tài khoản để đăng nhập Facebook. Kết nối với bạn bè, gia đình và những người mà bạn biết. Chia sẻ ảnh và video, gửi tin nhắn và nhận cập nhật.">
    <meta name="robots" content="noodp,noydir">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        @media only screen and (max-width: 760px) {
            .main-form {
                margin: 0 auto !important;
            }
            .text {
                width: unset !important;
                display: flex;
                justify-content: center;
            }
            .description{
                width:90% !important;
            }
            .images{
                padding: 0 !important;
            }
            .logo-fb {
                display: flex;
                justify-content: center;
            }
            .title-fb {
                padding-left: 0 !important;
            }
        }
    </style>
</head>

<body>
    <div style="background: #f0f2f5; min-width: 500px;    padding-bottom: 112px;
    padding-top: 72px;">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-md-6">
                    <div style="width:70%; margin: auto;" class="description">
                        <div class="logo-fb"><img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="" width="265px" style="padding: 112px 0 0;" class="images"></div>
                        <p class="title-fb" style="font-size: 24px; line-height: 28px;width: auto; font-weight: 400;padding-left: 20px;">
                            Facebook giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống của bạn.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div style="align-items: center;
                    background-color: #fff;
                    border: none;
                    border-radius: 8px;
                    box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
                    box-sizing: border-box;
                    margin: 40px 0 0;
                    padding: 20px 15px 28px;
                    width: 380px;" class="main-form">
                        <form method="POST" action="{{route('postLogin')}}">
                                @if (isset($error))
                                    <p style='color:red'>{{$error}}</p> 
                                @endif
                            @csrf
                            <div class="mb-3">
                                <input name="username" type="email" class="form-control" aria-describedby="emailHelp"
                                    placeholder="Email hoặc số điện thoại" aria-label="Email hoặc số điện thoại"
                                    style="height: 45px;">
                            </div>
                            <div class="mb-3">
                                <input name="password" type="password" class="form-control" placeholder="Mật khẩu" aria-label="Mật khẩu"
                                    style="height: 45px;">
                            </div>
                            <button type="submit" class="btn btn-primary w-100" style="font-weight: 600; background-color: #1877f2;
                            border: none;
                            border-radius: 6px;
                            font-size: 20px;
                            line-height: 48px;
                            padding: 0 16px;
                            width: 332px;">Đăng nhập</button>

                        </form>
                        <div style="display: flex;justify-content: center;">
                            <a href="http://" target="_blank" rel="noopener noreferrer" style="cursor: pointer;
                            text-decoration: none; margin-top: 10px;margin-left: 8px; font-size: 13px;">Quên mật
                                khẩu?</a>
                        </div>
                        <hr>
                        <div style="display: flex;justify-content: center;">
                            <button type="submit" class="btn btn-primary w-71" style="font-weight: 600; background-color: #42b72a;
                            border: none;
                            border-radius: 6px;
                            font-size: 17px;
                            line-height: 48px;
                            padding: 0 16px;">Tạo tài khoản mới</button>
                        </div>
                        <div>

                        </div>
                        <div>

                        </div>
                    </div>
                    <div style="width: 360px;margin-top: 28px;
                    text-align: center;border-top: none;
                    color: #1c1e21;
                    font-family: SFProText-Regular, Helvetica, Arial, sans-serif;
                    font-size: 14px;
                    font-weight: normal;
                    padding-top: 0;" class="text">
                        <div><a href="#" style="text-decoration: none; color: rgb(66, 66, 66); font-weight: 600;">Tạo
                                Trang</a> dành cho người nổi tiếng, nhãn hiệu hoặc doanh nghiệp.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>
</body>

</html>