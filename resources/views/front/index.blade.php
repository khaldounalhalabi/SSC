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
        <div class="carousel-item active">
            <img src="@if(isset($carousels[0]->image)){{ url('/storage/public') }}/{{ $carousels[0]->image }}@endif" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5 style="@if(isset($carousels[0]->title_color)){{ $carousels[0]->title_color }}@endif">@if(isset($carousels[0]->title)){{ $carousels[0]->title }}@endif</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="@if(isset($carousels[1]->image)){{ url('/storage') }}/{{ $carousels[1]->image }}@endif"
                class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5 style="color: @if(isset($carousels[1]->title_color)){{ $carousels[1]->title_color }}@endif">
                    @if(isset($carousels[1]->title)){{ $carousels[1]->title }}@endif</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="@if(isset($carousels[2]->image)){{ url('/storage') }}/{{ $carousels[2]->image }}@endif"
                class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5 style="color: @if(isset($carousels[2]->title_color)){{ $carousels[2]->title_color }}@endif">
                    @if(isset($carousels[2]->title)){{ $carousels[2]->title }}@endif</h5>
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

@include('admin.include.error')
@include('admin.include.internalError')
@include('admin.include.message')

<!-- about -->
<section id="about" class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="about-img">
                    <img src="@if(isset($about->image)){{ url('/storage') }}/{{ $about->image }}@endif" alt=""
                        class="img-fluid">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                <div class="about-text">
                    <h2 class="segoui">
                        @if(isset($about->title)){{ $about->title }}@endif
                    </h2>
                    <p class="segoui">
                        @if(isset($about->short_description)){{ $about->short_description }}@endif
                    </p>
                    @if(isset($about->long_description))
                    <a href="{{ route('front.about.more') }}"> <button class="btn-primary segoui"
                            style="border-radius: 12px">Learn More</button></a>
                    @endif
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
                        @foreach($services as $service)
                        <div class="col-lg-16 col-xl-8 col-sm-16 align-self-center" style="margin-left: 5%;">
                            <div class="testimonial_slider_text">
                                <h4 class="segoui text-center">{{ $service->title }}</h4>
                                <p class="text-center">{{ $service->short_description }}</p>
                                @if(isset($service->long_description))
                                <div class="text-center">
                                    <a href="{{ route('front.service.more' , ['id' => $service->id]) }}">
                                        <button class="btn-danger text-white segoui text-center"
                                            style="background-color: #e24c60; border-radius: 12px">Read More</button>
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end services -->

{{--
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
