



<!--Start logina-area-->


@yield('content')

<!-- jquery  -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<!-- Bootstrap js  -->
<script src="{{ asset('assets/css/bootstrap/js/bootstrap.min.js') }}"></script>


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

</body>

</html>
