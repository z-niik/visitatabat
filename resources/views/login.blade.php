@extends('layouts.master')

@section('content')

<body class="bg-light">

    <div class="container-xxl register">

      <main>


    <div class="container rgs-form">
           <div class="row py-5" >
            <h6 class="text-center">لطفا برای ورود به حساب کاربری، اطلاعات زیر را تکمیل نمایید.</h6>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5" style="margin:auto;">
                <div class="col-md-7 col-lg-4" style="margin:auto;">
                <form method="post" action="action="#" class="form">
                    @csrf
                    <input class="form-control form-control-lg py-2" name="name" type="text" placeholder="نام و نام خانوادگی *" aria-label="">
                    <input class="form-control form-control-lg py-2" name="password" type="text" placeholder="شماره موبایل *" aria-label="">



                    <div class="d-grid gap-2">
                      <input class="btn btn-primary" type="submit" value="ثبت و ادامه ">
                    </div>
                </form>
                </div>
            </div>





      </main>

    </div>



 @endsection
