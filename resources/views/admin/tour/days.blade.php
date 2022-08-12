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
                        <li><a href="index.html" title="پیشخوان">ثبت روزهای اعزام</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">


        </div>

{{-- افزودن طرح --}}

<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="body">
                <form action="{{ route('store.days') }}" id="form" method="post">
                    @csrf
                    <h2>یکشنبه های ماه</h2>
                    <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="sun1" class="form-control" placeholder="تاریخ یکشنبه ی اول ماه">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="sun2" class="form-control" placeholder="تاریخ یکشنبه ی دوم ماه">
                        </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="sun3" class="form-control" placeholder="تاریخ یکشنبه ی سوم ماه">
                    </div>
                        </div>
                     <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="sun4" class="form-control" placeholder="تاربخ بکشنبه ی چهارم ماه">
                    </div>
                     </div>
                    </div>

                    <h2>چهارشنبه های ماه</h2>
                    <div class="row">
                        <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="wed1" class="form-control" placeholder="تاریخ چهارشنبه ی اول ماه">
                    </div>
                        </div>
                        <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="wed2" class="form-control" placeholder="تاریخ چهارشنبه ی دوم ماه">
                    </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="wed3" class="form-control" placeholder="تاریخ چهارشنبه ی سوم ماه">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="wed4" class="form-control" placeholder="تاریخ چهارشنبه ی چهارم ماه">
                    </div>
                </div>
                    </div>
                    <h2>جمعه های ماه</h2>
                    <div class="row">
                        <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="fri1" class="form-control" placeholder="تاریخ جمعه ی اول ماه">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="fri2" class="form-control" placeholder="تاریخ جمعه ی دوم ماه">
                    </div>
                </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="fri3" class="form-control" placeholder="تاریخ جمعه ی سوم ماه">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="fri4" class="form-control" placeholder="تاریخ جمعه ی چهارم ماه">
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
