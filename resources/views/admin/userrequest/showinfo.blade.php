@extends('admin.layout/master')

@section('content')


<div class="content">


    <!--begin::Main Content-->
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="toolbar-ui">
                    <h1 class="text-dark fs-5 fw-bold">داشبورد</h1>
                    <ul class="breadcrumb-ui ps-0">
                        <li><a href="index.html" title="پیشخوان">لیست ثبت نامی ها</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">


        </div>


        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="body">
                        <div class="title__row">
                            <div> اطلاعات ثبت نام </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="padding: 15px;">
                                    <span>تلفن همراه :</span><span style="color:#444">{{ $user->phone }}</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" style="padding: 15px;">
                                    <span> شماره ملی :</span><span style="color:#444">{{ $user->melli_code }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="padding: 15px;">
                                    <span> تاریخ تولد :</span><span style="color:#444">{{ $user->birthdaty }}</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" style="padding: 15px;">
                                    <span>   استان و شهر :</span><span style="color:#444">{{ $tour->state }}. {{  $tour->city }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="padding: 15px;">
                            <span>  تاریخ اعزام  :</span>
                            <span style="color:#444">{{ $tour->start_day }} .</span>
                       </div>
                        <div class="form-group" style="padding: 15px;">
                            <span>  قیمت   :</span>
                            <span style="color:#444">{{ $price }} .</span>
                        </div>
                        <div class="title__row">
                            <div>اطلاعات همسفران </div>

                        </div>
                        @if($teammates ==Null)
                        <span style="color:#444">شما اطلاعات هیچ همسفری را ثبت نکرده اید  </span><br/>
                        @else

                            @php
                                $j=1;
                            @endphp

                            @for($i = 0; $i < count($teammates); $i+=2)

                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group" style="padding: 15px;">
                                    <span>{{ $j}} :</span>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group" style="padding: 15px;">
                                    <span>کدملی :</span><span style="color:#444">{{ $teammates[$i] }}</span>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group" style="padding: 15px;">
                                    <span>  تاریخ تولد :</span><span style="color:#444">{{ $teammates[$i+1] }}</span>
                                </div>
                            </div>
                        </div>
                               @php
                                $j++;
                            @endphp
                        @endfor
                        @endif

                        @if($confirm==1)
                        <div class="row" dir="rtl">
                        <span class="alert alert-info" > <b> اطلاعات کاربر تایید شده است...</b><span>مبلغ واریزی کاربر  :   </span><span><b>   {{ $confirms->price }}  </b>تومان</span></span>

                        <div class="row">
                      @else
                        <a type="button" href="{{ url('confirm/info/'.$id) }}" class="btn btn-primary-ui">تایید اطلاعات</a>
                     @endif
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--end::Main Content-->

</div>

@endsection
