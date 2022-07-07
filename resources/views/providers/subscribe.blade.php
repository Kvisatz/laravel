
<div class="single-footer-widget">
    <h2 class="widget-title">{{ $widget['name'] }}</h2>
    <div class="widget-body">
        <p class="desc-content m-b-20">{{ $widget['content'] }}</p>
        <!-- Newsletter Form Start -->
        <div class="newsletter-form-wrap p-t-5">
            <form id="mc-form" class="mc-form">
                <input type="email" id="mc-email" class="form-control email-box" placeholder="demo@example.com" name="EMAIL">
                <button id="mc-submit" class="newsletter-btn" type="submit">Send</button>
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
       
