@extends('layouts.master')

@section('content')

<body class="bg-light">

    <div class="container-xxl">
      <header class="navbar navbar-expand-lg navbar-dark bd-navbar sticky-top">
            <div class="flex-grow-1" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel" data-bs-scroll="true">
              <h5 class="offcanvas-title text-white text-center" id="bdNavbarOffcanvasLabel">رزرو تور</h5>
            </div>
        </header>
      <main>



    <div class="container">
        <div class="position-relative overflow-hidden bg-light">
            <div class="col-12 d-flex justify-content-end align-items-center">
              <a class="link-secondary" href="#">
                <img  src="{{ asset('assets/images/profile-circle.png') }}" class="img-fluid py-3" >
              </a>
            </div>
       </div>
           <div class="row tour-detail" >
            <h2 class="text-center py-5">رزرو تور هوایی عتبات عالیات</h2>

          <form method="post" action="{{ route('store.user') }}" enctype="multipart/form-data" novalidate>
            @csrf
            <input type="hidden" name="tour_id" value="{{ $tour_id }}" >
            <input type="hidden" name="adult_num" value="{{ $adult }}" >
            <input type="hidden" name="child_num" value="{{ $child }}" >
                <div class="row">

                    <div class="col inputwrapper">
                      <input  name="name" type="text" value="{{ $name }}">
                      <label >نام و نام خانوادگی<span style="color: red;">*</span></label>
                    </div>
                    <div class="col inputwrapper">
                      <input required='' name="mobile" type="text" value="{{ $mobile }}">
                      <label >شماره موبایل<span style="color: red;">*</span></label>
                    </div>
                </div>

               <div class="row">
                   <div class="col inputwrapper">
                      <input required='' name="mellicode" type="text">
                      <label >کد ملی<span style="color: red;">*</span></label>
                    </div>
                    <div class="col inputwrapper">
                      <input required='' name="idnumber" type="text">
                      <label>شماره شناسنامه<span style="color: red;">*</span></label>
                    </div>
                </div>



                <div class="file-upload file">
                    <button class="file-upload-btn file-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )"><img src="{{ asset('assets/images/Plus.png') }}"> عکس صفحه ی اول پاسپورت <span style="color: red;">*</span></button>

                    <div class="image-upload-wrap image-wrap">
                      <input class="file-upload-input file-input" type='file' name="gozarname_photo" onchange="readURL(this);" accept="image/*" />
                    </div>
                    <div class="file-upload-content file-content">
                      <img class="file-upload-image file-image" src="#" alt="تصویر شما" />
                      <div class="image-title-wrap image-t-wrap">
                        <button type="button" onclick="removeUpload()" class="remove-image remove-img">حذف <span class="image-title">Uploaded Image</span></button>
                      </div>
                    </div>
                  </div>

                  <div class="file-upload-v file">
                    <button class="file-upload-btn-v file-btn" type="button" onclick="$('.file-upload-input-v').trigger( 'click' )"><img src="{{ asset('assets/images/Plus.png') }}"> عکس کارت واکسن <span style="color: red;">*</span></button>

                    <div class="image-upload-wrap-v image-wrap">
                      <input class="file-upload-input-v file-input" type='file' name="vaksan_photo"  onchange="readURLv(this);" accept="image/*" />
                    </div>
                    <div class="file-upload-content-v file-content">
                      <img class="file-upload-image-v file-image" src="#" alt="تصویر شما" />
                      <div class="image-title-wrap-v image-t-wrap">
                        <button type="button" onclick="removeUploadv()" class="remove-image-v remove-img">حذف <span class="image-title-v">Uploaded Image</span></button>
                      </div>
                    </div>
                  </div>

                </div>

                  <div class="row">
                  <div class="col loan">
                      <input type="checkbox" name="cash" value="نقدی" />
                      <label>تمایل به پرداخت قسطی هزینه ی تور دارم</label>
                  </div>
                </div>

                <div class="row teammate">
                  <div class="col">
                   <h6>مشخصات همسفر</h6>
                  </div>
                  <div class="col align-items-lg-end">
                      <button class="trash" ></button>
                  </div>
                </div>



               @php
                 $count=$adult+$child;
               @endphp
            @if($count>0)
            @for($i = 1; $i < $count; $i++)


               <div class="team-group" id="team-group">

                <div class="row py-3">
                    <div class="col radio-age">
                        <div class="d-flex">
                            <input name="age" value="بزرگسال" type="radio">
                            <label>بزرگسال <span style="color: red;">*</span></label>
                        </div>
                    </div>
                    <div class="col radio-age">
                        <div class="d-flex">
                                <input  name="age" value="کودک" type="radio">
                                <label>کودک <span style="color: red;">*</span></label>
                        </div>
                    </div>
                </div>


                <div class="row">
                        <div class="col inputwrapper">
                            <input required='' name="team_name[]"  type="text" >
                            <label> نام و نام خانوادگی <span style="color: red;">*</span></label>
                        </div>
                        <div class="col inputwrapper">
                            <input required='' name="team_mobile[]" type="text" >
                            <label>شماره تلفن</label>
                        </div>
                </div>

                <div class="row">
                    <div class="col inputwrapper">
                        <input required='' name="team_mellicode[]" type="text" >
                        <label>شماره ملی <span style="color: red;">*</span></label>
                    </div>
                    <div class="col inputwrapper">
                        <input required='' name="team_idnumber[]" type="text" >
                        <label>شماره شناسنامه <span style="color: red;">*</span></label>
                    </div>
                </div>


                <div class="file-upload{{ $i }} file">
                    <button class="file-upload-btn{{ $i }} file-btn" type="button" onclick="$('.file-upload-input{{ $i }}').trigger( 'click' )"><img src="{{ asset('assets/images/Plus.png') }}"> عکس صفحه ی اول پاسپورت <span style="color: red;">*</span></button>

                    <div class="image-upload-wrap{{ $i }} image-wrap">
                      <input class="file-upload-input{{ $i }} file-input" type='file' name="gozarname_photo" onchange="readURL{{ $i }}(this);" accept="image/*" />
                    </div>
                    <div class="file-upload-content{{ $i }} file-content">
                      <img class="file-upload-image{{ $i }} file-image" src="#" alt="تصویر شما" />
                      <div class="image-title-wrap{{ $i }} image-t-wrap">
                        <button type="button" onclick="removeUpload{{ $i }}()" class="remove-image{{ $i }} remove-img">حذف <span class="image-title">Uploaded Image</span></button>
                      </div>
                    </div>
                  </div>

                <div class="file-upload-t{{ $i }} file-upload-t file">
                    <button class="file-upload-btn-t{{ $i }} file-upload-btn-t file-btn" type="button" onclick="$('.file-upload-input-t{{ $i }}').trigger( 'click' )"><img src="{{ asset('assets/images/Plus.png') }}"> عکس کارت واکسن <span style="color: red;">*</span></button>

                    <div class="image-upload-wrap-t{{ $i }} image-upload-wrap-t image-wrap">
                      <input class="file-upload-input-t{{ $i }} file-upload-input-t file-input" type='file' name="vaksan_photo"  onchange="readURLt(this);" accept="image/*" />
                    </div>
                    <div class="file-upload-content-t{{ $i }} file-upload-content-t file-content">
                      <img class="file-upload-image-t{{ $i }} file-upload-image-t file-image" src="#" alt="تصویر شما" />
                      <div class="image-title-wrap-t{{ $i }} image-title-wrap-t image-t-wrap">
                        <button type="button" onclick="removeUploadt()" class="remove-image-t{{ $i }} remove-image-t remove-img">حذف <span class="image-title-t{{ $i }} image-title-t">Uploaded Image</span></button>
                      </div>
                    </div>
                  </div>

            </div>
            @endfor
            @endif
          <div class="row teammate py-3">
                <div class="col">
                    <h6>مشخصات همسفر</h6>
                </div>
                <div class="col align-items-lg-end">
                     <button class="addteam" id="addteam"></button>
                </div>
          </div>


         <div class="d-grid gap-2">
            <input type="submit" class="btn btn-primary" value="ثبت">
          </div>

           </form>

     </div>

      </main>

    </div>






