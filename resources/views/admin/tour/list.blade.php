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
                        <li><a href="#" title="پیشخوان">لیست تورها</a></li>
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
                            <div>  لیست تورها  </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-custom spacing5" style="font-size:12px;">
                                <thead>
                                <tr class="title-row">
                                    <th>#</th>
                                    <th> روز </th>
                                    <th>  تاریخ اعزام </th>
                                    <th> نوع</th>
                                    <th> هزینه</th>
                                    <th> نام شرکت مجری</th>
                                    <th> هتل نجف</th>
                                    <th> هتل کربلا</th>
                                    <th> هتل کاظمین</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                     $j=1
                                     @endphp
                                    @foreach($tours as $tour)
                                <tr>
                                    <td><span>{{ $j }}</span></td>
                                    <td>{{ $tour->name_start_day }}</td>
                                    <td>{{ $tour->start_day }}</td>
                                    <td>{{ $tour->type_code }}.{{ $tour->type_going }}.{{ $tour->type_return }}.<br>{{ $tour->num_days }}.{{ $tour->type_plan }}</td>
                                    <td>{{ $tour->price }}</td>
                                    <td>{{ $tour->execute_name }}</td>
                                    <td>{{ $tour->hotel_najaf }}</td>
                                    <td>{{ $tour->hotel_karbala }}</td>
                                    <td>{{ $tour->hotel_kazemain }}</td>
                                    <td>
                                        {{--  <a href="{{ url('edit/priceplane/'.$tour->id) }}" type="button" class="btn btn-sm btn-default ac-btn-ui"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="ویرایش ">
                                            <i class="ri-edit-line"></i>
                                        </a>  --}}
                                        <a href="{{ url('delete/tour/'.$tour->id) }}" type="button" class="btn btn-sm btn-default ac-btn-ui "
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="حذف"
                                                aria-describedby="tooltip286794"><i class="ri-delete-bin-line"></i>
                                        </a>
                                    </td>
                                </tr>
                                @php
                                $j++
                                @endphp
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
