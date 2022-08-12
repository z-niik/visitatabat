@extends('layouts.master')

@section('content')

<section class="logina-area">
    <div class="container">
        <div class="row justify-content-center">
            @if(session('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> {{ session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    @endif
            <div class="col-lg-8">
                <div class="form-area login-form">
                    <div class="form-content">
                        <h2>ثبت نام عتبات به صورت اقساطی</h2>
                        <p style="margin-top:15px;">لطفا جهت اطلاع از شرایط سفر به صورت اقساطی به عتبات عالیات نام و شماره تماس خود را وارد فرمائید.</p>
                                             </div>
                    <div class="form-input">
                        <h2>دریافت تسهیلات </h2>
                        <form method="post" action="{{ route('loin.submit') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" id="name" name="name" required>
                                <label>نام و نام خانوادگی </label>
                            </div>
                            <div class="form-group">
                                <input type="text" id="phone" name="phone" required>
                                <label>شماره تماس </label>
                            </div>
                            <div class="logina-button">
                                <button class="logina-btn">ثبت</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
