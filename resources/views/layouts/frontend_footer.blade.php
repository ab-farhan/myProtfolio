 <!--	footer_part start here  -->
 <footer class="footer_part">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <p class="text-center text-capitalize"> Copyright &copy;
                     <script>
                         document.write(new Date().getFullYear());
                     </script> {{-- design 2020 <= => development (28/10/2022) --}} Template right reserved by Abu Bokkor Farhan.
                 </p>
             </div>
         </div>
     </div>
 </footer>
 <!--	footer_part end here  -->
 <script src="{{ asset('/') }}js/jquery-1.12.4.min.js"></script>
 <script src="{{ asset('/') }}js/bootstrap.bundle.min.js"></script>
 <script src="{{ asset('/') }}js/wow.min.js"></script>
 <script src="{{ asset('/') }}js/isotope.pkgd.min.js"></script>
 <script src="{{ asset('/') }}js/typed.min.js"></script>
 <script src="{{ asset('/') }}js/toastr.min.js"></script>
 <script src="{{ asset('/') }}js/custom.js"></script>
 @if (session()->has('success'))
     <script>
         $(document).ready(function() {
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
         });
     </script>
 @endif
 </body>

 </html>
