<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fintech</title>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        nav a.nav-link {
          color: rgba(255, 255, 255, 0.89) !important;
            font-weight: bold;
        }
        nav a.nav-link:hover {
          color: darkgray!important;
        }
        nav li.nav-item:hover {
            background: rgba(0, 0, 0, 0.66) !important;;
        }
        nav.navbar {
            background: rgba(0,0,0,0.81)!important;
        }
        .pagination {
            justify-content: end;
            margin-right: 50px;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow position-fixed" style="z-index: 1;width: 100%">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                    Fintech
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('page')}}">Tin Tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('summary')}}">Tổng Quan Thị Trường</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('binance')}}">Tiền Ảo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('currency')}}">Tiền Tệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('expert')}}">Chuyên Gia Phân Tích</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @if(Auth::user() && Auth::user()->role == 1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.home') }}">Trang Admin</a>
                        </li>
                        @endif
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ Auth::user()->role == 1 ? route('admin.profile') : route('profile') }}">
                                        Trang cá nhân
                                    </a>
                                    @if(Auth::user() && Auth::user()->role == 2)
                                        <a class="dropdown-item" href="{{route('posts.index')}}">Đăng bài</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ Auth::user()->role == 1 ? route('admin.changePass') : route('changePass') }}">
                                        Đổi Mật Khẩu
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="background: #006837">
           <div class="pt-5">
               @yield('content')
           </div>
        </main>
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-light text-muted"
                style="background: black!important;color: rgba(255,255,255,0.8)!important;">
            <!-- Section: Social media -->
            <section
                class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
            >
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Kết nối với chúng tôi trên các mạng xã hội:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section>
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Công ty cổ phần fintech
                            </h6>
                            <p>
                                luôn luôn lắng nghe luôn luôn thấu hiểu
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Contact
                            </h6>
                            <p><i class="fas fa-home me-3"></i>89 ngõ 12 Tương Mai Hoàng Mai Hà Nội</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                nguyencongviet@example.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2021 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">fintech.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
</body>
</html>
