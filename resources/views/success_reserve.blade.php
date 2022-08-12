@extends('layouts.master')

@section('content')

<body class="bg-light">

    <div class="container-xxl register">

      <main>


    <div class="container">


                <div class="col-8 py-3 px-2 text-center" style="margin: 0 auto ;">
                    <img class="img-fluid" src="{{ asset('assets/images/tick-circle.png') }}">
                </div>
                <div class="col-8  px-2" style="margin: 0 auto ;">
                    <h6 class="text-center">اطلاعات شما با موفقیت ثبت شد.
                        کارشناسان ما برای نهایی شدن رزور تور با شما تماس خواهند گرفت.</h6>
                    <h6 class="text-center">التماس دعا</h6>
                </div>
                <div class="row py-5">

                    <div class="col d-grid gap-2">
                     <a href="#" class="btn btn-light">حساب کاربری </a>
                    </div>
                     <div class="col d-grid gap-2">
                        <a href="#" class="btn btn-primary">بازگشت به باد صبا  </a>
                     </div>
                 </div>

      </main>

    </div>


@endsection
