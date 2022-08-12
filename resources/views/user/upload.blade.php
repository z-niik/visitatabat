@extends('layouts.master')

@section('content')


<section class="logina-area">
    <div class="container">


        <h2>  به پنل کاربری خود خوش آمدید     </h2>

        <div class="row justify-content-center">

            <div class="col-lg-8">
                <div class="form-area contact-form">
                    <div class="form-content rules">
                        <div class="row">
                          <div class="col-lg-12">
                                <div class="form-group">
                                    <div>
                                    <ul>
                                        <li><span>کاربر گرامی لطفا تصویر کارت ملی</span></li>
                                        <li><span> تصویر صفحات اول و دوم گذرنامه</span></li>
                                        <li><span>و تصویر فیش واریزی را  در این بخش بارگذاری نمایید. </span></li>


                                    </ul>
                                    <br />
                                    @if($doc)
                                    <span>شما مدارک زیر را بارگذاری نموده اید</span>
                                    <span>در صورت تمایل میتوانید مدارک  جدیدبارگذاری  نمایید تا جایگزین مدارک قبلی شود</span>
                                    <div class="row justify-content-around" style="padding: 10px;">
                                        <div class="column" >
                                            <img src="{{ asset($doc->melli_image) }} "class="img-thumbnail" style="padding:10px;"/>
                                        </div>
                                        <div class="column" >
                                            <img src="{{ asset($doc->fish_image) }}" class="img-thumbnail"  style="padding:10px;"/>
                                        </div>
                                        <div class="column" >
                                            <img src="{{ asset($doc->gozarname1) }}" class="img-thumbnail" style="padding:10px;"/>
                                        </div>
                                        <div class="column" >
                                            <img src="{{ asset($doc->gozarname2) }}" class="img-thumbnail"  style="padding:10px;"/>
                                        </div>

                                    </div>
                                    @endif
                                    </div>
                                    <form method="POST" action="{{ route('upload.doc') }}" enctype="multipart/form-data">
                                      @csrf
                                      <p style="color:#b4120f;font-weight:700;">آپلود مدارک کاربر با شماره ملی {{ $mellicode }}</p>
                                      <div class="form-group">
                                        <label>تصویر کارت ملی</label>
                                        <input type="file" id="melli" name="melli" style="float:left;" required>
                                    </div>
                                    <div class="form-group">
                                        <label>تصویر صفحه ی اول گذرنامه</label>
                                        <input type="file" id="gozarname1" name="gozarname1" style="float:left;" required>
                                    </div>
                                    <div class="form-group">
                                        <label>تصویر صفحه ی دوم گذرنامه</label>
                                        <input type="file" id="gozarname2" name="gozarname2" style="float:left;" required>
                                    </div>

                                        <div class="form-group">
                                            <label>تصویر فیش واریزی بانک</label>
                                            <input type="file" id="fish" name="fish" style="float:left;" required>
                                        </div>
                                        <div class="logina-button">
                                            <button type="submit" class="logina-btn">ارسال مدارک </button>
                                        </div>

                                    </form>
                                    @if($team==1)

                                    <form method="POST" action="{{ route('upload.teamdoc') }}" enctype="multipart/form-data">
                                        @csrf
                                    @for($i = 0; $i < $team_num; $i+=2)


                                                <p style="color:#b4120f;font-weight:700;">آپلود مدارک کاربر با شماره ملی : {{ $teammate[$i] }}</p>
                                               <input type="hidden" name="teammate[]" value="{{ $teammate[$i] }}" />
                                               <input type="hidden" name="team_num" value="{{ $team_num }}" />

                                                <div class="form-group">
                                                  <label>تصویر کارت ملی</label>
                                                  <input type="file" id="teammelli" name="teammelli[]" style="float:left;" required>
                                              </div>
                                              <div class="form-group">
                                                  <label>تصویر صفحه ی اول گذرنامه</label>
                                                  <input type="file" id="teamgozarname1" name="teamgozarname1[]" style="float:left;" required>
                                              </div>
                                              <div class="form-group">
                                                  <label>تصویر صفحه ی دوم گذرنامه</label>
                                                  <input type="file" id="teamgozarname2" name="teamgozarname2[]" style="float:left;" required>
                                              </div>


                                              @endfor
                                    @endif
                                    <div class="logina-button">
                                        <button type="submit" class="logina-btn">ارسال مدارک </button>
                                    </div>

                                </form>

                                    </div>

                                </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!--End logina-area-->


@endsection
