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
                        <li><a href="index.html" title="پیشخوان">درخواست های تسهیلات</a></li>
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
                            <div>  لیست   درخواست ها    </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-custom spacing5">
                                <thead>
                                <tr class="title-row">
                                    <th>#</th>
                                    <th>  نام </th>
                                    <th>  تلفن </th>
                                    <th>تاریخ اعزام</th>
                                    <th>تاریخ ثبت </th>
                                    <th>عملیات</th>

                                </tr>
                                </thead>
                                <tbody>

                                    @foreach($loan_request as $loan)
                                    <tr>
                                        <td>
                                            <span>{{ $loan_request->firstItem()+$loop->index }}</span>
                                        </td>

                                        <td>{{ $loan->name }}</td>
                                        <td>{{ $loan->phone }}</td>
                                        <td>{{ $loan->day }}</td>
                                        <td>{{  Carbon\Carbon::parse($loan->created_at)->diffForHumans()  }}</td>
                                       <td>
                                        <a href="{{ url('delete/loan/'.$loan->id) }}" type="button" class="btn btn-sm btn-default ac-btn-ui "
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="حذف"
                                            aria-describedby="tooltip286794"><i class="ri-delete-bin-line"></i>
                                    </a>
                                       </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{--  {{ $loan_request->links('admin.layout.paginate') }}  --}}
                                {{ $loan_request->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Main Content-->

</div>

@endsection
