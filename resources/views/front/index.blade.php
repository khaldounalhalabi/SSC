@extends('front.layout')
@section('content')
<!-- carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="width: auto;">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" >
            <img src="img/ssc.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first
                    slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/it2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the
                    second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/it3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third
                    slide.</p>
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
                    <img src="img/about.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                <div class="about-text">
                    <h2 class="segoui">
                        We Provide Best Quality <br> Services Ever
                    </h2>
                    <p class="segoui">
                        Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Porro voluptatibus, non
                        commodi
                        rem aspernatur impedit, error odit sint sapiente
                        harum assumenda tempora quo deleniti
                        reiciendis ad, unde sit voluptas iusto!
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
                                <h4 class="segoui" style="margin-left: 40%;">Michel Hashale</h4>
                                <p>Behold place was a multiply creeping creature his domin to thiren open void
                                    hath herb divided divide creepeth living shall i call beginning
                                    third sea itself set Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Molestias et inventore voluptatibus id maiores ullam sapiente laudantium. Eum
                                    inventore harum eaque sit, numquam alias, quibusdam eos sunt quia vitae tempora.</p>
                                <button class="btn text-white segoui"
                                    style="background-color: #e24c60; margin-left: 40%;">Read
                                    More</button>
                            </div>
                        </div>
                        <div class="col-lg-16 col-xl-8 col-sm-16 align-self-center" style="margin-left: 5%;">
                            <div class="testimonial_slider_text">
                                <h4 class="segoui" style="margin-left: 40%;">Michel Hashale</h4>
                                <p>Behold place was a multiply creeping creature his domin to thiren open void
                                    hath herb divided divide creepeth living shall i call beginning
                                    third sea itself set</p>
                                <button class="btn text-white segoui"
                                    style="background-color: #e24c60; margin-left: 40%;">Read
                                    More</button>
                            </div>
                        </div>
                        <div class="col-lg-16 col-xl-8 col-sm-16 align-self-center" style="margin-left: 5%;">
                            <div class="testimonial_slider_text">
                                <h4 class="segoui" style="margin-left: 40%;">Michel Hashale</h4>
                                <p>Behold place was a multiply creeping creature his domin to thiren open void
                                    hath herb divided divide creepeth living shall i call beginning
                                    third sea itself set</p>
                                <button class="btn text-white segoui"
                                    style="background-color: #e24c60; margin-left: 40%;">Read
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

<!-- our customers -->
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
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
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
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
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
                                    <h4>Michel Hashale</h4>
                                    <h5> Sr. Web designer</h5>
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
<!-- end our customers -->
@endsection
