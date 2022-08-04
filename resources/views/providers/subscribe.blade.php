<div class="section section-padding bg-name-splashy">
        <div class="container">
            <div class="row align-items-center m-b-n30">

                <div class="col-12 col-md-6 m-b-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                    <div class="newsletter-content">
                        <h3 class="title">{{ $data->name }}</h3>
                        <p>{{ $data->content }}</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 m-b-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1400">
                    <!-- Newsletter Form Start -->
                    <div class="newsletter-form-wrap newsletter-inner">
                        <form id="mc-form" class="mc-form" novalidate="true">
                            <input type="email" id="mc-email" class="form-control email-box" placeholder="demo@example.com" name="EMAIL">
                            <button id="mc-submit" class="newsletter-btn" type="submit">Subscribe</button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                    <!-- Newsletter Form End -->
                </div>

            </div>
        </div>
    </div>