@endsection


@section('footer_scripts')


    <script>


        function readURL(input) {
            if (input.files && input.files[0]) {

              var reader = new FileReader();

              reader.onload = function(e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();

                $('.image-title').html(input.files[0].name);
              };

              reader.readAsDataURL(input.files[0]);

            } else {
              removeUpload();
            }
          }

          function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
          }
          $('.image-upload-wrap').bind('dragover', function () {
              $('.image-upload-wrap').addClass('image-dropping');
            });
            $('.image-upload-wrap').bind('dragleave', function () {
              $('.image-upload-wrap').removeClass('image-dropping');
          });


        function readURLv(input) {
            if (input.files && input.files[0]) {

              var reader = new FileReader();

              reader.onload = function(e) {
                $('.image-upload-wrap-v').hide();

                $('.file-upload-image-v').attr('src', e.target.result);
                $('.file-upload-content-v').show();

                $('.image-title-v').html(input.files[0].name);
              };

              reader.readAsDataURL(input.files[0]);

            } else {
              removeUploadv();
            }
          }

          function removeUploadv() {
            $('.file-upload-input-v').replaceWith($('.file-upload-input-v').clone());
            $('.file-upload-content-v').hide();
            $('.image-upload-wrap-v').show();
          }
          $('.image-upload-wrap-v').bind('dragover', function () {
              $('.image-upload-wrap-v').addClass('image-dropping-v');
            });
            $('.image-upload-wrap-v').bind('dragleave', function () {
              $('.image-upload-wrap-v').removeClass('image-dropping-v');
          });

          function readURLt(input) {
            alert('here');
            if (input.files && input.files[0]) {

              var reader = new FileReader();

              reader.onload = function(e) {
                $('.image-upload-wrap-t').hide();

                $('.file-upload-image-t').attr('src', e.target.result);
                $('.file-upload-content-t').show();

                $('.image-title-t').html(input.files[0].name);
              };

              reader.readAsDataURL(input.files[0]);

            } else {
              removeUploadv();
            }
          }








        let count= "<?=$count  ?>"
        for(let i=0;i<count;i++) {
            var num=i


            function readURL
            (input) {
                if (input.files && input.files[0]) {

                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.image-upload-wrap-t'.i).hide();

                    $('.file-upload-image-t'.i).attr('src', e.target.result);
                    $('.file-upload-content-t'.i).show();

                    $('.image-title-t'.i).html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

                } else {
                removeUploadt.i();
                }
            }

            function removeUploadt() {
                $('.file-upload-input-t'.i).replaceWith($('.file-upload-input-t'.i).clone());
                $('.file-upload-content-t'.i).hide();
                $('.image-upload-wrap-t'.i).show();
            }
            $('.image-upload-wrap-t'.i).bind('dragover', function () {
                $('.image-upload-wrap-t'.i).addClass('image-dropping-t'.i);
            });
            $('.image-upload-wrap-t'.i).bind('dragleave', function () {
                $('.image-upload-wrap-t'.i).removeClass('image-dropping-t'.i);
            });
        }


</script>
@stop
