<section class="about_part py-75" id="about">
    <div class="container">

        <!--		common-header start here  -->
        {{-- <div class="row">
            <div class="col-12">
                <div class="section_header text-center">
                    <div class="section_header_content">
                        <h3>about</h3>
                    </div>

                    <div class="section_header_shadow">
                        <span>about</span>
                    </div>
                </div>

            </div>
        </div> --}}
        @include('layouts.frontend_section.common_header',['title'=>$title,'srt_description'=>''])
        <!--		common-header end here  -->

        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="about_img">
                    <img src="{{asset('/')}}images/farhan.jpg" alt="" class="img-fluid ">
                </div>
            </div>
            <div class="col-md-7 offset-md-1 offset-lg-1 col-lg-8">
                
                <div class="about_content">
                  

                    <h2>Abu Bokkor Farhan </h2>
                    
                    <h4>Full Stack Web Developer Based in Bangladesh</h4>
                    <p>Hi, I'm Farhan. I have been working as a web designer <span class="text-danger">2.5</span> years &amp; web development in <span class="text-danger">1.5</span> years in my local marketplace. I can design &amp; develop any website or web page with PHP, Laravel &amp; Javascript. I can also Wordpress customization. My HTML &amp; CSS is very strong. I can design any responsive website. My other experience of PSD to HTML, Bootstrap template &amp; HTML5 template design &amp; development. Aslo can create custom web application as like client requierment.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about_info">
                                <b>Birthday : &nbsp; &nbsp;</b> <span>25 November 1999</span><br>
                                <b>Freelance : &nbsp;&nbsp;</b><span>Avaiable</span><br>
                                <b>Exprience : </b>&nbsp; <span> 1 year</span><br>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about_info">
                                <b>E-mail : &nbsp; &nbsp; &nbsp; &nbsp;</b> <a href="#">farhanbokkor@gmail.com</a><br>
                                <b>Phone : &nbsp; &nbsp; &nbsp; &nbsp;</b> <span>+8801868362878</span><br>
                                <b>Residence :&nbsp;</b> <span> Bangladesh</span><br>
                            </div>
                        </div>

                    </div>
                    <div class="btn1">
                        <div class="btn-3d default-side" onclick="window.location.href='{{asset('/cv')}}/Abu Bokkor Farhan.pdf'" >Download cv</div>
                        <div class="btn-3d hover-side" onclick="window.location.href='{{asset('/cv')}}/Abu Bokkor Farhan.pdf'">Download cv</div>
                    </div>

                </div>
            </div>
        </div>

</section>