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
                        <li><a href="index.html" title="پیشخوان">افزودن استان  </a></li>
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
                <form action="{{ route('add.state') }}" id="form" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder=" نام استان   "
                               required data-parsley-minlength="8">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary-ui">افزودن</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="body">
                        <div class="title__row">
                            <div>  لیست استان ها  </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-custom spacing5">
                                <thead>
                                <tr class="title-row">
                                    <th>#</th>
                                    <th>  عنوان </th>
                                    <th>تاریخ ثبت</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @foreach($states as $state)
                                    <tr>
                                        <td>
                                            <span>{{ $states->firstItem()+$loop->index }}</span>
                                        </td>

                                        <td>{{ $state->name }}</td>
                                        <td>{{  Carbon\Carbon::parse($state->created_at)->diffForHumans()  }}</td>
                                        <td>
                                            <a href="{{ url('edit/state/'.$state->id) }}" type="button" class="btn btn-sm btn-default ac-btn-ui"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="ویرایش ">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a href="{{ url('delete/state/'.$state->id) }}" type="button" class="btn btn-sm btn-default ac-btn-ui "
                                                    data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="حذف"
                                                    aria-describedby="tooltip286794"><i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $states->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Main Content-->

</div>

@endsection
