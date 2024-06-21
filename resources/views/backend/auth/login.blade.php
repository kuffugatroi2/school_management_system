<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ asset('') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>VT LUXURY - Login</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="img-logo/VT_luxury.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="backend/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["backend/assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="backend/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="backend/assets/css/plugins.min.css" />
    <link rel="stylesheet" href="backend/assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="backend/assets/css/demo.css" />
</head>

<body>
    <div class="wrapper">
        <div class="main-panel">
            <div class="container">
                <div class="page-inner">
                    <div class="row">
                        <div class="col-md-9" style="margin: 70px 0 0 10px;">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Đăng nhập hệ thống</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <div class="input-group mb-3 d-flex justify-content-center">
                                                    <img src="img-logo/VT_luxury.png" alt="img-logo">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <form action="{{ route('auth.login') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <span>
                                                        <label for="password">Email</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text fw-bold"
                                                                id="basic-addon1">@</span>
                                                            <input type="email" class="form-control" name="email"
                                                                placeholder="Username" aria-label="Username"
                                                                aria-describedby="basic-addon1" required
                                                                value="{{ old('email') }}" />
                                                        </div>
                                                        @error('email')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </span>
                                                    <span>
                                                        <label for="password">Password</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1"><i
                                                                    class="fa fa-lock"></i></span>
                                                            <input type="password" class="form-control" name="password"
                                                                placeholder="password" aria-label="Username"
                                                                aria-describedby="basic-addon1" required />
                                                        </div>
                                                        @error('password')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <button type="submit" style="background-color: #f4ca66"
                                                            class="btn text-dark w-100">Đăng nhập</button>
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                    <span class="d-flex justify-content-center">
                                                        <p>Foot, brain & difference</p>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="backend/assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="backend/assets/js/core/popper.min.js"></script>
    <script src="backend/assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="backend/assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="backend/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="backend/assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="backend/assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="backend/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="backend/assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="backend/assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="backend/assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Sweet Alert -->
    <script src="backend/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="backend/assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="backend/assets/js/setting-demo2.js"></script>
</body>

</html>
