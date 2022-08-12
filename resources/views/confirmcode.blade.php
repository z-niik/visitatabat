@extends('layouts.master')



@section('content')


<section class="logina-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-area search-from">
                    <div class="form-content">
                        <p>شرکت خدمات مسافرت هوایی، جهانگردی، زیارتی و بار هوایی توسعه گردشگری باهشت </p>
                        <p>لطفا کد تایید پیامکی که برای شماره همراه {{ $phone_number }} ارسال شد را در فرم زیر وارد کنید و دکمه ی تایید را لمس کنید. </p>
                      @if( session('success'))


                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong> {{ session('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          @endif
                          @if( session('error'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong> {{ session('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          @endif
                    </div>
                    <div class="form-input">
                        <h2>تایید شماره همراه </h2>
                        <form method="post" action="{{ route('confirm.code') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <div class="form-group">
                                <input type="text" id="code" name="code" required>
                                <label>کد تایید </label>
                            </div>

                            <div class="logina-button">
                                <button type="submit" class="logina-btn">ارسال کد تایید  </button>
                            </div>
                        </form>
                        @if( session('error'))
                        <div class="" role="alert" style="padding:10%;margin:auto;">
                            <div><strong>  {{ session('error') }}</strong></div>
                            <div><span> کد وارد شده صحیح نمیباشد</span></div>
                            <div><span><a type="button" href="#">دریافت مجدد کد</a></span></div>

                              </div>
                          @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--End logina-area-->

@endsection
