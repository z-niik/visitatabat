<footer class="footer container-xxl my-5 pt-5 text-muted text-center text-small">

    <div class="card-body">
    <div class="row ">
      <div class="col-md-4">
        <img  src="{{ asset('assets/images/logo badesaba svg 2.png')}}" class="img-fluid" >
        <img  src="{{ asset('assets/images/logo2400 2.png') }}" class="img-fluid" >
        <h4>شرکت توسعه گردشگری باهشت</h4>
        <p>شماره تماس (ساعت 9 تا 17) 05137128888</p>
        <p>شماره تماس (24 ساعته) 09151151389</p>
      </div>
      <div class="col-md-4 g-4 py-2">
        <h4>مجوزها</h4>
        <img  src="{{ asset('assets/images/enamad.png') }}" class="img-fluid" >
        <img  src="{{ asset('assets/images/atabat.png') }}" class="img-fluid" >
      </div>
      <div class="col-md-4 g-4 py-2">
        <h4>دسترسی های سایت</h4>
        <ul class="list">
            <li class="list-item"><a href="#">تورها </a></li>
            <li class="list-item"><a href="#">وبلاگ </a></li>
            <li class="list-item"><a href="#">درباره ما </a></li>
            <li class="list-item"><a href="#">تماس با ما </a></li>
          </ul>
    </div>
  </div>



  </div>
<p class="mb-1">&copy; شرکت توسعه گردشگری باهشت</p>

</footer>
</div>


<script src="{{  asset('assets/js/bootstrap.bundle.min.js') }}"></script>

  <script src="{{  asset('assets/js/form-validation.js') }}"></script>
  <script src="{{ asset('assets/js/add-minus.js') }}"></script>
</body>
</html>

<!-- jquery  -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<!-- Bootstrap js  -->
{{--  <script src="{{ asset('assets/css/bootstrap/js/bootstrap.min.js') }}"></script>  --}}


<script src="{{ asset('assets/js/persian-date.min.js') }}"></script>
<script src="{{ asset('assets/js/addrow.js') }}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>

    <script>
      @if(Session::has('message'))
     var type="{{Session::get('alert_type' , 'info')}}"
     switch(type){

     case 'info' :
     toastr.info("{{ Session::get('message') }}");
     break;

     case 'success' :
      toastr.success("{{ Session::get('message') }}");
      break;

      case 'warning' :
      toastr.warning("{{ Session::get('message') }}");
      break;

      case 'error' :
      toastr.error("{{ Session::get('message') }}");
      break;

     }

      @endif

    </script>

  <script src="{{ asset('assets/js/persian-datepicker.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $(".persianDatapicker").pDatepicker({
        altFormat: "YYYY/MM/DD",
        observer: true,
        format: 'YYYY/MM/DD',
        initialValue: false,
        initialValueType: 'persian',
        autoClose: true,
      });
    });
  </script>

  <script type="text/javascript">

    function check() {
        if(document.getElementById("accept-rules").checked = false)
        {
            document.getElementById("rules").value = "لطفا قوانین و شرایط را مطلعه نموده و تایید نمایید.";
        };
      }
 </script>

   <script>
    $(document).ready(function(){
        let idx=0;
        $('#adduser').click(function() {
            $('#otheruser').append(`<div class="form-group"><input type="text" id="melli_code" name="teammate[]" required><label>شماره ملی</label> </div><div class="form-group"> <input type="text" class="persianDatapicker"  name="teammate[]" id="birthday"><label>تاریخ تولد </label></div>`);


        $(".persianDatapicker").pDatepicker({
            altFormat: "YYYY/MM/DD",
            observer: true,
            format: 'YYYY/MM/DD',
            initialValue: false,
            initialValueType: 'persian',
            autoClose: true,
          });
          idx++;
        });
    });
</script>
