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
                        <li> ثبت مشخصات تور</li>
                    </ul>
                </div>
            </div>
        </div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="body">
                <form action="{{ route('store.tour') }}" id="form" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="start_day" class="form-control" placeholder=" تاریخ حرکت  ">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;font-size:10px;"> نمونه :1401/2/2</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="name_start_day" class="form-control" placeholder=" روز حرکت ">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;"> نمونه : پنجشنبه  </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                                <input type="text" name="depature_time" class="form-control" placeholder=" ساعت حرکت">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;"> نمونه :  22.30   </span>
                          </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group file">
                                <label class="file-label" for="upload-photo"><img src="{{ asset('assets/images/Icon.png') }}">بارگزاری تصویر تور</label>
                                <input type="file" name="photo" id="upload-photo" />
                        </div>
                     </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-check-label" for="type" style="margin-left: 5px;">نوع حمل و نقل</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="transportaion" id="aerial" value="هوایی">
                                    <label class="form-check-label" for="aerial">هوایی</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="transportaion" id="earthly" value="زمینی">
                                    <label class="form-check-label" for="earthly">زمینی</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="transportaion" id="combinatory" value="ترکیبی">
                                    <label class="form-check-label" for="combinatory" >ترکیبی</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-check-label" for="type" style="margin-left: 5px;">نوع پرداخت</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="checkout_type" id="aerial" value="نقد">
                                    <label class="form-check-label" for="Cash">نقد</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="checkout_type" id="earthly" value="نقد/اقساط">
                                    <label class="form-check-label" for="installments">نقد/اقساط</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="type_going" class="form-control" placeholder=" نوع رفت ">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;"> نمونه : نجف سپهران هوایی  </span>
                            </div>
                        </div>
                     <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="type_return" class="form-control" placeholder=" نوع برگشت ">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;"> نمونه :  زمینی  </span>
                            </div>
                     </div>
                 </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="type_plan" class="form-control" placeholder="  اقامت ">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;"> نمونه : 4کربلا-2کاظمین/سامرا-4نجف  </span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="num_days" class="form-control" placeholder="مدت اقامت ">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;"> نمونه : 8 شب</span>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="price" class="form-control" placeholder="قیمت">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;"> نمونه :96364488</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="type_code" class="form-control" placeholder=" کد سفر  ">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;"> نمونه :ب ج 2</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="state" class="form-control" placeholder="استان">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;"> نمونه : خراسان رضوی </span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="city" class="form-control" placeholder="شهر">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;"> نمونه :مشهد</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="execute_name" class="form-control" placeholder="نام شرکت مجری">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;"> نمونه :پریان سیر پارسیان</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="execute_code" class="form-control" placeholder="کد شرکت مجری ">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;"> نمونه :59003  </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="group" class="form-control" placeholder=" گروه">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;"> نمونه : 126</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="kargozar" class="form-control" placeholder="نام کارگزار">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;"> نمونه :پریان سیر پارسیان</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="hotel_karbala" class="form-control" placeholder="هتل کربلا">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;"> نمونه :ضيوف الامام</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="hotel_kazemain" class="form-control" placeholder="هتل کاظمین">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;"> نمونه :  ضيوف الامام</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="hotel_najaf" class="form-control" placeholder="هتل نجف">
                                <span style="color:#7c7d7d;margin-right:5%;font-size:10px;"> نمونه :ضيوف الامام</span>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="address" class="form-control" placeholder="آدرس ">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="modir_karvan_name" class="form-control" placeholder="نام مدیر کاروان ">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="modir_karvan_phone_number" class="form-control" placeholder=" شماره تماس مدیر کاروان ">
                                </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="rohani_karvan_name" class="form-control" placeholder="نام روحانی کاروان ">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="rohani_karvan_phone_number" class="form-control" placeholder=" شماره تماس روحانی کاروان ">
                            </div>
                        </div>
                    </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary-ui">افزودن</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

    </div>
    <!--end::Main Content-->

</div>

@endsection
