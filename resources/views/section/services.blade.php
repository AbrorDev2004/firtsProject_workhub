
    <!--====== SERVICES PART START ======-->

    <section id="service" class="services-area gray-bg pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-30">
                        <h2 class="title">My Services</h2>
                        <p>Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">

                @foreach ($services as $service )
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-service text-center mt-30">
                            <div class="service-icon">
                                    {!!  $service->icon !!}
                            </div>
                            <div class="service-content">
                                <h4 class="service-title"><a href="#">{{ $service->title }}</a></h4>
                                <p>{{ $service->text }}</p>
                            </div>
                        </div> <!-- single service -->
                    </div>
                @endforeach

            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->


