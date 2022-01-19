 <!--====== ABOUT PART START ======-->
 <section id="about" class="about-area pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="title">{{ $about[0]['title_1'] }}</h2>
                    <p>{{ $about[0]['description_1'] }}</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="about-content mt-50">
                    <h5 class="about-title">{{ $about[0]['title_2'] }}</h5>
                    <p>{{ $about[0]['description_2'] }}</p>
                    <ul class="clearfix">
                        <li>
                            <div class="single-info d-flex align-items-center">
                                <div class="info-icon">
                                    <i class="lni-calendar"></i>
                                </div>
                                <div class="info-text">
                                    <p><span>Date of birth:</span>{{ $about[0]['dateOfBirth'] }}</p>
                                </div>
                            </div> <!-- single info -->
                        </li>
                        <li>
                            <div class="single-info d-flex align-items-center">
                                <div class="info-icon">
                                    <i class="lni-envelope"></i>
                                </div>
                                <div class="info-text">
                                    <p><span>Email:</span> {{ $about[0]['eamil'] }}</p>
                                </div>
                            </div> <!-- single info -->
                        </li>
                        <li>
                            <div class="single-info d-flex align-items-center">
                                <div class="info-icon">
                                    <i class="lni-phone-handset"></i>
                                </div>
                                <div class="info-text">
                                    <p><span>Phone:</span> {{ $about[0]['phone'] }}</p>
                                </div>
                            </div> <!-- single info -->
                        </li>
                        <li>
                            <div class="single-info d-flex align-items-center">
                                <div class="info-icon">
                                    <i class="lni-map-marker"></i>
                                </div>
                                <div class="info-text">
                                    <p><span>Location:</span> {{ $about[0]['location'] }}</p>
                                </div>
                            </div> <!-- single info -->
                        </li>
                    </ul>
                </div> <!-- about content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->
