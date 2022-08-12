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
                        <li><a href="{{ route('admin.panel') }}" title="پیشخوان">داشبورد</a></li>
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
                            <div> آخرین ثبت نام کنندگان </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-custom spacing5">
                                <thead>
                                <tr class="title-row">
                                    <th> تلفن </th>
                                    <th> شماره ملی</th>
                                    <th>تاریخ تولد </th>
                                 </tr>
                                </thead>
                                <tbody>
                                 @foreach($users as $user)
                                <tr>
                                   <td>{{ $user->phone }}</td>
                                    <td>{{ $user->melli_code }}</td>
                                    <td>{{ $user->birthdaty }}</td>
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
