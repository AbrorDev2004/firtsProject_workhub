    <!--====== CONTACT PART START ======-->
    <section id="contact" class="contact-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">Contact</h2>
                        <p>Leave your message at the bottom to contact us Leave your message at the bottom to contact us</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form pt-30">
                        <form action="/contact" method="POST">
                            @csrf
                            <div class="single-form">
                                <input type="text" name="name" placeholder="Name">
                            </div> <!-- single form -->
                            <div class="single-form">
                                <input type="email" name="email" placeholder="Email">
                            </div> <!-- single form -->
                            <div class="single-form">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div> <!-- single form -->
                            <div class="single-form">
                                <button class="main-btn" type="submit">Send Message</button>
                            </div> <!-- single form -->
                        </form>
                    </div> <!-- contact form -->
                </div>
                <div class="col-lg-6">
                    <div class="contact-map mt-60">
                        <div class="gmap_canvas">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1229.9296559294698!2d72.35988752018234!3d40.74717364658224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bced630e0f4795%3A0xf72460c2369068a8!2sDigital%20City!5e1!3m2!1suz!2s!4v1634742043115!5m2!1suz!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div> <!-- contact map -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== CONTACT PART ENDS ======-->
