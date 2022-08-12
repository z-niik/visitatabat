@extends('layouts.master')



@section('content')


<section class="logina-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-area form-content">
                    <div class="form-input rules">
                        <h2>اطلاعات ثبت نام</h2>
                        <form method="POST" action="{{ route('store.user') }}">
                            @csrf
                            <div><label style="color:#b4110e;font-weight:bold;">نوع سفر :</label><span>{{ $tour->type_plan }}</span></div>
                            <div><label style="color:#b4110e;font-weight:bold;"> تاریخ اعزام :</label><span>{{ $tour->start_day }}</span></div>
                            <div><label style="color:#b4110e;font-weight:bold;"> هزینه سفر :</label><span>{{ $tour->price }}</span></div>
                            <div><label style="color:#b4110e;font-weight:bold;"> استان و شهر :</label><span>{{ $tour->state}} . {{ $tour->city }}</span></div>

                            <input type="hidden" name="userdata" value="{{ base64_encode(json_encode($userdata))  }} ?>"/>
                            <input type="hidden" name="tour_id" value="{{ $tour->id  }}"/>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <span>تلفن همراه :</span><span>{{ $userdata['phone'] }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <span> شماره ملی :</span><span>{{ $userdata['melli_code'] }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <span> تاریخ تولد :</span><span>{{ $userdata['birthdaty'] }}</span>
                                    </div>
                                </div>
                                {{--  <div class="col-lg-6">
                                    <div class="form-group">
                                        <span>  استان انتخابی :</span><span>{{ $yourstate->name }}</span>
                                    </div>
                                </div>  --}}
                            </div>
                            {{--  <div class="form-group">
                                <span>  تاریخ اعزام  :</span>
                                @foreach ($userdata['periodplane'] as $period )
                                <span>{{ $period}}  ,</span>
                                @endforeach
                           </div>  --}}
                            {{--  <div class="form-group">
                                <span> پلن قیمتی   :</span>
                                @foreach ($userdata['priceplane'] as $price )
                                <span>{{ $price }}  ,</span>
                                @endforeach
                            </div>  --}}
                            <h4>اطلاعات همسفران</h4>
                            @if($userdata['teammate']==Null)

                            <span>شما اطلاعات هیچ همسفری را ثبت نکرده اید  </span>

                            @elseif($userdata['teammate'])
                            @php
                                $j=1;
                            @endphp

                            @for($i = 0; $i < count($userdata['teammate']); $i+=2)



                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <span>{{ $j}} :</span>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <span>کدملی :</span><span>{{ $userdata['teammate'][$i]}}</span>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <span>  تاریخ تولد :</span><span>{{ $userdata['teammate'][$i+1]}}</span>
                                    </div>
                                </div>
                            </div>
                            @php
                                $j++;
                            @endphp
                            @endfor
                            @endif

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="logina-button">

                                        @php
                                            $userdata=base64_encode(json_encode($userdata));
                                        @endphp

                                         <a class="logina-btn btn" type="button" href="{{ url('recheck/form/'.$userdata.'/'.$tour->id) }}">بازگشت و اصلاح اطلاعات </a>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="logina-button">
                                        <button type="submit" class="logina-btn btn">تایید اطلاعات</button>
                                    </div>
                                </div>

                            </div>
                             {{--  <div class="logina-button">
                                <button type="submit" class="logina-btn">تاییداطلاعات </button>
                            </div>   --}}

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--End logina-area-->

@endsection
