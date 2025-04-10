<!-- weight-footer-section -->
<section>
    <div class="weight-footer-main-con bg-overly-img">
        <div class="container overlay-content">
            <div class="weight-footer-item-con">
                <div class="row wow fadeInUp">
                    <div class="col-lg-4 col-md-12 col-12 text-lg-left text-md-center">
                        <div class="weight-footer-item weight-footer-item1 mb-lg-0 mb-3">
                            <div class="weight-footer-item-img">
                                <figure>
                                    <img src="{{asset(getConfigTableData()->logo)}}" alt="logo-img" class="img-fluid">
                                </figure>
                            </div>
                            <div class="weight-footer-item-content">
                                <p class="mb-xl-0 mb-lg-0 mb-md-4 weight-footer-item1-content">{{getConfigTableData()?->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-5">
                        <div class="weight-footer-item mb-lg-0 mb-md-0 mb-3">
                            <div class="weight-footer-item-title">
                                <h3>About Us</h3>
                            </div>
                            <div class="weight-footer-item-link">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="about.html">
                                            About us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html">
                                            Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pricing.html">
                                            Pricing
                                        </a>
                                    </li>
                                    <li>
                                        <a href="team.html">
                                            Team
                                        </a>
                                    </li>
                                    <li class="mb-0">
                                        <a href="contact.html">
                                            Contact us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-7">
                        <div class="weight-footer-item mb-lg-0 mb-md-0 mb-3">
                            <div class="weight-footer-item-title">
                                <h3>Our Services</h3>
                            </div>
                            <div class="weight-footer-item-content weight-footer-item-link">
                                <ul class="list-unstyled mb-0 social-icon-list">
                                    <li class="weight-footer-item2-content col-lg-11 pl-0 pr-0">{{getConfigTableData()?->address_line_1}}
                                    </li>
                                    <li>
                                        <a href="mailto:{{getConfigTableData()?->email}}">
                                            {{getConfigTableData()?->email}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:{{getConfigTableData()?->primary_phone_number}}">{{getConfigTableData()?->primary_phone_number}}</a>
                                    </li>
                                    <li class="d-inline-block mb-0"><a href="{{getConfigTableData()?->facebook_url}}"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li class="d-inline-block mb-0"><a href="{{getConfigTableData()?->twitter_url}}"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li class="d-inline-block mb-0"><a href="{{getConfigTableData()?->instagram_url}}"><i
                                                class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-12">
                        <div class="weight-footer-item mb-0">
                            <div class="weight-footer-item-title">
                                <h3 class="Newsletter-title">Newsletter</h3>
                            </div>
                            <div class="weight-footer-item-form">
                                <div class="weight-footer-item-form-input">
                                    <input type="email" placeholder="Enter your email">
                                    <button class="border-0" value="">
                                        <img src="{{asset('frontend/assets/image/submit-img.png')}}" alt="submit-img" class="img-fluid">
                                    </button>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="checkbox" id="html">
                                    <label for="html" class="checkbox-details mb-0">I Agree to the Terms</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-con">
            <div class="container overlay-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-con text-center">
                            <p>{{getConfigTableData()?->all_rights_reserved_text}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- weight-footer-section -->
<script src="{{asset('frontend/assets/js/wow.js')}}"></script>
<script>
    new WOW().init();
</script>
<script src="{{asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom-script.js')}}"></script>
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
            showConfirmButton: true
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'error',
            text: '{{ session('error') }}',
            showConfirmButton: true
        });
    </script>
@endif
