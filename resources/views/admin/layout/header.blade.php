<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--begin::Theme Color-->
    <meta name="theme-color" content="#27293d">
    <!--end::Theme Color-->

    <!--begin::Favicons-->

    <link rel="apple-touch-icon" href="{{ asset('/adminassets/assets/images/favicons/fav_a.jpg') }}" sizes="180x180">
    <link rel="icon" href="{{ asset('/adminassets/assets/images/favicons/fav_a.jpg') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('/adminassets/assets/images/favicons/fav_a.jpg') }}" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="{{ asset('/adminassets/assets/images/favicons/fav_a.jpg') }}" color="#7952b3">
    <link rel="icon" href="{{ asset('/adminassets/assets/images/favicons/fav_a.jpg') }}">

    <!--end::Favicons-->

    <!--begin::Style-->

    <link rel="stylesheet" href="{{ asset('/adminassets/assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminassets/assets/vendor/c3/c3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminassets/assets/vendor/select-ui/select-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminassets/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminassets/assets/vendor/sweetalert/sweetalert2.min.css') }}">

    <!--begin::Custom Style-->
    <link rel="stylesheet" href="{{ asset('/adminassets/assets/css/custom.css') }}">
    <!--end::Custom Style-->

    <!--end::Style-->

    <!--begin:: Font && Icons-->
    <link rel="stylesheet" href="{{ asset('/adminassets/assets/fonts/remixicon/remixicon.css') }}">
    <!--end:: Font && Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
     integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>پنل مدیریت</title>

</head>

<body>
@if(Illuminate\Support\Facades\Auth::guard('admin'))
    <!--begin::Header-->
    <div class="header-ui d-flex item-center w-100">
        <div class="header__right d-flex flex-grow-1 align-items-center">
            <span class="bars"></span>
        </div>
        <div class="header__left d-flex flex-end align-items-center">

            <!--begin::Setting-->
            <div class="setting-ui position-relative me-3" id="js-setting-ui">
                <a class="setting__icon"></a>
            </div>
            <!--end::Setting-->


            <!--begin::Profile-->
            <div class="profile-content-ui position-relative mr-3">
                <div class="profile-content__thumb  dropdown-toggle" data-bs-auto-close="outside"
                     id="profile-content-ui"
                     data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,15">
                    {{--  <img class="img-fluid" src="{{ asset('/assets/images/logo2400 1.png') }}" alt="">  --}}
                </div>
                <div class="dropdown-menu dropdown-menu-start feeds_widget" aria-labelledby="profile-content-ui">



                        <form action="{{ route('admin.logout') }}" method="POST" class="d-flex">
                            @csrf

                            <li class="nav-item"><button type="submit" class="nav-link" style="border:none;">خروج</button></li>
                            </form>

                        {{--  <a href=""
                           class="col text-center py-10 btn btn-text-dark btn-icon-gray-400 btn-active-color-primary rounded-0">

                            <i class="ri-logout-box-r-line ri-2x"></i>

                            <span class="fw-bolder fs-6 d-block pt-3">خروج</span>
                        </a>  --}}
                        <!--end::Col-->

                    </div>
                </div>
            </div>
            <!--end::Profile-->

        </div>
    </div>
    <!--end::Header-->
    @endif


