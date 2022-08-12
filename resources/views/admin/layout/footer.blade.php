
<!--begin::Scripts-->
<script src="{{ asset('/adminassets/assets/js/jquery-3.6.0.min.js') }}"></script><!-- Jquery -->
<script src="{{ asset('/adminassets/assets/js/app.bundle.min.js') }}"></script><!-- App Js -->
<script src="{{ asset('/adminassets/assets/vendor/select-ui/select-ui.min.js') }}"></script><!-- select Plugin Js -->
<script src="{{ asset('/adminassets/assets/bundles/c3.bundle.js') }}"></script><!-- charts Plugin Js -->
<script src="{{ asset('/adminassets/assets/vendor/sweetalert/sweetalert2.all.min.js') }}"></script><!-- sweetalert Plugin Js -->
{{--  <script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'info',
        iconHtml: '<i class="ri-information-line"></i>',
        title: 'به پنل مدیریت خوش آمدید',
        showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
        }
    })
</script>  --}}
<script src="{{ asset('/adminassets/assets/js/custom.js') }}"></script><!-- Custom Js -->
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

    </script><!--end::Scripts-->

    <script type="text/javascript">
        $(document).ready(function () {
            var small={width: "70px",height: "40px"};
            var large={width: "400px",height: "232px"};
            var count=1;
            $(".imgtab").css(small).on('click',function () {
                $(this).animate((count==1)?large:small);
                count = 1-count;
            });
        });
    </script>

</body>

</html>
