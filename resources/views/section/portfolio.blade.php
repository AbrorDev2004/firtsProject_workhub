
    <!--====== WORK PART START ======-->

    <section id="work" class="work-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">My Recent Works</h2>
                        <p>Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row row justify-content-center">
                @foreach ($portfolios as $portfolio)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-work text-center mt-30">
                            <div class="work-image">
                                <img src="{{ voyager::image($portfolio->image)}}" alt="work">
                            </div>
                            <div class="work-overlay">
                                <div class="work-content">
                                  <h3 class="work-title">Product Design</h3>
                                    <ul>
                                        <li><a class="image-popup" href="{{ voyager::image($portfolio->image)}}"><i class="lni-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- single work -->
                    </div>
                @endforeach

            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="work-more text-center mt-50">
                        <a class="main-btn" href="#">more works</a>
                    </div> <!-- work more -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== WORK PART ENDS ======-->
