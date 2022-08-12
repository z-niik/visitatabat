@extends('layouts.master')

@section('content')

<section class="logina-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-area register-from">
                    <div class="form-content">
                        <img src="{{ asset('/assets/images/logo24001.png') }}" style="margin:20%;" >
                        <p>شرکت خدمات مسافرت هوایی، جهانگردی، زیارتی و بار هوایی توسعه گردشگری باهشت</p>
                    </div>
                    <div class="form-input">
                        <h2> ثبت نام</h2>
                        <form method="post" action="{{ route('admin.register') }}">
                            @csrf
                           <div class="form-group">
                                <input type="text" id="name" name="name" required>
                                <label>نام</label>
                            </div>

                            <div class="form-group">
                                <input type="email" id="email" name="email" required>
                                <label>ایمیل</label>
                            </div>

                            <div class="form-group">
                                <input type="password" id="pass" name="password" required>
                                <label>رمز عبور</label>
                            </div>
                            <div class="form-text">
                                <span>آیا قبلا ثبت نام کردید؟ <a href="{{ route('admin.login') }}">وارد شوید</a></span>
                            </div>
                            <div class="logina-button">
                                <button type="submit" class="logina-btn">ثبت نام</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--End logina-area-->


 @endsection
