<footer id='contact' class="footer-area" style="background-color: white;" dir="rtl">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="single-footer-widget footer_1">
                    <a href="{{ route('front.index') }}"> <img src="{{ asset('img') }}/ssc logo.png" alt=""> </a>
                    <p class="segoui">بالتأكيد حلولنا ستجعل من عملك أمراً أسهل</p>
                    <p class="segoui">لكن من الممكن أن تدلك على طرق تقوم بتطوير عملك بوتيرة أسرع</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="single-footer-widget footer_2">
                    <h4 class="segoui">خدمة البريد</h4>
                    <p class="segoui">ابقى على علم باّخر التطورات و الأحداث في شركتنا
                    </p>
                    <form action="{{ route('front.subscribe') }}" method="post">
                        @csrf
                        <div class="form-group" dir="rtl">
                            <div class="input-group mb-3">
                                <input dir="rtl" type="text" class="form-control segoui" placeholder='أدخل بريدك الاكتروني'
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'أدخل بريدك الالكتروني'"
                                    name="email" id="name">
                                <div class="input-group-append">
                                    <button class="btn" type="submit"><i class="bi bi-arrow-left"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="social_icon">
                        <a href="#"> <i class="bi bi-facebook"></i> </a>
                        <a href="#"> <i class="bi bi-twitter"></i> </a>
                        <a href="#"> <i class="bi bi-instagram"></i> </a>
                        <a href="#"> <i class="bi bi-skype"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-4">
                <div class="single-footer-widget footer_2">
                    <h4>معلومات التواصل</h4>
                    <div class="contact_info">
                        <p class="segoui"><span class="segoui"> العنوان :</span
                                class="segoui">@if(isset($contact->city)){{ $contact->city }} - {{
                            $contact->street }}@endif</p>
                        <p class="segoui"><span class="segoui"> الهاتف :</span
                                class="segoui">@if(isset($contact->phone)){{$contact->phone}}@endif</p>
                        <p class="segoui"><span class="segoui"> الجوال :</span
                                class="segoui">@if(isset($contact->mobile)){{$contact->mobile}}@endif</p>
                        <p class="segoui"><span class="segoui"> البريد الالكتروني : </span
                                class="segoui">@if(isset($contact->email)){{ $contact->email }}@endif</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{ asset('js') }}/bootstrap.bundle.min.js"></script>
<!-- jquery plugins here-->
<!-- jquery -->
<script src="{{ asset('js') }}/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="{{ asset('js') }}/popper.min.js"></script>
<!-- bootstrap js -->
<script src="{{ asset('js') }}/bootstrap.min.js"></script>
<!-- easing js -->
<script src="{{ asset('js') }}/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="{{ asset('js') }}/swiper.min.js"></script>
<!-- swiper js -->
<script src="{{ asset('js') }}/masonry.pkgd.js"></script>
<!-- particles js -->
<script src="{{ asset('js') }}/owl.carousel.min.js"></script>
<script src="{{ asset('js') }}/jquery.nice-select.min.js"></script>
<!-- swiper js -->
<script src="{{ asset('js') }}/slick.min.js"></script>
<script src="{{ asset('js') }}/jquery.counterup.min.js"></script>
<script src="{{ asset('js') }}/waypoints.min.js"></script>
<!-- custom js -->
<script src="{{ asset('js') }}/custom.js"></script>
<script src="{{ asset('js') }}/scripts2.js"></script>
</body>

</html>
