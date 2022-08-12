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
                        <li><a href="index.html" title="پیشخوان">لیست مدارک بارگذاری شده</a></li>
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
                        <div class="title__row">
                            <div>  لیست مدارک بارگذاری شده</div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-custom spacing5">
                                <thead>
                                <tr class="title-row">
                                    <th>#</th>
                                    <th>  شماره ملی </th>
                                    <th>  تصویر کارت ملی </th>
                                    <th>  تصویر فیش واریزی  </th>
                                    <th>تاریخ ثبت</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @foreach($docs as $doc)
                                    <tr>
                                        <td>
                                            <span>{{ $docs->firstItem()+$loop->index }}</span>
                                        </td>
                                        @foreach($melli_code as $melli)
                                             @if($melli->id=$doc->user_id)
                                             @php
                                             $mellicode=$melli->melli_code;
                                             @endphp
                                             @endif
                                        @endforeach
                                        <td>{{ $mellicode }}</td>
                                         <td><img class="imgtab small" src="{{ asset($doc->melli_image) }}"  alt=""></td>
                                        <td><img class="imgtab small" src="{{ asset($doc->fish_image) }}"  alt=""></td>
                                        <td>{{  Carbon\Carbon::parse($doc->created_at)->diffForHumans()  }}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $docs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Main Content-->

</div>

@endsection
