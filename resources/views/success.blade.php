@extends('layouts.master')

@section('content')


<section class="logina-area">
    <div class="container">



        <div class="row justify-content-center">

            <div class="col-lg-12">

                @if(session('success'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong style="text-align: right;"> {{ session('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                @endif
                <div><h6 style="font-size: 15px;">گروه زیارتی ابوتراب با محوریت شرکت زیارتی صبح صادق</h6></div>
                    <div><h2 style="font-size: 28px;color:#b90300;font-weight:bold;">نقد و اقساط</h2></div>
                    <div><h4 style="font-size: 32px;">شرکت زیارتی باهشت</h4></div>
                <div class="row">
                    @foreach ($days as $day )
                @for($i = 1; $i < 5; $i++)

                    @php
                        $sun='sun'.$i;
                        $wed='wed'.$i;
                        $fri='fri'.$i;
                    @endphp
                    <div class="row row-sadegh">
                        <div class="col-md-4" style="padding-left: unset;">
                            <div class="col-11 tour-sadegh">
                            <h2>یکشنبه</h2>
                            <h3>{{ $day->$sun }}</h3>
                            <button type="button" class="btn" data-toggle="modal" data-target=".sunday">مشاهده ی جزئیات </button>
                            <div>
                                <form method="post" action="{{ route('update.loan') }}">
                                    @csrf
                                    <input type="hidden" name="name" value="{{ $name }}">
                                    <input type="hidden" name="phone" value="{{ $phone }}">
                                    <input type="hidden" name="selectday" value="{{ $day->$sun }}">
                                    <button class="submit" type="submit" >انتخاب</button>
                               </form>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 " style="padding-left: unset;">
                            <div class="col-11 tour-sadegh">
                            <h2>چهارشنبه</h2>
                            <h3>{{ $day->$wed }}</h3>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".wedensday">مشاهده ی جزئیات </button>
                            <div>
                                <form method="post" action="{{ route('update.loan') }}">
                                    @csrf
                                    <input type="hidden" name="name" value="{{ $name }}">
                                    <input type="hidden" name="phone" value="{{ $phone }}">
                                    <input type="hidden" name="selectday" value="{{ $day->$wed }}">
                                    <button class="submit" type="submit" >انتخاب</button>
                               </form>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4" style="padding-left: unset;">
                            <div class="col-11 tour-sadegh">
                            <h2>جمعه</h2>
                            <h3>{{ $day->$fri }}</h3>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".friday">مشاهده ی جزئیات </button>
                            <div>
                                <form method="post" action="{{ route('update.loan') }}">
                                    @csrf
                                    <input type="hidden" name="name" value="{{ $name }}">
                                    <input type="hidden" name="phone" value="{{ $phone }}">
                                    <input type="hidden" name="selectday" value="{{ $day->$fri }}">
                                    <button class="submit" type="submit" >انتخاب</button>
                               </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                    @endforeach
                </div>


                <!-- sunday Modal -->
                <div class="modal fade sunday" id="sunday" tabindex="-1" role="dialog" aria-labelledby="sundayLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 style="font-size:15px;" class="modal-title" id="sundayLabel">جزئیات سفرهای یکشنبه ی هر ماه</h5>
                        </div>
                        <div class="modal-body">


                                <h2 style="color:#01205f;font-size:30px;">قیمت 10/377/000 تومان</h2>
                                <p style="color:#6a2ea7;font-size:18px;">یکشنبه ی

                                    هر هفته</p>
                                <h5 style="color:#3a5530;font-size:25px;">دو سر هوایی مشهد نجف /نجف مشهد</h5>
                                <div class="row" style="background-color:#c89b46;padding:10px;color:#fff;">
                                    <div class="col-7" >
                                        <ul>
                                            <li>7 شب اقامت در عراق</li>
                                            <li>3 شب نجف (هتل ام القری)</li>
                                            <li>3 شب کربلا (هتل شرق الاوسط)</li>
                                            <li>1 شب کاظمین (هتل قرطاج)</li>
                                            <li>زیارت سامرا</li>
                                        </ul>
                                        <p> تلفن : 09151151389-37128888</p>

                                    </div>
                                    <div class="col-5">
                                        <ul>
                                            <li>تغذیه کامل</li>
                                            <li>بیمه و خدمات پزشکی</li>
                                            <li>امنیت</li>
                                         </ul>

                                        <p>مدارک لازم</p>
                                        <p>گذرنامه دارای 6 ماه اعتبار</p>
                                        <p>2 دوز واکسن</p>
                                    </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                          </div>
                      </div>
                    </div>
                  </div>

<!-- wedensdayModal -->
<div class="modal fade wedensday" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="wedensdayLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="font-size:15px;" class="modal-title" id="wedensdayLabel">جزئیات سفرهای چهارشنبه ی هر هفته </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">



        <h2 style="color:#01205f;font-size:30px;">قیمت 11/043/000 تومان</h2>
        <p style="color:#6a2ea7;font-size:18px;">چهارشنبه ی هر هفته</p>
        <h5 style="color:#3a5530;font-size:25px;">دو سر هوایی مشهد نجف /نجف مشهد</h5>
        <div class="row" style="background-color:#c89b46;padding:10px;color:#fff;">
            <div class="col-7" >
                <ul>
                    <li>8 شب اقامت در عراق</li>
                    <li>3 شب نجف (هتل ام القری)</li>
                    <li>3 شب کربلا (هتل  جبل المروه)</li>
                    <li>2 شب کاظمین (هتل قرطاج)</li>
                    <li>زیارت سامرا</li>
                </ul>
                <p> تلفن : 09151151389-37128888</p>

            </div>
            <div class="col-5">
                <ul>
                    <li>تغذیه کامل</li>
                    <li>بیمه و خدمات پزشکی</li>
                    <li>امنیت</li>
                 </ul>

                <p>مدارک لازم</p>
                <p>گذرنامه دارای 6 ماه اعتبار</p>
                <p>2 دوز واکسن</p>
            </div>
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
      </div>
    </div>
  </div>
</div>



<!-- fridayModal -->
<div class="modal fade friday" id="friday" tabindex="-1" role="dialog" aria-labelledby="fridayLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="font-size:15px;" class="modal-title" id="fridayLabel"> جرئیات سفرهای جمعه ی هر هفته</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">



        <h2 style="color:#01205f;font-size:30px;">قیمت 10/926/000 تومان</h2>
        <p style="color:#6a2ea7;font-size:18px;">جمعه ی

            هر هفته</p>
        <h5 style="color:#3a5530;font-size:25px;">دو سر هوایی مشهد نجف /نجف مشهد</h5>
        <div class="row" style="background-color:#c89b46;padding:10px;color:#fff;">
            <div class="col-7" >
                <ul>
                    <li>8 شب اقامت در عراق</li>
                    <li>3 شب نجف (هتل ام القری)</li>
                    <li>3 شب کربلا (هتل شرق الاوسط)</li>
                    <li>2 شب کاظمین (هتل قرطاج)</li>
                    <li>زیارت سامرا</li>
                </ul>
                <p> تلفن : 09151151389-37128888</p>

            </div>
            <div class="col-5">
                <ul>
                    <li>تغذیه کامل</li>
                    <li>بیمه و خدمات پزشکی</li>
                    <li>امنیت</li>
                 </ul>

                <p>مدارک لازم</p>
                <p>گذرنامه دارای 6 ماه اعتبار</p>
                <p>2 دوز واکسن</p>
            </div>
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
      </div>
    </div>
  </div>
</div>
                {{--  <div class="row row-sadegh">
                    <div class="col-md-6 tour-sadegh">
                        <div class="col-md-12 overlay">
                        <div class="row">
                        <div class="col-4">
                            <p style="color: #203662;font-size:12px;">شب جمعه کربلا</p>
                        </div>
                        <div class="col-4">
                            <p style="color:#1da858;font-size:10px;">گروه زیارتی ابوتراب</p>
                        </div>
                        <div class="col-4">
                            <p style="color: #203662;font-size:12px;">شب جمعه کربلا</p>
                        </div>
                        </div>
                        <h3 style="color:#b90300;font-size:18px;">شرکت زیارتی <span style="font-size:25px;">صبح صادق عرفات</span></h3>
                        <h4 style="color:#36552e;font-size:22px;">تحت نظارت سازمان حج و زیارت</h4>
                        <h2 style="color:#01205f;font-size:30px;">قیمت 10/926/000 تومان</h2>
                        <p style="color:#6a2ea7;font-size:18px;">جمعه هر هفته</p>
                        <h5 style="color:#3a5530;font-size:25px;">دو سر هوایی مشهد نجف /نجف مشهد</h5>
                        <div class="row">
                            <div class="col-4">
                                <ul>
                                    <li>8 شب اقامت در عراق</li>
                                    <li>3 شب نجف (هتل ام القری)</li>
                                    <li>3 شب کربلا (هتل شرق الاوسط)</li>
                                    <li>2 شب کاظمین (قرطاج)</li>
                                    <li>زیارت سامرا</li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li>تغذیه کامل</li>
                                    <li>بیمه و خدمات پزشکی</li>
                                    <li>امنیت</li>
                                 </ul>
                                 <p> تلفن : 32213435-32219267</p>
                            </div>
                            <div class="col-4">
                                <p>مدارک لازم</p>
                                <p>گذرنامه دارای 6 ماه اعتبار</p>
                            </div>
                            </div>
                    </div>
                    </div>
                    <div class="col-md-6 tour-sadegh">
                        c
                    </div>
                    <div class="col-md-6 tour-sadegh">
                        d
                    </div>

                </div>  --}}
            </div>
        </div>
    </div>

</section><!--End logina-area-->


@endsection
