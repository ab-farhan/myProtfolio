<section class="contact_part py-75" id="contact">
    <div class="container">

        <!--		common-header start here  -->
        {{-- <div class="row">
            <div class="col-12">
                <div class="section_header text-center">
                    <div class="section_header_content">
                        <h3>contact</h3>
                        <p>Contact with me as it suits you</p>
                    </div>

                    <div class="section_header_shadow">
                        <span>contact</span>
                    </div>
                </div>

            </div>
        </div> --}}
        @include('layouts.frontend_section.common_header', [
            'title' => 'contact',
            'srt_description' => 'Contact with me as it suits you.',
        ])
        <!--		common-header end here  -->

        <div class="row">
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="contact_info">
                    <h3>Get in Touch</h3>
                    <i class="fas fa-envelope"></i>
                    <a href="#">farhanbokkor@gmail.com</a> <br>
                    <i class="fas fa-phone"></i>
                    <span> +8801868362878</span> <br>
                    <i class="fas fa-network-wired"></i>
                    <span><a href="https://www.fiverr.com/ab_farhan?up_rollout=true">Fiver</a></span><br>
                    <i class="fas fa-network-wired"></i>
                    <span><a href="https://www.freelancer.com/u/AbuBokkorFarhan">Freelancer</a></span><br>
                    <i class="fas fa-network-wired"></i>
                    <span><a href="#">Up Work</a></span><br>

                    <div class="social_link clearfix">
                        <ul>
                            <li><a href="https://www.facebook.com/far.han.79677471"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 offset-lg-2 offset-xl-3">
                <div class="contact_form">
                    <form action="{{ route('contact') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Your Name <span>*</span></label>
                            <input type="text" class="form-control @error('name') 'is_invalid'@enderror"
                                name="name" id="exampleFormControlInput1" required value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Your Email Address <span>*</span></label>
                            <input type="email" class="form-control @error('email') 'is_invalid'@enderror"
                                name="email" id="exampleFormControlInput2" required value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="Textarea1">Drop Your Message <span>*</span></label>
                            <textarea id="Textarea1" class="form-control @error('message') 'is_invalid'@enderror" name="message" rows="3"
                                required>{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="btn1 float-right">
                            <div class="btn-3d default-side text-uppercase">send</div>
                            <button class="btn-3d hover-side text-uppercase" type="submit">send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
