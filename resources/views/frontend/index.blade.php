@extends('frontend.master')
@section('content')
    <section id="training">
        <div class="informationmain-con dots-left-img w-100">
            <div class="container overlay-content">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12 informationmain-left-con wow slideInRight">
                        <div class="informationmain-right-heading">
                            <h5>Honoring a Legacy, Protecting the Future</h5>
                            <h2>About Eternal Defenders</h2>
                        </div>
                        <div class="informationmain-right-content">
                            {!!  $aboutUsPage?->body!!}
                        </div>
                        <h4 class="text-white mb-3">Our Core Values</h4>
                        <div class="row wow fadeInUp">

                            @foreach($coreValues as $coreValuesKey => $coreValuesDatum)
                                <div class="col-md-6 col-12">
                                    <div class="Effective-sec-item mb-4" style="background: #040a1f;">
                                        <figure>
                                            <img
                                                    src="{{ asset($coreValuesDatum->icon??'frontend/assets/image/Effective-sec-item-img6.png') }}"
                                                    alt="Effective-sec-item-img" class="img-fluid">
                                        </figure>
                                        <div class="Effective-sec-item-title">
                                            <h4 class="mb-0">{{$coreValuesDatum->title}}
                                            </h4>
                                            <p class="mb-0">{{$coreValuesDatum->subtitle}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 informationmain-right-con">
                        <div class="informationmainright-sec-img wow slideInRight">
                            <div class="Effective-sec-item mb-4" style="background: #040a1f;">
                                <div class="Effective-sec-item-title">
                                    <h4 class="mb-0 pt-0">Our Mission
                                    </h4>
                                    {!! $missionPage?->body !!}
                                </div>
                            </div>

                            <div class="Effective-sec-item mb-lg-0 mb-4" style="background: #040a1f;">
                                <div class="Effective-sec-item-title">
                                    <h4 class="mb-0 pt-0">Our Vision
                                    </h4>
                                    {!! $ourVisionPage->body !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-section -->
    <section class="#service">
        <div class="Effective-con bg-overly-img w-100">
            <div class="container overlay-content">
                <div class="Effective-sec-heading text-center">
                    <h5>Comprehensive Protection for Your Digital Assets</h5>
                    <h2>Our Security Services</h2>
                </div>

                <div id="tsum-tabs" class="wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                    @foreach($serviceCategories as $serviceCategoriesKey=> $serviceCategoriesDatum)
                        @php $serviceCategoriesKey = $serviceCategoriesKey + 1; @endphp
                        <input id="tab{{$serviceCategoriesKey}}" type="radio" name="tabs" checked="">
                        <label for="tab{{$serviceCategoriesKey}}"
                               class="Effective-sec-item mb-lg-0 Effective-sec-item-title Effective-sec-item-img">
                            <img src="{{ asset($serviceCategoriesDatum?->icon) }}"
                                 alt="tab-icon{{$serviceCategoriesKey}}" class="img-fluid">
                            <span class="mb-0 d-block">{{$serviceCategoriesDatum?->title}}</span>
                        </label>

                    @endforeach

                    @foreach($serviceCategories as $serviceCategoriesKey=> $serviceCategoriesDatum)
                        @php $serviceCategoriesKey = $serviceCategoriesKey + 1; @endphp

                        <section id="content{{$serviceCategoriesKey}}">
                            <div class="tabs-content">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-12">
                                        <h3>{{$serviceCategoriesDatum?->title}}</h3>
                                        <h5>{{$serviceCategoriesDatum?->sub_title}}</h5>
                                        <div class="tab-description">
                                            <p>{{$serviceCategoriesDatum?->description}}</p>
                                            <h4 class="text-white my-3">Our Distinct Edge</h4>

                                            @foreach($serviceCategoriesDatum->services as $servicesKey => $servicesDatum)
                                                <div class="py-2 px-3 mb-3"
                                                     style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                                    <div class="row align-items-center">
                                                        <div class="col-1 pr-2">
                                                            <h5 class="m-0"><i class="fas fa-stopwatch fa-2x"></i></h5>
                                                        </div>
                                                        <div class="col-3 pl-2">
                                                            <h5 class="m-0">{{$servicesDatum->title}}</h5>
                                                        </div>
                                                        <div class="col-8">
                                                            <p>{{$servicesDatum->sub_title}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-lg-5 col-md-5 col-12">
                                        <div class="tab-sec-img">
                                            <figure class="mb-0">
                                                <img src="{{ asset($serviceCategoriesDatum->thumbnail_image) }}"
                                                     alt="tabs-sec-img{{$serviceCategoriesKey}}"
                                                     class="img-fluid mt-lg-0 mt-md-0 mt-3">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    @endforeach

                    {{--                    <section id="content2">--}}
                    {{--                        <div class="tabs-content">--}}
                    {{--                            <div class="row">--}}
                    {{--                                <div class="col-lg-7 col-md-7 col-12">--}}
                    {{--                                    <h3>Penetration Testing</h3>--}}
                    {{--                                    <h5>Advanced security testing tailored to your digital ecosystem.</h5>--}}
                    {{--                                    <div class="tab-description">--}}
                    {{--                                        --}}{{-- <p>Our Security Operations Center (SOC) provides continuous monitoring and rapid incident response to keep your digital assets secure.</p> --}}
                    {{--                                        <h4 class="text-white my-3">Our Distinct Edge</h4>--}}
                    {{--                                        <div class="py-2 px-3 mb-3"--}}
                    {{--                                             style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">--}}
                    {{--                                            <div class="row align-items-center">--}}
                    {{--                                                <div class="col-1 pr-2">--}}
                    {{--                                                    <h5 class="m-0"><i class="fas fa-user-shield fa-2x"></i></h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-3 pl-2">--}}
                    {{--                                                    <h5 class="m-0">Unmatched Expertise</h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-8">--}}
                    {{--                                                    <p>Elite cybersecurity professionals on our team.</p>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}

                    {{--                                        <div class="py-2 px-3 mb-3"--}}
                    {{--                                             style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">--}}
                    {{--                                            <div class="row align-items-center">--}}
                    {{--                                                <div class="col-1 pr-2">--}}
                    {{--                                                    <h5 class="m-0"><i class="fas fa-cogs fa-2x"></i></h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-3 pl-2">--}}
                    {{--                                                    <h5 class="m-0">Comprehensive Testing</h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-8">--}}
                    {{--                                                    <p>In-depth manual and automated vulnerability assessments.</p>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="py-2 px-3 mb-3"--}}
                    {{--                                             style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">--}}
                    {{--                                            <div class="row align-items-center">--}}
                    {{--                                                <div class="col-1 pr-2">--}}
                    {{--                                                    <h5 class="m-0"><i class="fas fa-handshake fa-2x"></i></h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-3 pl-2">--}}
                    {{--                                                    <h5 class="m-0">Tailored Solutions</h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-8">--}}
                    {{--                                                    <p>Customized strategies for remediation and risk mitigation.</p>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="py-2 px-3 mb-3"--}}
                    {{--                                             style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">--}}
                    {{--                                            <div class="row align-items-center">--}}
                    {{--                                                <div class="col-1 pr-2">--}}
                    {{--                                                    <h5 class="m-0"><i class="fas fa-file-alt fa-2x"></i></h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-3 pl-2">--}}
                    {{--                                                    <h5 class="m-0">Actionable Reports</h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-8">--}}
                    {{--                                                    <p>Clear insights with step-by-step guidance.</p>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="py-2 px-3 mb-3"--}}
                    {{--                                             style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">--}}
                    {{--                                            <div class="row align-items-center">--}}
                    {{--                                                <div class="col-1 pr-2">--}}
                    {{--                                                    <h5 class="m-0"><i class="fas fa-globe fa-2x"></i></h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-3 pl-2">--}}
                    {{--                                                    <h5 class="m-0">Global Reach</h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-8">--}}
                    {{--                                                    <p>Secure testing across diverse environments.</p>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="col-lg-5 col-md-5 col-12">--}}
                    {{--                                    <div class="tab-sec-img">--}}
                    {{--                                        <figure class="mb-0">--}}
                    {{--                                            <img src="{{asset('frontend/assets/image/tabs-content-img2.png')}}"--}}
                    {{--                                                 alt="tabs-content-img2"--}}
                    {{--                                                 class="img-fluid mt-lg-0 mt-md-0 mt-3">--}}
                    {{--                                        </figure>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </section>--}}
                    {{--                    <section id="content3">--}}
                    {{--                        <div class="tabs-content">--}}
                    {{--                            <div class="row">--}}
                    {{--                                <div class="col-lg-7 col-md-7 col-12">--}}
                    {{--                                    <h3>Vulnerability Management</h3>--}}
                    {{--                                    <h5>Proactively Secure Your Systems with Regular Assessments</h5>--}}
                    {{--                                    <div class="tab-description">--}}
                    {{--                                        <p>Our Vulnerability Management service continuously assesses and prioritizes--}}
                    {{--                                            risks--}}
                    {{--                                            to ensure your systems remain secure.</p>--}}
                    {{--                                        <h4 class="text-white my-3">Our Distinct Edge</h4>--}}
                    {{--                                        <div class="py-2 px-3 mb-3"--}}
                    {{--                                             style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">--}}
                    {{--                                            <div class="row align-items-center">--}}
                    {{--                                                <div class="col-1 pr-2">--}}
                    {{--                                                    <h5 class="m-0"><i class="fas fa-globe fa-2x"></i></h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-3 pl-2">--}}
                    {{--                                                    <h5 class="m-0">Continuous Insight</h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-8">--}}
                    {{--                                                    <p>Real-time monitoring for emerging vulnerabilities.</p>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}

                    {{--                                        <div class="py-2 px-3 mb-3"--}}
                    {{--                                             style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">--}}
                    {{--                                            <div class="row align-items-center">--}}
                    {{--                                                <div class="col-1 pr-2">--}}
                    {{--                                                    <h5 class="m-0"><i class="fas fa-fire-alt fa-2x"></i></h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-3 pl-2">--}}
                    {{--                                                    <h5 class="m-0">Prioritized Action</h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-8">--}}
                    {{--                                                    <p>Immediate focus on high-risk issues with risk-based--}}
                    {{--                                                        prioritization.</p>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="py-2 px-3 mb-3"--}}
                    {{--                                             style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">--}}
                    {{--                                            <div class="row align-items-center">--}}
                    {{--                                                <div class="col-1 pr-2">--}}
                    {{--                                                    <h5 class="m-0"><i class="fas fa-plug fa-2x"></i></h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-3 pl-2">--}}
                    {{--                                                    <h5 class="m-0">Effortless Integration</h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-8">--}}
                    {{--                                                    <p>Seamlessly incorporated into your existing IT systems.</p>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="py-2 px-3 mb-3"--}}
                    {{--                                             style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">--}}
                    {{--                                            <div class="row align-items-center">--}}
                    {{--                                                <div class="col-1 pr-2">--}}
                    {{--                                                    <h5 class="m-0"><i class="fas fa-chart-line fa-2x"></i></h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-3 pl-2">--}}
                    {{--                                                    <h5 class="m-0">Data-Driven Approach</h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-8">--}}
                    {{--                                                    <p>Leveraging analytics to guide remediation strategies.</p>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="col-lg-5 col-md-5 col-12">--}}
                    {{--                                    <div class="tab-sec-img">--}}
                    {{--                                        <figure class="mb-0">--}}
                    {{--                                            <img src="{{ asset('frontend/assets/image/vulnerability-management.png') }}"--}}
                    {{--                                                 alt="tabs-content-img2" class="img-fluid mt-lg-0 mt-md-0 mt-3">--}}
                    {{--                                        </figure>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </section>--}}
                    {{--                    <section id="content4">--}}
                    {{--                        <div class="tabs-content">--}}
                    {{--                            <div class="row">--}}
                    {{--                                <div class="col-lg-7 col-md-7 col-12">--}}
                    {{--                                    <h3>Compliance Audits</h3>--}}
                    {{--                                    <h5>Ensure Your Business Meets Industry Standards and Regulatory Requirements</h5>--}}
                    {{--                                    <div class="tab-description">--}}
                    {{--                                        <p>Our Compliance Audit service helps you navigate complex regulatory--}}
                    {{--                                            requirements--}}
                    {{--                                            and ensure your security controls are aligned with industry standards.</p>--}}
                    {{--                                        <h4 class="text-white my-3">Our Distinct Edge</h4>--}}
                    {{--                                        <div class="py-2 px-3 mb-3"--}}
                    {{--                                             style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">--}}
                    {{--                                            <div class="row align-items-center">--}}
                    {{--                                                <div class="col-1 pr-2">--}}
                    {{--                                                    <h5 class="m-0"><i class="fas fa-user-tie fa-2x"></i></h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-3 pl-2">--}}
                    {{--                                                    <h5 class="m-0">Regulatory Expertise</h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-8">--}}
                    {{--                                                    <p>Deep knowledge across multiple frameworks including GDPR, HIPAA,--}}
                    {{--                                                        PCI--}}
                    {{--                                                        DSS, and more.</p>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}

                    {{--                                        <div class="py-2 px-3 mb-3"--}}
                    {{--                                             style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">--}}
                    {{--                                            <div class="row align-items-center">--}}
                    {{--                                                <div class="col-1 pr-2">--}}
                    {{--                                                    <h5 class="m-0"><i class="fas fa-tachometer-alt fa-2x"></i></h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-3 pl-2">--}}
                    {{--                                                    <h5 class="m-0">Efficient Assessments</h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-8">--}}
                    {{--                                                    <p>Streamlined audits that minimize disruption.</p>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="py-2 px-3 mb-3"--}}
                    {{--                                             style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">--}}
                    {{--                                            <div class="row align-items-center">--}}
                    {{--                                                <div class="col-1 pr-2">--}}
                    {{--                                                    <h5 class="m-0"><i class="fas fa-cubes fa-2x"></i></h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-3 pl-2">--}}
                    {{--                                                    <h5 class="m-0">Integrated Solutions</h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-8">--}}
                    {{--                                                    <p>Holistic strategies to enhance your overall security posture.</p>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="py-2 px-3 mb-3"--}}
                    {{--                                             style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">--}}
                    {{--                                            <div class="row align-items-center">--}}
                    {{--                                                <div class="col-1 pr-2">--}}
                    {{--                                                    <h5 class="m-0"><i class="fas fa-award fa-2x"></i></h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-3 pl-2">--}}
                    {{--                                                    <h5 class="m-0">Proven Methodologies</h5>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-8">--}}
                    {{--                                                    <p>Utilizing best practices to deliver reliable, actionable--}}
                    {{--                                                        insights.</p>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="col-lg-5 col-md-5 col-12">--}}
                    {{--                                    <div class="tab-sec-img">--}}
                    {{--                                        <figure class="mb-0">--}}
                    {{--                                            <img src="{{ asset('frontend/assets/image/compliance-audits.png') }}"--}}
                    {{--                                                 alt="tabs-content-img2" class="img-fluid mt-lg-0 mt-md-0 mt-3">--}}
                    {{--                                        </figure>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </section>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- service-section -->
    <div class="service-main-con">
        <div class="row  ml-0 mr-0">
            <div class="col-lg-7 pl-0 pr-0">
                <div class="service-main-left-top-con dots-right-img">
                    <div class="row">
                        <div class="col-xl-8 col-lg-12 ml-auto">
                            <div class="service-main-left-con wow slideInLeft">
                                <div class="informationmain-right-heading">
                                    <h2>Enter the Cyber Lab</h2>
                                    <h5>Where simulation meets reality – immerse yourself in our corporate world.</h5>
                                </div>

                                <div class="card mb-3" style="max-width: 540px; background:#040a1f;">
                                    <div class="row g-0">
                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <h5 class="card-title">Simulated Structure</h5>
                                                <p class="card-text">Rotate through key departments—SOC, Incident
                                                    Response,
                                                    and Compliance—and adopt authentic corporate titles like Junior
                                                    Security
                                                    Analyst and IT Support.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3" style="max-width: 540px; background:#040a1f;">
                                    <div class="row g-0">
                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <h5 class="card-title">Modern Collaboration</h5>
                                                <p class="card-text">Communicate using Slack or Microsoft Teams and
                                                    manage
                                                    projects with Jira or Trello—just as in a real enterprise.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3" style="max-width: 540px; background:#040a1f;">
                                    <div class="row g-0">
                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <h5 class="card-title">Real-World Workflows</h5>
                                                <p class="card-text">Simulate phishing attacks, vulnerability scans, and
                                                    compliance audits using mock data to avoid real-world risks.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pl-0 pr-0">
                <div class="service-main-right-con"></div>
            </div>
        </div>
    </div>

    <section id="training">
        <div class="informationmain-con dots-left-img w-100">
            <div class="container overlay-content">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 informationmain-left-con">
                        <div class="informationmainleft-sec-img wow slideInLeft">
                            <figure class="mb-0">
                                <img src="{{ asset('frontend/assets/image/informationmain-left-sec-img.png') }}"
                                     alt="informationmain-left-sec-img">
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 informationmain-right-con wow slideInRight">
                        <div class="informationmain-right-content">
                            <p>Step into a simulated corporate environment designed to give you hands-on experience with
                                real-world security tools and live projects.</p>
                            <h4 class="text-white mb-3">How It Works</h4>
                            <div class="row g-0 align-items-center mb-3">
                                <div class="col-auto">
                                    <div class="contact-btn"
                                         style="padding: 0; border-radius: 100%; width: 50px; height: 50px; line-height: 50px; text-align:center;">
                                        <i class="fas fa-user-plus" style="line-height: 50px;"></i></div>
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body p-0">
                                        <div class="card-title" style="font-size: 20px; color: #fff; margin-bottom:0;">
                                            Apply
                                        </div>
                                        <p class="card-text">Select your desired role and submit your application.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center mb-3">
                                <div class="col-auto">
                                    <div class="contact-btn"
                                         style="padding: 0; border-radius: 100%; width: 50px; height: 50px; line-height: 50px; text-align:center;">
                                        <i class="fas fa-suitcase" style="line-height: 50px;"></i></div>
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body p-0">
                                        <div class="card-title" style="font-size: 20px; color: #fff; margin-bottom:0;">
                                            Get
                                            Started
                                        </div>
                                        <p class="card-text">Join our simulated environment after a streamlined
                                            selection
                                            process.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center mb-3">
                                <div class="col-auto">
                                    <div class="contact-btn"
                                         style="padding: 0; border-radius: 100%; width: 50px; height: 50px; line-height: 50px; text-align:center;">
                                        <i class="fab fa-readme" style="line-height: 50px;"></i></div>
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body p-0">
                                        <div class="card-title" style="font-size: 20px; color: #fff; margin-bottom:0;">
                                            Learn
                                            & Grow
                                        </div>
                                        <p class="card-text">Engage in a structured curriculum and live projects to
                                            build
                                            practical skills.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center">
                                <div class="col-auto">
                                    <div class="contact-btn"
                                         style="padding: 0; border-radius: 100%; width: 50px; height: 50px; line-height: 50px; text-align:center;">
                                        <i class="fas fa-award" style="line-height: 50px;"></i></div>
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body p-0">
                                        <div class="card-title" style="font-size: 20px; color: #fff; margin-bottom:0;">
                                            Master Your Role
                                        </div>
                                        <p class="card-text">Build a standout career portfolio with real-world
                                            experience.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="Effective-link ml-auto mr-auto">
                                <a href="#contactpage" class="contact-btn">Start Your Journey</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="career" class="career">
        <div class="blog-post-con Pricing-con dots-right-img">
            <div class="container overlay-content">
                <div class="blog-post-heading text-center">
                    <h5>Train for market-driven roles in cybersecurity through our immersive, simulated career
                        tracks.</h5>
                    <h2>Simulated Career Tracks</h2>
                </div>
                <div class="row">
                    @foreach($vacancies as $vacanciesKey => $vacanciesDatum)
                        <div class="col-md-4">
                            <div class="p-4" style="background: #040a1f;">
                                <h4 class="mb-3">{{$vacanciesDatum->title}}</h4>
                                <p>{{$vacanciesDatum->sub_title}}
                                    <span class="dots">...</span></p>
                                <div class="more" style="display: none;">
                                    <h5>Responsibilities</h5>
                                    <ul style="color: #f4f4f4; margin-left: 20px;">
                                        <li>Monitor SIEM dashboards and review logs from firewalls and IDS/IPS.</li>
                                        <li>Perform initial incident triage and escalate critical alerts.</li>
                                        <li>Document incidents and assist with post-incident reviews.</li>
                                    </ul>
                                    <h5>Qualifications</h5>
                                    <ul style="color: #f4f4f4; margin-left: 20px;">
                                        <li>Bachelor’s degree in Computer Science, IT, or equivalent.</li>
                                        <li>Basic understanding of networking protocols and OS fundamentals.</li>
                                    </ul>
                                    <h5>Requirements & Tools</h5>
                                    <ul style="color: #f4f4f4; margin-left: 20px;">
                                        <li>Familiarity with SIEM tools and log analysis techniques.</li>
                                        <li>Basic scripting skills (Python, Shell, PowerShell).</li>
                                        <li>Exposure to Slack, Microsoft Teams, Jira, and Trello.</li>
                                        <li>Cloud fundamentals are a plus.</li>
                                    </ul>
                                </div>
                                <a class="blog-post-item-title-link readBtn" href="javascript:void(0)"
                                   onclick="readMore(this)">Read more <i class="fas fa-chevron-right"></i></a>
                                <div class="get-start-link mt-3">
                                    <a href="#contactpage" class="btn btn-outline-success btn-sm">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- blog-post-section -->
    <section>
        <div class="blog-post-con dots-right-img">
            <div class="container overlay-content">
                <div class="blog-post-heading text-center">
                    <h5>Latest Blog Posts</h5>
                    <h2>Insights & Updates from Our Security Experts</h2>
                </div>
                <div class="row">
                    @foreach($blogs as $blogsKey =>$blogsDatum)
                        @php
                            if ($blogsKey % 2 == 0) {
                                $slideLeftRight = 'mb-lg-0 mb-md-0 mb-4 wow slideInLeft';
                            } else {
                                $slideLeftRight = 'wow slideInRight';
                            }
                        @endphp

                        <div class="col-lg-6 col-md-6 col-12 {{$slideLeftRight}} ">
                            <div class="blog-post-item">
                                <div class="blog-post-item-img">
                                    <a href="single-post.html">
                                        <figure class="mb-0">
                                            <img
                                                    src="{{$blogsDatum->image??asset('frontend/assets/image/blog-post-img1.png')}}"
                                                    alt="blog-post-img" class="img-fluid"
                                                    style="object-fit: cover; height:540px;">
                                        </figure>
                                    </a>
                                </div>
                                <div class="blog-post-item-title">
                                    {{--                                <a href="single-post.html">--}}
                                    {{--                                    <h6>Trend In Design</h6>--}}
                                    {{--                                </a>--}}
                                    <a href="single-post.html">
                                        <h4 class="mb-3">{{$blogsDatum->title}}
                                        </h4>
                                    </a>
                                    <a href="single-post.html" class="blog-post-item-title-link">Read more <i
                                                class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- blog-post-section -->
    <!-- get-start-section-->
    <section>
        <div class="get-start-con bg-overly-img ">
            <div class="container overlay-content">
                <div class="get-start-title text-center">
                    <h1>Ready To Get Started?
                        We're Here To Help.
                    </h1>
                    <p>Whether you're looking to enhance your organization's security posture or launch a career in
                        cybersecurity, Eternal Defenders has the expertise and resources to support your journey.</p>
                    <div class="get-start-link text-center">
                        <a href="#contactpage" class="contact-btn">Contact Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- get-start-section-->
    <!--form-section-->
    <section>
        <div class="form-main-con dots-left-img" id="contact">
            <div class="container overlay-content">
                <div class="form-title-con text-center wow slideInLeft">
                    <h5>Get in touch</h5>
                    <h2>Send us a Message</h2>
                </div>
                <form class="form-inner-con wow slideInLeft" action="{{route('saveContact')}}" id="contactpage"
                      method="POST">
                    @csrf
                    <div class="row">
                        <div class=" col-6">
                            <input type="text" placeholder="First Name" name="first_name" id="first_name"
                                   value="{{ old('first_name') }}">
                            @if ($errors->has('first_name'))
                                <div class="text-danger">{{ $errors->first('first_name') }}</div>
                            @endif
                        </div>
                        <div class="col-6">
                            <input type="text" placeholder="Last Name" name="last_name" id="last_name"
                                   value="{{ old('last_name') }}">
                            @if ($errors->has('last_name'))
                                <div class="text-danger">{{ $errors->first('last_name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <input type="email" placeholder="Email" name="email" id="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <div class="text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="col-6">
                            <input type="tel" placeholder="Mobile Number" name="mobile_number" id="mobile_number"
                                   value="{{ old('mobile_number') }}">
                            @if ($errors->has('mobile_number'))
                                <div class="text-danger">{{ $errors->first('mobile_number') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                                <textarea class="w-100" placeholder="Message" rows="3" name="message"
                                          id="message">{{ old('message') }}</textarea>
                            @if ($errors->has('message'))
                                <div class="text-danger">{{ $errors->first('message') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <button type="submit" id="submit" class="contact-btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--form-section-->
@endsection
