@extends('front.layout')
@section('content')

<!-- ================ contact section start ================= -->
<section class="contact-section section_padding">
    <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <iframe style="width:100%"
                        src="{{ $contact->map }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{ route('front.send.message') }}" method="post" id="contactForm"
                    novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">

                                <textarea style = "font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"  class="form-control w-100" name="body" id="body" cols="30" rows="9"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                                    placeholder='Enter Message'></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input style = "font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" class="form-control" name="name" id="name" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                    placeholder='Enter your name'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input style = "font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" class="form-control" name="email" id="email" type="email"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                    placeholder='Enter email address'>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input style = "font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" class="form-control" name="subject" id="subject" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                    placeholder='Enter Subject'>
                            </div>
                        </div>
                    </div>
                     @include('front.include.error')
                @include('front.include.internalError')
                    <div class="form-group mt-3">
                        <button  style = "font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" type="submit" class="button btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="bi bi-house"></i></span>
                    <div class="media-body">
                        <h3>{{ $contact->city }}</h3>
                        <p>{{ $contact->street }}</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="bi bi-tablet"></i></span>
                    <div class="media-body">
                        <h3>{{ $contact->mobile }}</h3>
                        <p>{{ $contact->phone }}</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="bi bi-envelope"></i></span>
                    <div class="media-body">
                        <h3>{{ $contact->email }}</h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->

@endsection
