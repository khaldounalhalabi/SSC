@extends('front.layout')
@section('content')

<!-- ================ contact section start ================= -->
<section class="contact-section section_padding">
    <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <iframe style="width:100%"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d831.5581675523922!2d36.30822122918237!3d33.521335816849785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1518e6df04cf22c5%3A0x2ff6410386dd64b9!2sSSC!5e0!3m2!1sen!2snl!4v1665580153557!5m2!1sen!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
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
                <form class="form-contact contact_form" action="" method="post" id="contactForm"
                    novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">

                                <textarea style = "font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"  class="form-control w-100" name="message" id="message" cols="30" rows="9"
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
                    <div class="form-group mt-3">
                        <button  style = "font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" type="submit" class="button btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="bi bi-house"></i></span>
                    <div class="media-body">
                        <h3>Damascus</h3>
                        <p>Midan</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="bi bi-tablet"></i></span>
                    <div class="media-body">
                        <h3>+963936955531</h3>
                        <p>2:00 Pm - 10:00 Pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="bi bi-envelope"></i></span>
                    <div class="media-body">
                        <h3>khaldoun1222@hotmail.com</h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->

@endsection
