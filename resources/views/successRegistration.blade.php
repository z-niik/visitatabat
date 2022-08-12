@extends('layouts.master')



@section('content')


<section class="logina-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-area search-from rules">
                    @if( session('success'))


                    <div class="" role="alert" style="padding:10%;">
                        <div><strong>  {{ session('success') }}</strong></div>
                        <div><span>شماره همراه شما تایید شد.</span></div>
                        <div><span>پس از تایید اطلاعات ارسالی شما, <b style="color:#ec2519">حداکثرظرف مدت ۲۴ ساعت</b>
                            پیامک اطلاع رسانی به شماره همراه ثبت شده ارسال خواهد شد</span></div>
                        <div><span>شما میتوانید با </span></div>
                        <div><span>نام کاربری : <strong>شماره همراه</strong> </span></div>
                        <div><span>و رمز عبور : <strong>شماره ملی</strong> </span></div>
                        <div><span>وارد <a href="{{ route('user.login') }}" ><b style="color:#ec2519;">پروفایل</b></a> خود شده و بقیه مراحل ثبت نام را طی کنید. </span></div>

                      </div>

                      @endif
                      @if( session('error'))

                      <div class="" role="alert" style="padding:10%;margin:auto;">
                        <div><strong>  {{ session('error') }}</strong></div>
                        <div><span> کد وارد شده صحیح نمیباشد</span></div>
                        <div><span><a type="button" href="#">دریافت مجدد کد</a></span></div>



                      </div>
                      @endif
                    <div class="form-input">
                        <h2>   </h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--End logina-area-->

@endsection
