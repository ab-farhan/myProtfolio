<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> - developed by
                <b><a href="#" target="_blank">abfarhan</a></b>
            </span>
        </div>
    </div>
</footer>

</div>
</div>
<!-- Scrollto to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('backend') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('backend') }}/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Bootstrap Notify -->
<script src="{{asset('backend/js/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script src="{{ asset('backend') }}/js/ruang-admin.min.js"></script>
@yield('scripts')
<script src="{{ asset('backend') }}/js/custom.js"></script>

@if (session()->has('success'))
<script>
  "use strict";
  var content = {};

  content.message = '{{session('success')}}';
  content.title = 'Success';
  content.icon = 'fa fa-bell';

  $.notify(content,{
    type: 'success',
    placement: {
      from: 'top',
      align: 'right'
    },
    showProgressbar: true,
    time: 1000,
    delay: 4000,
  });
</script>
@endif


@if (session()->has('warning'))
<script>
  "use strict";
  var content = {};

  content.message = '{{session('warning')}}';
  content.title = 'Warning!';
  content.icon = 'fa fa-bell';

  $.notify(content,{
    type: 'warning',
    placement: {
      from: 'top',
      align: 'right'
    },
    showProgressbar: true,
    time: 1000,
    delay: 4000,
  });
</script>
@endif
</body>

</html>
