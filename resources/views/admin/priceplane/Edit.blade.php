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
                        <li><a href="index.html" title="پیشخوان">ویرایش طرح قیمتی </a></li>
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
                <form action="{{ url('edit/priceplane/'.$plane->id) }}" id="form" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" value="{{ $plane->name }}"
                               required data-parsley-minlength="8">
                               <span style="color:#7c7d7d;margin-right:5%;"> نمونه : سفر دو سر هوایی قیمت 9 تا 10 میلیون تومان</span>
                    </div>

                    <div class="form-group">
                        <textarea type="text" name="description" class="form-control"
                               required data-parsley-minlength="8"> {{ $plane->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary-ui">ویرایش</button>
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
