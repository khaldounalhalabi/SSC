@extends('front.layout')
@section('content')
<!-- carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="width: auto;">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img') }}/it1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5 style="color: white">Networking and engineering solutions</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('img')}}/it22.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5 style="color: white">Our Services For All Individuals And Enterprises</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img') }}/it3.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5 style="color: white">Make Your Work Easier</h5>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- end carousel -->


<!-- about -->
<section id="about" class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="about-img">
                    <img src="{{ asset('img') }}/about.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                <div class="about-text">
                    <h2 class="segoui">
                        We Provide Best Quality <br> Services Ever
                    </h2>
                    <p class="segoui">
                        SSC including new software releases and the latest technology solutions. our staff high educated skills with supporting Microsoft products trained to a minimum of Microsoft Certified Professional (MCP) status.
                        Maintenance Service Agreements with fixed & reasonable price contracted clearly
                    </p>
                    <a href="#" class="btn btn-primary segoui">Learn
                        More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about -->

<!-- services -->
<section id="services" class="services section-padding testimonial_part pb-10">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2 class="segoui">Our Services</h2>
                    <P class="segoui">Our basic services to give you a hint on what are we doing </P>
                </div>
            </div>
        </div>
        <div class="testimonial_slider">
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <div class="col-lg-16 col-xl-8 col-sm-16 align-self-center" style="margin-left: 5%;">
                            <div class="testimonial_slider_text">
                                <h4 class="segoui text-center" >Various Support Services</h4>
                                <p>We offer technical support to various systems and all kind of devices and systems which guarantee to you the best way to protect you devices and system by certified engineers</p>
                                <button class="btn text-white segoui" style="background-color: #e24c60; margin-left: 40%;">Read
                                    More</button>
                            </div>
                        </div>
                        <div class="col-lg-16 col-xl-8 col-sm-16 align-self-center" style="margin-left: 5%;">
                            <div class="testimonial_slider_text">
                                <h4 class="segoui text-center">Management/Administration:</h4>
                                <p>Computer hardware and software is becoming more sophisticated and prevalent. Full management of the increasingly complex interrelationships between these requires a large investment in both time and training. The costs for the customer in acquiring the necessary skill sets in-house, are often unable to be justified. The result of leaving a system to manage itself can be disastrous. DATABANK has considerable expertise in Total System Management and is able to offer this as part of an overall support package. With our high caliber consultants we are able to offer you up to date information and advice to give you peace of mind that your system is being well managed and is cost effective.</p>
                                <button class="btn text-white segoui" style="background-color: #e24c60; margin-left: 40%;">Read
                                    More</button>
                            </div>
                        </div>
                        <div class="col-lg-16 col-xl-8 col-sm-16 align-self-center" style="margin-left: 5%;">
                            <div class="testimonial_slider_text">
                                <h4 class="segoui text-center" >Communication:</h4>
                                <p>All support staff are contacted using “on person” mobile communications. As well as facilitating office to engineer communication, DATABANK can also give immediate support by allowing customer access to the help desk or an engineer, so that many problems can be solved without the need for an onsite visit, therefore saving you time and money.</p>
                                <button class="btn text-white segoui" style="background-color: #e24c60; margin-left: 40%;">Read
                                    More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end services -->

{{-- <!-- our customers -->
<section id='our_customers' class="testimonial_part pb-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section-header text-center pb-5">
                    <h2 class="segoui">Our Customers</h2>
                    <p class="segoui">Some of our customers to make you know us better</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="textimonial_iner owl-carousel">
                    <div class="testimonial_slider">
                        <div class="row">
                            <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                <div class="testimonial_slider_text">
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Zahi Group</h4>
                                    <h5>Food Company</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-2 col-sm-4">
                                <div class="testimonial_slider_img">
                                    <img src="img/zahi.png" alt="#">
                                </div>
                            </div>
                            <div class="col-xl-4 d-none d-xl-block">
                                <div class="testimonial_slider_text">
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Japan Empassy</h4>
                                    <h5>Japan Empassy Of Syria</h5>
                                </div>
                            </div>
                            <div class="col-xl-2 d-none d-xl-block">
                                <div class="testimonial_slider_img">
                                    <img src="img/japan empassy.jpg" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_slider">
                        <div class="row">
                            <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                <div class="testimonial_slider_text">
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Aljabban Group</h4>
                                    <h5>Food Company</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-2 col-sm-4">
                                <div class="testimonial_slider_img">
                                    <img src="img/aljabban.jpg" alt="#">
                                </div>
                            </div>
                            <div class="col-xl-4 d-none d-xl-block">
                                <div class="testimonial_slider_text">
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
                                </div>
                            </div>
                            <div class="col-xl-2 d-none d-xl-block">
                                <div class="testimonial_slider_img">
                                    <img src="img/zahi.png" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_slider">
                        <div class="row">
                            <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                <div class="testimonial_slider_text">
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-2 col-sm-4">
                                <div class="testimonial_slider_img">
                                    <img src="img/japan empassy.jpg" alt="#">
                                </div>
                            </div>
                            <div class="col-xl-4 d-none d-xl-block">
                                <div class="testimonial_slider_text">
                                    <p>Behold place was a multiply creeping creature his domin to thiren open void
                                        hath herb divided divide creepeth living shall i call beginning
                                        third sea itself set</p>
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
                                </div>
                            </div>
                            <div class="col-xl-2 d-none d-xl-block">
                                <div class="testimonial_slider_img">
                                    <img src="img/creo.png" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end our customers --> --}}
@endsection
