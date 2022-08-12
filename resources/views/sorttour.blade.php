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

        <h2 class="text-center"> {{ $sortby }}</h2>
        <div class="tour row d-flex " >

        @foreach($listtours as $listtour)

        @php
       $date=str_replace('-', '/', $listtour->start_day);
        @endphp
          <div class="card mb-3 align-content-center tour-card" style="max-width: 500px;">
            <div class="card-body">
            <div class="row g-0">
              <div class="col-3">
                <img src="{{ asset($listtour->photo) }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-4">
                  <p class="card-text">حرکت :<span>{{ $date }}</span></p>
                  <p class="card-text">اقامت :<span>{{ $listtour->num_days }}</span></p>
                  <p class="card-text">پرداخت :<span>{{ $listtour->checkout_type }}</span></p>
              </div>
              <div class="col-5">
                  <p class="card-text"><span>{{ $listtour->price }}</span>تومان</p>
                  {{--  @if(auth()->user())  --}}
                  <p class="card-text"><a class="btn" href="{{  url('/detail/tour/'.$listtour->id) }}">مشاهده و رزرو تور</a></p>
                  {{--  @else
                     <p class="card-text"><a class="btn" href="{{ route('register.user') }}">مشاهده و رزرو تور</a></p>
                  @endif  --}}
            </div>
          </div>
        </div>
     </div>
          @endforeach
        </div>

        </div>
      </div>


        </div>
      </main>

@endsection
