@extends('layouts.master')



@section('content')

<body class="bg-light">

    <div class="container-xxl register">

      <main>


    <div class="container rgs-form">
           <div class="row py-5" >
            <h6 class="text-center">لطفا برای شروع فرآیند رزرو تور و ایجاد حساب کاربری، اطلاعات زیر را تکمیل نمایید.</h6>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5" style="margin:auto;">
                <div class="col-md-7 col-lg-4" style="margin:auto;">
                <form method="post" action="{{ route('info.user') }}" class="form" novalidate>
                    @csrf
                    <input type="hidden" name="tour_id" value={{ $id }}>
                    <input class="form-control form-control-lg py-2" name="name" type="text" placeholder="نام و نام خانوادگی *" aria-label="">
                    <input class="form-control form-control-lg py-2" name="mobile" type="text" placeholder="شماره موبایل *" aria-label="">


                    <div class="col-12 d-flex num">
                      <div class="col-8">
                      <label> بزرگسال <span>(12 سال به بالا)</span></label>
                      </div><div class="col-4">
                      <span class="btn-num minus" id="minus">-</span>
                      <input type="text" name="adult" id="target" placeholder="1"><span style="color:#000 ;">نفر</span>
                      <span class="btn-num plus" id="plus">+</span>
                      </div>
                    </div>


                    <div class="col-12 d-flex num">
                      <div class="col-8">
                      <label> کودک <span>(زیر 12 سال)</span></label>
                      </div><div class="col-4">
                      <span class="btn-num minus" id="minuschild">-</span>
                      <input type="text" name="child" id="targetchild" placeholder="1"><span style="color:#000 ;">نفر</span>
                      <span class="btn-num plus" id="pluschild">+</span>
                      </div>
                    </div>
                    <div class="d-grid gap-2">
                      <input class="btn btn-primary" type="submit" value="ثبت و ادامه ">
                    </div>
                </form>
                </div>
            </div>
      </main>

    </div>


@endsection
