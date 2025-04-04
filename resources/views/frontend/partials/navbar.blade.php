<!---header-and-banner-section-->
<div class="header-and-banner-con w-100">
    <div class="header-and-banner-inner-con overlay-content">
        <header>
            <!--navbar-start-->
            <div class="container">
                <div class="header-con">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a class="navbar-brand p-0" href="{{url('/')}}">
                            <img src="{{asset(getConfigTableData()?->logo)}}" alt="logo-img" class="img-fluid">
                            {{--                            <img src="{{asset('frontend/assets/image/logo-img.png')}}" alt="logo-img" class="img-fluid">--}}
                        </a>
                        <button class="navbar-toggler p-0 collapsed" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            <span class="navbar-toggler-icon"></span>
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                @foreach(json_decode(getConfigTableData()?->menu_json) as  $menuKey => $menuDatum)
                                    <li class="nav-item active">
                                        <a class="nav-link text-white p-0" href="{{url($menuDatum->href)}}">{{$menuDatum->text}}</a>
                                    </li>

                                @endforeach
                            </ul>
                            <a href="contact.html" class=" my-2 my-sm-0 contact-btn">Contact us</a>
                        </div>
                    </nav>
                </div>
            </div>
            <!--navbar-end-->
        </header>
        <section class="banner-main-con">
            <div class="container">
                <!--banner-start-->
                <div class="banner-con">
                    <div class="row">
                        <div
                            class="col-lg-7 col-md-7 col-sm-12 d-flex justify-content-center flex-column banner-main-left-con">
                            <div class="banner-left-con wow slideInLeft">
                                <div class="banner-heading">
                                    <h1>24/7 Cybersecurity
                                        Operation Center
                                    </h1>
                                </div>
                                <div class="banner-content">
                                    <p class="col-lg-11 pl-0 pr-0">Dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                                <div class="banner-btn">
                                    <a href="about.html" class="contact-btn">Get started</a>
                                    <a href="contact.html" class="contact-btn contact-banner-btn">Contact us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="banner-right-con wow slideInRight">
                                <figure class="mb-0">
                                    <img src="{{asset('frontend/assets/image/banner-right-img.png')}}"
                                         alt="banner-right-img">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <!--banner-end-->
            </div>
        </section>
    </div>
</div>
<!---header-and-banner-section-->
