@extends('layouts.master')

@section('content')
<section class="logina-area">
    <div class="container">


        <h2>  ثبت نام کاروان زیارتی عتبات عالیات     </h2>

        <div class="row justify-content-center">

            <div class="col-lg-12">
                <div class="form-area contact-form">
                    <div class="form-content rules">

                        <form method="get" action="{{ route('register.form') }}">
                            @csrf
                        <div class="col-lg-12">


                <div class="c-tours">
                    <div  class="tours" style="">
                        <div class="tours__menu @*tours__menu-special*@">
                            <div class="tours__menu-destination">
                                <span><i class="bi bi-geo-alt-fill"></i> نوع سفر </span>
                            </div>
                            <div class="tours__menu-length">
                                <span> <i class="bi bi-alarm"></i> مدت </span>
                            </div>
                            <div class="tours__menu-runtime">
                                <span> <i class="bi bi-calendar"></i>تاریخ اعزام</span>
                            </div>
                            <div class="tours__menu-travel-type">
                                <span>  <i class="bi bi-briefcase"></i>روش سفر </span>
                            </div>

                            <div class="tours__menu-price">
                                <span> <i class="bi bi-currency-dollar"></i> قیمت </span>
                            </div>
                        </div>
                        @foreach ($tours as $tour )
                        @php
                        $price=number_format((int)$tour->price);
                        @endphp

                        <div class="tours__table" data-bind="foreach: result.tours">
                            <span class="tours__table-row">
                            <div class="tours__table-destination">
                                <span class="customTitle" >{{ $tour->type_going }}</span>
                                <span class="customTitle" >{{ $tour->type_return }}</span>
                            </div>

                            <div class="tours__table-length">
                                 <span>{{ $tour->num_days }}</span>
                            </div>

                            <div class="tours__table-runtime">
                                <span >{{ $tour->name_start_day }}.{{ $tour->start_day }} </span>
                            </div>

                            <div class="tours__table-travel-type">
                                <span class="hide-in-not-desktop">{{ $tour->type_plan }}</span>
                            </div>


                            <div class="tours__table-price">

                                <div>
                                    <span class="hide-in-desktop"> قیمت </span>
                                    <span><label >{{ $price }}</label>
                                    <span>ریال</span>
                                        </span>
                                 </div>

                                <div class="tours__table-btn hide-in-desktop detail">
                                    <span><a type="button" href="{{ url('/detail/tour'.$tour->id) }}"> جزئیات </a></span>
                                </div>

                                <div class="tours__table-btn hide-in-desktop submitbtn">
                                    <span><a type="button" href="{{ url('/register/form/'.$tour->id) }}"> انتخاب</a></span>
                                </div>
                             </div>



                            <div class="tours__table-btn hide-in-not-desktop detail">
                                <span><a type="button" href="{{ url('/detail/tour/'.$tour->id) }}">جزئیات </a></span>
                            </div>

                             <div class="tours__table-btn hide-in-not-desktop submitbtn">
                                <span><a type="button" href="{{ url('/register/form/'.$tour->id)  }}">انتخاب </a></span>
                            </div>
                             </span>
                                </div>
                                @endforeach

                                        </div>
                                    </div>


            </div>

        </div>
    </div>

</section><!--End logina-area-->


@endsection
