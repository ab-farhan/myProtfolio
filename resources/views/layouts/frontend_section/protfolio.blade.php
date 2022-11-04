<section class="protfolio_part py-75" id="protfolio">
        <div class="container">

            <!--		common-header start here  -->
            {{-- <div class="row">
                <div class="col-12">
                    <div class="section_header text-center">
                        <div class="section_header_content">
                            <h3>protfolio</h3>
                            <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites .</p>
                        </div>

                        <div class="section_header_shadow">
                            <span>protfolio</span>
                        </div>
                    </div>

                </div>
            </div> --}}
            @include('layouts.frontend_section.common_header',['title'=>'protfolio','srt_description'=>'I design and develop services for customers of all sizes, specializing in creating stylish, modern websites .'])
            <!--		common-header end here  -->

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="profolio_menu text-center">
                        <ul class="clearfix">
                            <li data-filter="*" class="active">all</li>
                            <li data-filter=".web">web design</li>
                            <li data-filter=".dev">web development</li>
                            <li data-filter=".bots">bootstrap </li>
                            <li data-filter=".word">wordpress</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 p-sm-0">
                    <div class="protfolio_grid">

                        <div class="protfolio_item dev">
                            <div class="protfolio_img">
                                <img src="images/w5.jpg" alt="w1.jpg" class="img-fluid">
                                <div class="protfolio_img_overlay">
                                    <div class="Pro_img_ovr_cont">
                                        <a href="http://protfolio.abfarhan.com/betals" target="_blank"><i class="fal fa-link"></i></a>
                                        <p>Visit This Link.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="protfolio_item bots">
                            <div class="protfolio_img">
                                <img src="images/w2.jpg" alt="w2.jpg" class="img-fluid">
                                <div class="protfolio_img_overlay">
                                    <div class="Pro_img_ovr_cont">
                                        <a href="http://protfolio.abfarhan.com/Business%20PSD/" target="_blank"><i class="fal fa-link"></i></a>
                                        <p>Visit This Link.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="protfolio_item word">
                            <div class="protfolio_img">
                                <img src="images/w3.png" alt="w3.jpg" class="img-fluid">
                                <div class="protfolio_img_overlay">
                                    <div class="Pro_img_ovr_cont">
                                        <a href="#" target="_blank"><i class="fal fa-link"></i></a>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="protfolio_item web bots">
                            <div class="protfolio_img">
                                <img src="images/w4.jpg" alt="w4.jpg" class="img-fluid">
                                <div class="protfolio_img_overlay">
                                    <div class="Pro_img_ovr_cont">
                                        <a href="http://protfolio.abfarhan.com/sass%20project-1" target="_blank"><i class="fal fa-link"></i></a>
                                        <p>Visit This Link.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="protfolio_item web bots">
                            <div class="protfolio_img">
                                <img src="images/w1.jpg" alt="w5.jpg" class="img-fluid">
                                <div class="protfolio_img_overlay">
                                    <div class="Pro_img_ovr_cont">
                                        <a href="#" target="_blank"><i class="fal fa-link"></i></a>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="protfolio_item dev">
                            <div class="protfolio_img">
                                <img src="images/w6.jpg" alt="w6.jpg" class="img-fluid">
                                <div class="protfolio_img_overlay">
                                    <div class="Pro_img_ovr_cont">
                                        <a href="#" target="_blank"><i class="fal fa-link"></i></a>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="protfolio_item web">
                            <div class="protfolio_img">
                                <img src="images/w7.jpg" alt="w7.jpg" class="img-fluid">
                                <div class="protfolio_img_overlay">
                                    <div class="Pro_img_ovr_cont">
                                        <a href="http://protfolio.abfarhan.com/sprit" target="_blank"><i class="fal fa-link"></i></a>
                                        <p>Visit This Link.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="protfolio_item web bots">
                            <div class="protfolio_img">
                                <img src="images/w8.jpg" alt="w8.jpg" class="img-fluid">
                                <div class="protfolio_img_overlay">
                                    <div class="Pro_img_ovr_cont">
                                        <a href="http://protfolio.abfarhan.com/strict-psd" target="_blank"><i class="fal fa-link"></i></a>
                                        <p>Visit This Link.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="protfolio_item dev">
                            <div class="protfolio_img">
                                <img src="images/w9.jpg" alt="w9.jpg" class="img-fluid">
                                <div class="protfolio_img_overlay">
                                    <div class="Pro_img_ovr_cont">
                                        <a href="#" target="_blank"><i class="fal fa-link"></i></a>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>