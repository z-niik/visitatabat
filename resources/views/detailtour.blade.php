@extends('layouts.master')


@section('content')

<body class="bg-light">

    <div class="container-xxl">
      <header class="navbar navbar-expand-lg navbar-dark bd-navbar sticky-top">
            <div class="flex-grow-1" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel" data-bs-scroll="true">
              <h5 class="offcanvas-title text-white text-center" id="bdNavbarOffcanvasLabel">جزئیات تور</h5>
            </div>
        </header>
      <main>
        <div class="position-relative overflow-hidden bg-light">
              <div class="col-12 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#">
                  <img  src="{{ asset('assets/images/profile-circle.png') }}" class="img-fluid py-3" >
                </a>
              </div>
         </div>

    <div class="container">
           <div class="row tour-detail" >
            <h2 class="text-center">تور عتبات عالیات</h2>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5" style="margin:auto;">
              <div class="col d-flex align-items-start detail py-2 px-2">

                <div class="col-9">
                  <h4 class="fw-bold mb-2">حرکت :</h4>
                  <p>{{ $date }}</p>
                </div>
                <div class="col-3 icon-detail">
                <img src="{{ asset('assets/images/calendar-2.png') }}">
                </div>
              </div>
              <div class="col d-flex align-items-start  detail py-2 px-2">

                 <div class="col-9">
                  <h4 class="fw-bold mb-2"> پرداخت :</h4>
                  <p>{{ $tour->checkout_type }}</p>
                </div>
                <div class="col-3 icon-detail">
                <img src="{{ asset('assets/images/card.png') }}">
                </div>
              </div>
              <div class="col d-flex align-items-start  detail py-2 px-2">

                <div class="col-9">
                  <h4 class="fw-bold mb-2"> اقامت :</h4>
                  <p>{{ $tour->num_days }}</p>
                </div>
                <div class="col-3 icon-detail">
                <img src="{{ asset('assets/images/building-4.png') }}">
                </div>
              </div>
              <div class="col d-flex align-items-start  detail py-2 px-2">

                <div class="col-9">
                  <h4 class="fw-bold mb-2"> حمل و نقل :</h4>
                  <p>{{ $tour->transportaion }}</p>
                </div>
                <div class="col-3 icon-detail">
                    <img src="{{ asset('assets/images/'.$img ) }}">
                </div>
              </div>
            </div>

            <div class="py-3"  style="margin:auto;">
            <div class="col-12 more-detail">
              <h4>مدارک لازم</h4>
              <ul class="list">
                <li class="list-item">گذرنامه با حداقل 6 ماه اعتبار</li>
                <li class="list-item">کارت واکسن</li>
              </ul>
            </div>
            </div>
            <div  class="py-3" style="margin:auto;">
              <div class="col-12 more-detail">
                <h4> خدمات تور</h4>
                <ul class="list">
                  <li class="list-item">صبحانه، ناهار، شام</li>
                  <li class="list-item">بیمه مسافرتی از 48 ساعت قبل از سفر تا 48 ساعت بعد از سفر</li>
                </ul>
              </div>
            </div>
              <div  class="py-3"  style="margin:auto;">
                <div class="col-12 more-detail">
                  <h4> توضیحات</h4>
                  <ul class="list">
                    <li class="list-item">تا ۷ روز قبل از اعزام امکان کنسل کردن تور وجود دارد ولی بعد از آن شامل جریمه خواهد شد.</li>
                    <li class="list-item">تمام تورها زیر نظر سازمان حج و زیارت برگزار می‌گردد. </li>
                    <li class="list-item"> محل اقامت هتل‌های درجه 1 در نجف هتل ام القری، در کربلا هتل شرق الاوسط و در کاظمین هتل قرطاج می‌باشد.</li>
                  </ul>
                </div>
            </div>

            <div class="row  g-4 py-5" style="margin:auto;">
              <div class="col d-flex">

                <div class="col-8">
              <p>هزینه ی تور : </p>
              </div>
              <div class="col-4 text-center">
              <span class="text-left">{{ $tour->price }} تومان</span>
              </div>
            </div>

            <div class="d-grid gap-2">
              {{--  <a href="{{ url('/register/form/'.$tour->id)  }}" class="btn btn-primary" type="button">رزرو تور</a>  --}}
              <a href="{{ url('/register/user/'.$tour->id)  }}" class="btn btn-frm" type="button">رزرو تور</a>
            </div>

           </div>

     </div>





      </main>

    </div>

</section><!--End logina-area-->


@endsection
