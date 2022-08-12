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
                        <li><a href="index.html" title="پیشخوان">لیست ثبت نامی ها</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">


        </div>


        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="body">
                        <div class="title__row">
                            <div> لیست ثبت نام کنندگان </div>

                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-custom spacing5">
                                <thead>
                                <tr class="title-row">
                                    <th>#</th>
                                    <th> شماره ملی </th>
                                    <th> شماره تلفن همراه </th>
                                    <th>تاریخ تولد </th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                <tr>
                                    <td>
                                        <span>--</span>
                                    </td>
                                    <td>{{ $user->melli_code }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->birthdaty }}</td>
                                    <td>
                                        {{--  <button type="button" class="btn btn-sm btn-default ac-btn-ui"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="مشاهده اطلاعات کامل ">
                                            <i class="ri-eye-line"></i>
                                        </button>  --}}
                                        <a type="button" href="{{ url('show/info/'.$user->id) }}" class="btn btn-sm btn-default ac-btn-ui"
                                        data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="مشاهده اطلاعات کامل"
                                        aria-describedby="tooltip286794"><i class="ri-eye-line"></i>
                                        </a>


                                        {{--  <button type="button" class="btn btn-sm btn-default ac-btn-ui js-btn-delete"
                                        data-bs-toggle="tooltip"
                                        data-bs-placement="top" title=" وضعیت تایید "
                                        aria-describedby="tooltip286794"><i class="ri-check-line"></i>
                                         </button>
                                         --}}
                                         <a href="{{ url('delete/userrequest/'.$user->id) }}" type="button" class="btn btn-sm btn-default ac-btn-ui "
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="حذف"
                                            aria-describedby="tooltip286794"><i class="ri-delete-bin-line"></i>
                                    </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--end::Main Content-->

</div>

@endsection
