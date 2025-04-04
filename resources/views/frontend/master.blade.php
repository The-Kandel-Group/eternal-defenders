<!DOCTYPE html>
<html lang="zxx">
@include('frontend.partials.header')
<body>

@include('frontend.partials.navbar')

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
                        <p>Eternal Defenders is more than just a cybersecurity company; it is a tribute to the brave
                            souls who lost their lives in wars, their identities unknown but their sacrifices eternal.
                            Their unwavering commitment to protection inspires our mission: to safeguard businesses,
                            individuals, and institutions from the unseen battles of the digital world. <br> <br> Just
                            as these unknown warriors defended their nations, we stand as the defenders of the cyber
                            realm, shielding enterprises from the ever-evolving threats of cybercrime.</p>
                    </div>
                    <h4 class="text-white mb-3">Our Core Values</h4>
                    <div class="row wow fadeInUp">
                        <div class="col-md-6 col-12">
                            <div class="Effective-sec-item mb-4" style="background: #040a1f;">
                                <figure>
                                    <img src="{{ asset('frontend/assets/image/Effective-sec-item-img6.png') }}"
                                         alt="Effective-sec-item-img" class="img-fluid">
                                </figure>
                                <div class="Effective-sec-item-title">
                                    <h4 class="mb-0">Excellence in Protection
                                    </h4>
                                    <p class="mb-0">Committed to the highest standard of security with continuous
                                        improvement.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="Effective-sec-item mb-lg-0 mb-4" style="background: #040a1f;">
                                <figure>
                                    <img src="{{ asset('frontend/assets/image/Effective-sec-item-img7.png') }}"
                                         alt="Effective-sec-item-img" class="img-fluid">
                                </figure>
                                <div class="Effective-sec-item-title">
                                    <h4 class="mb-0">Practical Innovation
                                    </h4>
                                    <p class="mb-0">Innovative approaches to solve real-world security challenges.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="Effective-sec-item Effective-sec-item3" style="background: #040a1f;">
                                <figure>
                                    <img src="{{ asset('frontend/assets/image/Effective-sec-item-img8.png') }}"
                                         alt="Effective-sec-item-img" class="img-fluid">
                                </figure>
                                <div class="Effective-sec-item-title">
                                    <h4 class="mb-0">Knowledge Empowerment</h4>
                                    <p class="mb-0">Transforming security awareness into actionable strategies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="Effective-sec-item" style="background: #040a1f;">
                                <figure>
                                    <img src="{{ asset('frontend/assets/image/Effective-sec-item-img5.png') }}"
                                         alt="Effective-sec-item-img" class="img-fluid">
                                </figure>
                                <div class="Effective-sec-item-title">
                                    <h4 class="mb-0">Integrity & Trust</h4>
                                    <p class="mb-0">Earning trust through transparency and ethical practices.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 informationmain-right-con">
                    <div class="informationmainright-sec-img wow slideInRight">
                        <div class="Effective-sec-item mb-4" style="background: #040a1f;">
                            <div class="Effective-sec-item-title">
                                <h4 class="mb-0 pt-0">Our Mission
                                </h4>
                                <p class="mb-0">At Eternal Defenders, our mission is to safeguard the digital landscape
                                    through innovative cybersecurity solutions and immersive training programs. We
                                    protect our clients' critical assets with proactive security expertise and resilient
                                    infrastructure. <br><br> Through hands-on training and comprehensive managed
                                    services, we empower organizations and individuals to counter evolving threats and
                                    build lasting cybersecurity careers.</p>
                            </div>
                        </div>

                        <div class="Effective-sec-item mb-lg-0 mb-4" style="background: #040a1f;">
                            <div class="Effective-sec-item-title">
                                <h4 class="mb-0 pt-0">Our Vision
                                </h4>
                                <p class="mb-0">We aspire to be the trusted guardian of digital ecosystems worldwide,
                                    where innovation and security merge to create a safer future. Our vision is to
                                    redefine cybersecurity education by bridging theory with practical
                                    experience.<br><br> Continuously evolving our training and services, we ensure our
                                    clients can confidently pursue digital initiatives without fear.</p>
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
                <input id="tab1" type="radio" name="tabs" checked="">
                <label for="tab1" class="Effective-sec-item mb-lg-0 Effective-sec-item-title Effective-sec-item-img">
                    <img src="{{ asset('frontend/assets/image/tab-icon1.png') }}" alt="tab-icon1" class="img-fluid">
                    <span class="mb-0 d-block">24/7 SOC Monitoring</span>
                </label>
                <input id="tab2" type="radio" name="tabs">
                <label for="tab2" class="Effective-sec-item mb-lg-0 Effective-sec-item-title Effective-sec-item-img">
                    <img src="{{ asset('frontend/assets/image/tab-icon2.png') }}" alt="tab-icon2" class="img-fluid">
                    <span class="mb-0 d-block">Penetration Testing</span>
                </label>
                <input id="tab3" type="radio" name="tabs">
                <label for="tab3" class="Effective-sec-item mb-0 Effective-sec-item-title Effective-sec-item-img">
                    <img src="{{ asset('frontend/assets/image/tab-icon3.png') }}" alt="tab-icon3" class="img-fluid">
                    <span class="mb-0 d-block">Vulnerability Management</span>
                </label>
                <input id="tab4" type="radio" name="tabs">
                <label for="tab4" class="Effective-sec-item mb-0 Effective-sec-item-title Effective-sec-item-img">
                    <img src="{{ asset('frontend/assets/image/tab-icon4.png') }}" alt="tab-icon4" class="img-fluid">
                    <span class="mb-0 d-block">Compliance Audits</span>
                </label>
                <section id="content1">
                    <div class="tabs-content">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-12">
                                <h3>24/7 SOC Monitoring</h3>
                                <h5>Comprehensive Threat Detection and Response</h5>
                                <div class="tab-description">
                                    <p>Our Security Operations Center (SOC) provides continuous monitoring and rapid
                                        incident response to keep your digital assets secure.</p>
                                    <h4 class="text-white my-3">Our Distinct Edge</h4>
                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-stopwatch fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Unmatched Vigilance</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>Continuous, proactive monitoring with advanced AI analytics.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-user-shield fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Skilled Expertise</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>Our team of certified analysts brings deep industry knowledge.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-rocket fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Rapid Response</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>Swift and efficient incident response to neutralize threats.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-chart-pie fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Actionable Intelligence</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>Transparent reporting with insights that drive effective
                                                    decisions.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-award fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Proven Track Record</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>Trusted by industry leaders with demonstrable success.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-lg-5 col-md-5 col-12">
                                <div class="tab-sec-img">
                                    <figure class="mb-0">
                                        <img src="{{ asset('frontend/assets/image/soc-monitoring.png') }}"
                                             alt="tabs-sec-img1" class="img-fluid mt-lg-0 mt-md-0 mt-3">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="content2">
                    <div class="tabs-content">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-12">
                                <h3>Penetration Testing</h3>
                                <h5>Advanced security testing tailored to your digital ecosystem.</h5>
                                <div class="tab-description">
                                    {{-- <p>Our Security Operations Center (SOC) provides continuous monitoring and rapid incident response to keep your digital assets secure.</p> --}}
                                    <h4 class="text-white my-3">Our Distinct Edge</h4>
                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-user-shield fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Unmatched Expertise</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>Elite cybersecurity professionals on our team.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-cogs fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Comprehensive Testing</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>In-depth manual and automated vulnerability assessments.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-handshake fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Tailored Solutions</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>Customized strategies for remediation and risk mitigation.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-file-alt fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Actionable Reports</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>Clear insights with step-by-step guidance.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-globe fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Global Reach</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>Secure testing across diverse environments.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="tab-sec-img">
                                    <figure class="mb-0">
                                        <img src="{{asset('frontend/assets/image/tabs-content-img2.png')}}" alt="tabs-content-img2"
                                             class="img-fluid mt-lg-0 mt-md-0 mt-3">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="content3">
                    <div class="tabs-content">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-12">
                                <h3>Vulnerability Management</h3>
                                <h5>Proactively Secure Your Systems with Regular Assessments</h5>
                                <div class="tab-description">
                                    <p>Our Vulnerability Management service continuously assesses and prioritizes risks
                                        to ensure your systems remain secure.</p>
                                    <h4 class="text-white my-3">Our Distinct Edge</h4>
                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-globe fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Continuous Insight</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>Real-time monitoring for emerging vulnerabilities.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-fire-alt fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Prioritized Action</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>Immediate focus on high-risk issues with risk-based
                                                    prioritization.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-plug fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Effortless Integration</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>Seamlessly incorporated into your existing IT systems.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-chart-line fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Data-Driven Approach</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>Leveraging analytics to guide remediation strategies.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="tab-sec-img">
                                    <figure class="mb-0">
                                        <img src="{{ asset('frontend/assets/image/vulnerability-management.png') }}"
                                             alt="tabs-content-img2" class="img-fluid mt-lg-0 mt-md-0 mt-3">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="content4">
                    <div class="tabs-content">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-12">
                                <h3>Compliance Audits</h3>
                                <h5>Ensure Your Business Meets Industry Standards and Regulatory Requirements</h5>
                                <div class="tab-description">
                                    <p>Our Compliance Audit service helps you navigate complex regulatory requirements
                                        and ensure your security controls are aligned with industry standards.</p>
                                    <h4 class="text-white my-3">Our Distinct Edge</h4>
                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-user-tie fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Regulatory Expertise</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>Deep knowledge across multiple frameworks including GDPR, HIPAA, PCI
                                                    DSS, and more.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-tachometer-alt fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Efficient Assessments</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>Streamlined audits that minimize disruption.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-cubes fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Integrated Solutions</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>Holistic strategies to enhance your overall security posture.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-3 mb-3"
                                         style="background: rgba(255, 255, 255, 0.1); border-radius: 10px;">
                                        <div class="row align-items-center">
                                            <div class="col-1 pr-2">
                                                <h5 class="m-0"><i class="fas fa-award fa-2x"></i></h5>
                                            </div>
                                            <div class="col-3 pl-2">
                                                <h5 class="m-0">Proven Methodologies</h5>
                                            </div>
                                            <div class="col-8">
                                                <p>Utilizing best practices to deliver reliable, actionable
                                                    insights.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="tab-sec-img">
                                    <figure class="mb-0">
                                        <img src="{{ asset('frontend/assets/image/compliance-audits.png') }}"
                                             alt="tabs-content-img2" class="img-fluid mt-lg-0 mt-md-0 mt-3">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
                                            <p class="card-text">Rotate through key departments—SOC, Incident Response,
                                                and Compliance—and adopt authentic corporate titles like Junior Security
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
                                            <p class="card-text">Communicate using Slack or Microsoft Teams and manage
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
                                    <div class="card-title" style="font-size: 20px; color: #fff; margin-bottom:0;">Get
                                        Started
                                    </div>
                                    <p class="card-text">Join our simulated environment after a streamlined selection
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
                                    <div class="card-title" style="font-size: 20px; color: #fff; margin-bottom:0;">Learn
                                        & Grow
                                    </div>
                                    <p class="card-text">Engage in a structured curriculum and live projects to build
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
                            <a href="about.html" class="contact-btn">Start Your Journey</a>
                        </div>
                    </div>
                </div>
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
                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0  mb-4 wow slideInLeft">
                    <div class="blog-post-item">
                        <div class="blog-post-item-img">
                            <a href="single-post.html">
                                <figure class="mb-0">
                                    <img src="{{asset('frontend/assets/image/blog-post-img1.png')}}" alt="blog-post-img" class="img-fluid">
                                </figure>
                            </a>
                        </div>
                        <div class="blog-post-item-title">
                            <a href="single-post.html">
                                <h6>Trend In Design</h6>
                            </a>
                            <a href="single-post.html">
                                <h4 class="mb-3">Protect Your Workplace From
                                    Cyber Attacks
                                </h4>
                            </a>
                            <a href="single-post.html" class="blog-post-item-title-link">Read more <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 wow slideInRight">
                    <div class="blog-post-item">
                        <div class="blog-post-item-img">
                            <a href="single-post.html">
                                <figure class="mb-0">
                                    <img src="{{asset('frontend/assets/image/blog-post-img2.png')}}" alt="blog-post-img" class="img-fluid">
                                </figure>
                            </a>
                        </div>
                        <div class="blog-post-item-title">
                            <a href="single-post.html">
                                <h6>Management</h6>
                            </a>
                            <a href="single-post.html">
                                <h4 class="mb-3">Security In A Fragment World Of
                                    Workload For Your Business
                                </h4>
                            </a>
                            <a href="single-post.html" class="blog-post-item-title-link">Read more <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
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
                    <a href="#contact" class="contact-btn">Contact Us Today</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- get-start-section-->
<!--form-section-->
<section>
    <div class="form-main-con dots-left-img">
        <div class="container overlay-content">
            <div class="form-title-con text-center wow slideInLeft">
                <h5>Get in touch</h5>
                <h2>Send us a Message</h2>
            </div>
            <form class="form-inner-con wow slideInLeft" id="contactpage" method="POST">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <input type="text" placeholder="Name" name="name" id="name">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <input type="email" placeholder="Email" name="email" id="email">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <input type="tel" placeholder="Phone" name="phone" id="phone">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <textarea class="w-100" placeholder="Message" rows="3" name="comments" id="comments"></textarea>
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
@include('frontend.partials.footer')
</body>
</html>
