@extends('layouts.master')

@section('content')

<body class="bg-light">

    <div class="container-xxl">

      <main>

        <div class="position-relative overflow-hidden bg-light">
              <div class="col-12 d-flex  align-items-center">
                <a class="link-account" href="#">اطلاعات کاربر
                  <img  src="profile-circle.png" class="img-fluid py-3" >
                </a>
              </div>
         </div>

    <div class="container">
           <div class="row tour-detail" >


          <form>
                <div class="row">

                    <div class="col">
                      <input required='' type="text">
                      <label alt='نام و نام خانوادگی' placeholder='نام و نام خانوادگی'></label>
                    </div>
                    <div class="col">
                      <input required='' type="text">
                      <label alt='شماره موبایل' placeholder='شماره موبایل'></label>
                    </div>
                  </div>

               <div class="row">

                   <div class="col">
                      <input required='' type="text">
                      <label alt='کد ملی' placeholder=' کد ملی'></label>
                    </div>
                    <div class="col">
                      <input required='' type="text">
                      <label alt='شماره شناسنامه' placeholder='شماره شناسنامه'></label>
                    </div>
                </div>
                <div class="row">

                  <div class="row account-img">
                    <div class="col">
                    <img src="Rectangle 1760.png" class="img-fluid">
                    </div>
                    <div class="col">
                      <img src="trash2.png" class="img-fluid" style="float:left;" />
                  </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col loan">
                      <input type="checkbox" name="loan" />
                      <label class="" for="">تمایل به پرداخت قسطی هزینه ی تور دارم</label>
                  </div>
                </div>

                <div class="row teammate">
                  <div class="col">
                   <h6>مشخصات همسفر</h6>
                      </div>
                      <div class="col align-items-lg-end">
                      <img src="trash.png" />
                  </div>
                </div>
               </div>


               <div class="team-group">
               <div class="row py-3">

                <div class="col radio-age">
                  <div class="d-flex">
                  <input required='' type="radio">
                  <label>بزرگسال *</label>
                  </div>
                </div>
                 <div class="col radio-age">
                  <div class="d-flex">
                   <input required='' type="radio">
                   <label>کودک *</label>
                   </div>
                 </div>
             </div>
             <div class="row">

              <div class="col">
                 <input type="text" placeholder=" نام و نام خانوادگی *">
              </div>
               <div class="col">
                 <input required='' type="text" placeholder="شماره موبایل">
               </div>
           </div>
           <div class="row">

            <div class="col">
               <input required='' type="text" placeholder="شماره ملی * ">
           </div>
             <div class="col">
               <input required='' type="text" placeholder="شماره شناسنامه *">
            </div>
         </div>
         <div class="row account-img">
          <div class="col">
          <img src="Rectangle 1760.png" class="img-fluid">
          </div>
          <div class="col">
            <img src="trash2.png" class="img-fluid" style="float:left;" />
        </div>
        </div>
          <div class="row teammate">
            <div class="col">
             <h6>مشخصات همسفر</h6>
                </div>
                <div class="col align-items-lg-end">
                <img src="Icon.png" />
            </div>
          </div>
         </div>
         </div>
           </form>


            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="button">ثبت </button>
            </div>

           </div>

     </div>





      </main>

    </div>


@endsection
