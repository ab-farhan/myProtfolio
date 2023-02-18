@include('layouts.frontend_header')

<!--	banner_part start here   -->
@include('layouts.frontend_section.banner')
<!--	banner_part end here   -->

<!--	about_part start here  -->
@include('layouts.frontend_section.about', ['title' => 'about'])
<!--	about_part end here  -->

<!--	skill_part start here  -->

@include('layouts.frontend_section.skill')

<!--	skill_part start here  -->

<!--	service_part start here  -->
@include('layouts.frontend_section.service')
<!--	service-part end here  -->


<!--	protfolio_part start here  -->
{{-- @include('layouts.frontend_section.protfolio') --}}
<!--	protfolio_part end here  -->

<!--	contact_part start here  -->
@include('layouts.frontend_section.contact')
<!--	contact_part end here  -->

@include('layouts.frontend_footer')
