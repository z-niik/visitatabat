@extends('layouts.master')

@section('content')

<body class="bg-light">

    <div class="container-xxl">
      <header class="navbar navbar-expand-lg navbar-dark bd-navbar sticky-top">
            <div class="flex-grow-1" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel" data-bs-scroll="true">
              <h5 class="offcanvas-title text-white text-center" id="bdNavbarOffcanvasLabel"> زیارت عتبات عالیات</h5>
            </div>
        </header>
      <main>



        <div class="position-relative overflow-hidden  p-md-5 text-center bg-light head-bg bg-opacity-50">

            <div class="row flex-nowrap justify-content-between align-items-center">
              <div class="col-6 d-flex justify-content-start align-items-center">
                <img  src="{{ asset('assets/images/badsaba.png') }}" class="img-fluid px-3" >
                <img  src="{{ asset('assets/images/logo2400 2.png')}}" class="img-fluid" >
              </div>

              <div class="col-6 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                  <img  src="{{ asset('assets/images/Group 1272.png') }}" class="img-fluid" >
                  </a>
              </div>
               </div>


               <div class="container-fluid second-bg">
            </div>
            </div>


    <div class="container">
        <div class="align-items-stretch g-4 py-5 ">
          <div class="filter-btn">
           <a class="btn" href="{{ route('nearest/time') }}">نزدیکترین زمان</a>
           <a class="btn" href="{{ route('cheapest') }}">مناسب ترین قیمت</a>
        </div>
        <h2 class="text-center">تورهای هوایی</h2>
        <div class="tour row d-flex " >
            @if($aerials->isempty())
            <h4 class="text-center py-2" style="color:crimson">در حال حاضر تورهای هوایی در دسترس نیستند.</h4>
            @else
        @foreach($aerials as $aerial)

        @php
       $date=str_replace('-', '/', $aerial->start_day);
        @endphp
          <div class="card mb-3 align-content-center tour-card" style="max-width: 500px;">
            <div class="card-body">
            <div class="row g-0">
              <div class="col-3">
                <img src="{{ asset($aerial->photo) }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-4">
                  <p class="card-text">حرکت :<span>{{ $date }}</span></p>
                  <p class="card-text">اقامت :<span>{{ $aerial->num_days }}</span></p>
                  <p class="card-text">پرداخت :<span>{{ $aerial->checkout_type }}</span></p>
              </div>
              <div class="col-5">
                  <p class="card-text"><span>{{ $aerial->price }}</span>تومان</p>
                  {{--  @if(auth()->user())  --}}
                  <p class="card-text"><a class="btn" href="{{  url('/detail/tour/'.$aerial->id) }}">مشاهده و رزرو تور</a></p>
                  {{--  @else
                     <p class="card-text"><a class="btn" href="{{ route('register.user') }}">مشاهده و رزرو تور</a></p>
                  @endif  --}}
            </div>
          </div>
        </div>
     </div>
          @endforeach
          @endif
        </div>

        <h2 class="text-center">تورهای زمینی</h2>
        <div class="tour row d-flex " >
            @if($earthlys->isempty())
            <h4 class="text-center py-2" style="color:crimson">در حال حاضر تورهای زمینی در دسترس نیستند.</h4>
            @else
        @foreach($earthlys as $earthly)
        @php
        $date=str_replace('-', '/', $earthly->start_day);
         @endphp
          <div class="card mb-3 align-content-center tour-card" style="max-width: 500px;">
            <div class="card-body">
            <div class="row g-0">
              <div class="col-3">
                <img src="{{ asset($aerial->photo) }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-4">
                  <p class="card-text">حرکت :<span>{{ $date }}</span></p>
                  <p class="card-text">اقامت :<span>{{ $earthly->num_days }}</span></p>
                  <p class="card-text">پرداخت :<span>{{ $earthly->checkout_type }}</span></p>
              </div>
              <div class="col-5">
                  <p class="card-text"><span>{{ $earthly->price }}</span>تومان</p>
                  <p class="card-text"><button class="btn">مشاهده و رزرو تور</button></p>
            </div>
          </div>
        </div>
     </div>
          @endforeach
        @endif
        </div>
         <h2 class="text-center">تورهای ترکیبی</h2>
        <div class="tour row d-flex " >

    @if($combinatorys->isempty())
    <h4 class="text-center py-2" style="color:crimson">در حال حاضر تورهای ترکیبی در دسترس نیستند.</h4>
    @else
        @foreach($combinatorys as $combinatory)
        @php
        $date=str_replace('-', '/', $combinatory->start_day);
         @endphp
          <div class="card mb-3 align-content-center tour-card" style="max-width: 500px;">
            <div class="card-body">
            <div class="row g-0">
              <div class="col-3">
                <img src="{{ asset($aerial->photo) }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-4">
                  <p class="card-text">حرکت :<span>{{$date }}</span></p>
                  <p class="card-text">اقامت :<span>{{ $combinatory->num_days }}</span></p>
                  <p class="card-text">پرداخت :<span>{{ $combinatory->checkout_type }}</span></p>
              </div>
              <div class="col-5">
                  <p class="card-text"><span>{{ $combinatory->price }}</span>تومان</p>
                  <p class="card-text"><button class="btn">مشاهده و رزرو تور</button></p>
            </div>
          </div>
        </div>
     </div>
          @endforeach
          @endif
        </div>
      </div>

      <div class="col-12 blog">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active bg-secondary"></li>
                <li data-target="#carousel" data-slide-to="1" class="bg-secondary"></li>
                <li data-target="#carousel" data-slide-to="2" class="bg-secondary"></li>
              </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                    <div class="col-12 col-md-6 col-xl-3 mb-4">
                        <div class="card mr-3">
                            <img src="{{ asset('assets/images/samera.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">اماکن زیارتی سامرا را بشناسید</h5>
                              <p class="card-text">سامرا، یکی از شهرهای مهم و زیارتی شیعیان در عراق است. یکی از دلایل شهرت این شهر در میان مسلمانان شیعه وجود مرقد دو پیشوای شیعه، امام دهم هادی (ع) و امام یازدهم، حسن عسکری (ع) است.
                                یکی از شهرهای مهم و زیارتی شیعیان در عراق است. یکی از دلایل شهرت این شهر در میان مسلمانان شیعه وجود مرقد دو پیشوای شیعه، امام دهم هادی (ع) و امام یازدهم، حسن عسکری (ع) است.
                               </p>
                              <a href="#" class="btn btn-primary"> ادامه مطلب</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 mb-4">
                        <div class="card mr-3">
                            <img src="{{ asset('assets/images/kazemain.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">اماکن زیارتی کاظمین را بشناسید</h5>
                              <p class="card-text">کاظمین، محله‌ای در بغداد و یکی از اماکن مقدس شیعیان است. از مهم‌ترین اماکن زیارتی کاظمین می‌توان به حرم کاظمین اشاره کرد. در ادامه شما را با زیارتگاه‌های کاظمین آشنا می‌کنیم.  دیدنی‌های کاظمین را اماکن زیارتی و مذهبی تشکیل می‌دهد که از مهم‌ترین آن‌ها می‌توان به حرم کاظمین، مسجد براثا و مسجد المنطقه اشاره کرد. آرامگاه بعضی از دانشمندان و عالمان دینی شیعه مانند آرامگاه شیخ کلینی، شیخ مفید و خواجه نصیرالدین طوسی هم در این شهر واقع شده است. </p>
                              <a href="#" class="btn btn-primary"> ادامه مطلب</a>
                            </div>
                        </div>
                    </div> <div class="col-12 col-md-6 col-xl-3 mb-4">
                        <div class="card mr-3">
                            <img src="{{ asset('assets/images/najaf.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">اماکن زیارتی نجف را بشناسید</h5>
                              <p class="card-text">نجف، یکی از مهم‌ترین قطب‌های گردشگری مذهبی در جهان به‌ویژه برای شیعیان و دارای اماکن زیارتی بسیاری است. حرم مطهر علی بن ابی طالب علیه‌السلام، نخستین امام شیعیان در این شهر قرار دارد.این شهر همواره محل تردد و اقامت زائران و مشتاقان و علاقه‌مندان به علوم دینی است. نجف به غیر از حرم مطهر، اماکن مقدس دیگری همچون قبر حضرت آدم و نوح، قبر حضرت هود و قبر حضرت صالح است. مسجد حنانه، مسجد سهله، مسجد هندی، مسجد شیخ طوسی، مقام صاحب الزمان (عج)، مقام امام صادق (ع)، مقام امام سجاد (ع)، قبرستان وادی السلام و آرامگاه کمیل از دیگر دیدنی های نجف و عراق هستند. </p>
                              <a href="#" class="btn btn-primary"> ادامه مطلب</a>
                            </div>
                        </div>
                    </div> <div class="col-12 col-md-6 col-xl-3 mb-4">
                        <div class="card mr-3">
                            <img src="{{ asset('assets/images/karbala.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">با اماکن زیارتی کربلا آشنا شوید</h5>
                              <p class="card-text">کربلا، شهری زیارتی در عراق که شیعیان به عشق امام حسین (ع) آرزوی سفر به آن را دارند، از مکان‌های زیارتی زیادی برخوردار است که شاید با برخی از آن‌ها آشنا نباشید.عراق کشوری باستانی محسوب می‌شود که اماکن مذهبی زیادی را در دل خود جای داده است. مسلمانان و به‌خصوص شیعیان، به‌منظور زیارت مقبره‌های ائمه‌ اطهار عازم این کشور، مخصوصا کربلا می‌شوند. این شهر در ناحیه‌ غربی رود فرات قرار دارد و فاصله‌ی آن تا بغداد ۱۰۵ کیلومتر است. این شهر مدفن امام سوم شیعیان، امام حسین (ع) و حضرت ابوالفضل العباس (ع) است و هر ساله، به‌خصوص در ایام محرم، میزبان خیل عظیمی از زائرانی است که به قصد زیارت عازم کربلا و اماکن مقدس می‌شوند.</p>
                              <a href="#" class="btn btn-primary"> ادامه مطلب</a>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

            </div>
          </div>
      </div>

        </div>
      </main>

@endsection
