 {{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}







{{-- <script src="//code.tidio.co/cwyzhn9yovqes3ei913gkoymswdgbwjd.js" async></script> --}}
<!-- meta tags and other links -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calamosassets - Login</title>
    <meta name="title" Content="Calamosassets - Login">

    <meta name="description" content="Calamosassets was founded by industry leaders in the Digital Asset investment industry. Calamosassets  is the leading digital asset trading platform that allows clients to directly trade cryptocurrencies in real-time through their individual fully automated portfolio.">
    <meta name="keywords" content="investment">
    <link rel="shortcut icon" href="https://calamosassets.net/share/assets/images/logoIcon/favicon.png" type="image/x-icon">


    <link rel="apple-touch-icon" href="https://calamosassets.net/share/assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Calamosassets - Login">

    <meta itemprop="name" content="Calamosassets - Login">
    <meta itemprop="description" content="Calamosassets was founded by industry leaders in the Digital Asset investment industry. Calamosassets  is the leading digital asset trading platform that allows clients to directly trade cryptocurrencies in real-time through their individual fully automated portfolio.">
    <meta itemprop="image" content="https://calamosassets.net/share/assets/images/seo/640b938b0f5051678480267.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Calamosassets">
    <meta property="og:description" content="Calamosassets">
    <meta property="og:image" content="https://calamosassets.net/share/assets/images/seo/640b938b0f5051678480267.png"/>
    <meta property="og:image:type" content="png"/>
    <meta property="og:image:width" content="1180" />
    <meta property="og:image:height" content="600" />
    <meta property="og:url" content="https://calamosassets.net/share/user/login">

    <meta name="twitter:card" content="summary_large_image">
    <!-- font  -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,500&family=Maven+Pro:wght@400;500;600&display=swap" rel="stylesheet">


    <link href="https://calamosassets.net/share/assets/global/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://calamosassets.net/share/assets/global/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://calamosassets.net/share/assets/global/css/line-awesome.min.css" />

    <link rel="stylesheet" href="https://calamosassets.net/share/assets/templates/invester/css/lib/animate.css">

    <!-- Plugin Link -->
    <link rel="stylesheet" href="https://calamosassets.net/share/assets/templates/invester/css/lib/slick.css">
    <link rel="stylesheet" href="https://calamosassets.net/share/assets/templates/invester/css/lib/magnific-popup.css">
    <link rel="stylesheet" href="https://calamosassets.net/share/assets/templates/invester/css/lib/apexcharts.css">

    <!-- Main css -->
    <link rel="stylesheet" href="https://calamosassets.net/share/assets/templates/invester/css/main.css">


    <link rel="stylesheet" href="https://calamosassets.net/share/assets/templates/invester/css/custom.css">

    <link rel="stylesheet" href="https://calamosassets.net/share/assets/templates/invester/css/color.php?color=5e8cf1">

        <style>
        .pb-120 {
            padding-bottom: clamp(40px, 4vw, 40px);
        }

        .pt-120 {
            padding-top: clamp(40px, 4vw, 40px);
        }
        .container {
            max-width: 1140px;
        }
    </style>

</head>

<body>
    <!-- Account Section -->
<section class="account-section position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-8">
                <a href="/" class="text-center d-block mb-3 mb-sm-4 auth-page-logo"><img src="https://calamosassets.net/share/assets/images/logoIcon/logo_2.png" alt="logo"></a>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                        <h4 class="mb-2">Login to your account</h4>
                        <p>You can sign in to your account using email or username</p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label> Email</label>
                                <input type="text" name="email" class="form-control form--control h-45">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control form--control h-45">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex flex-wrap gap-2 justify-content-between">
                                <div class="form-group custom--checkbox">
                                    <input type="checkbox" id="remember" name="remember" class="form-check-input">
                                    <label for="remember">Keep me Logged in</label>
                                </div>
                                <a href="/reset" class="text--base fw-bold">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="col-12">
                                                    </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn--base w-100">Login Account</button>
                        </div>
                        <div class="col-12 mt-4">
                            <p class="text-center">Don't have any account? <a href="/register" class="fw-bold text--base">Create Account</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Account Section -->


    <script src="https://calamosassets.net/share/assets/global/js/jquery-3.6.0.min.js"></script>
    <script src="https://calamosassets.net/share/assets/global/js/bootstrap.bundle.min.js"></script>

    <!-- Pluglin Link -->
    <script src="https://calamosassets.net/share/assets/templates/invester/js/lib/slick.min.js"></script>
    <script src="https://calamosassets.net/share/assets/templates/invester/js/lib/magnific-popup.min.js"></script>
    <script src="https://calamosassets.net/share/assets/templates/invester/js/lib/apexcharts.min.js"></script>


    <!-- Main js -->
    <script src="https://calamosassets.net/share/assets/templates/invester/js/main.js"></script>



    <link rel="stylesheet" href="https://calamosassets.net/share/assets/global/css/iziToast.min.css">
<script src="https://calamosassets.net/share/assets/global/js/iziToast.min.js"></script>

<script>
    "use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>

    <script>
        $(".langSel").on("change", function() {
            window.location.href = "https://calamosassets.net/share/change/" + $(this).val();
        });

        let headings = $('.table th');
        let rows = $('.table tbody tr');
        let columns
        let dataLabel;
        $.each(rows, function(index, element) {
            columns = element.children;
            if (columns.length == headings.length) {
                $.each(columns, function(i, td) {
                    dataLabel = headings[i].innerText;
                    $(td).attr('data-label', dataLabel)
                });
            }
        });

        $.each($('input, select, textarea'), function(i, element) {
            var elementType = $(element);
            if(elementType.attr('type') != 'checkbox'){
                if (element.hasAttribute('required')) {
                    $(element).closest('.form-group').find('label').addClass('required');
                }
            }
        });

        var inputElements = $('[type=text],[type=password],[type=email],[type=number],select,textarea');
        $.each(inputElements, function (index, element) {
            element = $(element);
            element.closest('.form-group').find('label').attr('for',element.attr('name'));
            element.attr('id',element.attr('name'))
        });

        $('.policy').on('click',function(){
            $.get('https://calamosassets.net/share/cookie/accept', function(response){
                $('.cookies-card').addClass('d-none');
            });
        });


        setTimeout(function() {
            $('.cookies-card').removeClass('hide')
        }, 2000);
    </script>
</body>

</html>
