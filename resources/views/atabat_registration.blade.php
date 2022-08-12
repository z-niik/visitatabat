@extends('layouts.master')

@section('content')


<section class="logina-area">
    <div class="container">


        <h2>  ثبت نام کاروان زیارتی عتبات عالیات     </h2>

        <div class="row justify-content-center">

            <div class="col-lg-8">
                <div class="form-area contact-form">
                    <div class="form-content rules">
                        <div class="row">

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <img src="{{ asset('assets/images/hajoziyarat68.png') }}"  href="#" height="100px" width="68px" style="">
                                </div>
                            </div>

                        </div>


                        <ul>
                            <li><span><b>
                                از متقاضیان محترم تشرف به عتبات عالیات تقاضا می شود قوانین و شرایط ذیل را به دقت مطالعه فرمایند:
                            </b> </span></li>
                            <li><span>1- کلیه سفرهای زیارتی این سامانه با مجوز و تحت نظارت "سازمان حج و زیارت" می باشد. </span></li>
                            <li><span>2- از زمان آغاز سفر باید حداقل 6 ماه زمان به تاریخ انقضای گذرنامه زائرین گرامی باقی مانده باشد. در غیر اینصورت سفر ملغی شده و هزینه های احتمالی کنسلی و جرائم مربوطه بر زائر محترم است. </span></li>
                            <li><span>3- زائرین عزیز می بایست به شیوه نامه های بهداشتی ستاد ملی و استانی کرونا، از جمله داشتن کارت 2 دوز واکسن، توجه کامل داشته باشند. </span></li>
                            <li><span>4- مبالغ اعلام شده در این سامانه به صورت علی الحساب می باشد. مبالغ قطعی توسط سازمان حج و زیارت اعلام خواهد شد و شرکت مجری نقشی در تعیین هزینه سفر ندارد. </span></li>
                            <li><span><b>5- ثبت نام در این سامانه به منزله اطلاع و پذیرش شرایط آن و ضوابط سازمان حج و زیارت می باشد.</b></span></li>

                        </ul>

                        <form method="get" action="{{ route('list.tour') }}">
                            @csrf
                        <div class="col-lg-6">
                            <div class="form-group accept-rules">
                          <input type="checkbox" name="accept-rules"  id="accept-rules">
                          <label>  پذیرفتن شرایط و مقررات </label>
                           </div>
                           <span class="text-danger"> {{ session('error') }}</span>
                        </div>
                        <div class="col-lg-12" style="display: flex;">

                            <div class="col-lg-12">
                            <div class="logina-button">
                                <button type="submit" class="logina-btn"> ثبت نام </button>
                            </div>
                            </div>

                        </div>
                        <div class="col-lg-8">
                        <span>در صورتی که قبلا ثبت نام کرده اید ,برای تکمیل ثبت نام<span ><a style="color:darkred !important;" class="logina-btn btn" type="button" href="{{ route('user.login') }}" >وارد</a></span>شوید</span>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!--End logina-area-->


@endsection
