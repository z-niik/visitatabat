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
                        <li><a href="index.html" title="پیشخوان">تایید اطلاعات   </a></li>
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
                <form action="{{ route('confirm.info') }}" id="form" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="phone" class="form-control" value="{{ $phone }}">
                        <input type="hidden" name="id" class="form-control" value="{{ $id }}">
                        <label >شماره همراه کاربر :</label><span>{{ $phone }}</span>

                    </div>

                    <div class="form-group">
                        <input type="text" name="price" class="form-control" placeholder="مبلغ واریزی کاربر"
                               required data-parsley-minlength="8">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary-ui">تایید اطلاعات</button>
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
