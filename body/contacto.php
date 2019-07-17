      <div id="anchor-Contacts" class="section section-5">
        <div class="container">
          <div class="section-content section-content_white">
            <div class="section-content-wrapper">
              <div class="left">
                <div class="section-title"><?php echo $HeadMenu4; ?></div>
              </div>
            </div>
            <div class="contact-wrapper">
              <div class="map-container">
                <div id="googleMap" class="map"></div>
              </div>
              <div class="contact-info">
                <div class="top">
                  <ul class="contact">
                    <li><a href="tel:+50376710797">WhatsApp: +503 7671 0797</a></li>
                    <li><a href="mailto:info@hibridosv.com">Email: info@hibridosv.com</a></li>
                  </ul>
                  <div class="info-text"> Urb La Mascota Cl 2 No 231 <br/>
                    Col San Benito San Salvador 
                    <br/>El Salvador</div>
                </div>

               
                
                <div class="bottom">
                  <div> <?php echo $Vinculo; ?></div>
                  <div class="info-text"> <?php echo $ContDes; ?></div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>



  <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.3'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="206020093639450"
  theme_color="#20cef5"
  logged_in_greeting="Hola! Como podemos ayudarte?"
  logged_out_greeting="Hola! Como podemos ayudarte?">
</div>