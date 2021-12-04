<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel='shortcut icon' href='logo.ico' />
    <title>@yield('title')</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" type="text/css" href="styles/layout.css">
    <link rel="stylesheet" href="styles/hompage.css">
</head>

<body>
    <div class="container-fluid">
        <h1 class="banner">NỀN TẢNG THI TRẮC NGHIỆM ONLINE CHẤT LƯỢNG SỐ 1</h1>
        <nav style="margin-bottom: 10px; font-size:medium; justify-content: center;" class="navbar navbar-expand-sm bg-light navbar-light">
            <!-- Brand/logo   -->
            <a class="navbar-brand" href="{{route('HomePage')}}">
                <img src="https://s.tracnghiem.net/assets/images/header/trac-nghiem-online.png" alt="logo" style="width:120px;">
            </a>


            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('HomePage')}}">TRANG CHỦ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LIÊN HỆ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">TÀI LIỆU</a>
                </li>
            </ul>
        </nav>
        @yield('content')
        <!-- <p class="footer">Copyright @WTN @PHP ; @endphp</p> -->
        <footer>
            <p class="footer">Copyright @WTN @PHP ; @endphp</p>
        </footer>
    </div>
</body>

</html>
<!-- https://s.tracnghiem.net/assets/images/footer/trac-nghiem-online.png -->