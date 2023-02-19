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

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('backend') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('backend') }}/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Bootstrap Notify -->
<script src="{{ asset('/') }}js/toastr.min.js"></script>
<script src="{{ asset('backend') }}/js/ruang-admin.min.js"></script>
@yield('scripts')
<script src="{{ asset('backend') }}/js/custom.js"></script>

@if (session()->has('success'))
    <script>
        "use strict";
        toastr.success("{{ session()->get('success') }}", 'Success')
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
@endif


@if (session()->has('warning'))
    <script>
        toastr.success("{{ session()->get('warning') }}", 'Warning')
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
@endif
</body>

</html>
