@extends('layouts.master')



@section('content')


<section class="logina-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-area form-content">
                    <div class="form-input rules">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="padding: 15px;">
                                    <span>تلفن همراه :</span><span style="color:#444">{{ $user->phone }}</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" style="padding: 15px;">
                                    <span> شماره ملی :</span><span style="color:#444">{{ $user->melli_code }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="padding: 15px;">
                                    <span> تاریخ تولد :</span><span style="color:#444">{{ $user->birthdaty }}</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" style="padding: 15px;">
                                    <span>  استان و شهر :</span><span style="color:#444">{{ $tour->state }},{{ $tour->city }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="padding: 15px;">
                            <span>  تاریخ اعزام  :</span>
                            {{--  @foreach ($prices as $price )  --}}
                            <span style="color:#444">{{ $tour->name_start_day }}.{{ $tour->start_day }} .</span>
                            {{--  @endforeach  --}}

                       </div>
                        <div class="form-group" style="padding: 15px;">
                            <span>  قیمتی   :</span>
                            {{--  @foreach ($periods as $period )  --}}
                            <span style="color:#444">{{ $price }} .</span>
                            {{--  @endforeach  --}}
                        </div>
                        <div class="title__row">
                            <div>اطلاعات همسفران </div>

                        </div>
                        @if($teammates ==Null)
                        <span style="color:#444">شما اطلاعات هیچ همسفری را ثبت نکرده اید  </span>
                        @else

                            @php
                                $j=1;
                            @endphp

                            @for($i = 0; $i < count($teammates); $i+=2)

                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group" style="padding: 15px;">
                                    <span>{{ $j}} :</span>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group" style="padding: 15px;">
                                    <span>کدملی :</span><span style="color:#444">{{ $teammates[$i] }}</span>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group" style="padding: 15px;">
                                    <span>  تاریخ تولد :</span><span style="color:#444">{{ $teammates[$i+1] }}</span>
                                </div>
                            </div>
                        </div>
                               @php
                                $j++;
                            @endphp
                        @endfor
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--End logina-area-->

@endsection
