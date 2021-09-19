
<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sun Aug 22 2021 15:31:32 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6120bbd4ee27ae707850c01e" data-wf-site="611f6b756cf4f62942333224">
<head>
  <meta charset="utf-8">
  <title>Je pakket samenstellen</title>
  <meta content="Je pakket samenstellen" property="og:title">
  <meta content="Je pakket samenstellen" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  
  <link href="{{ asset('frontend_assets/css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('frontend_assets/css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('frontend_assets/css/bazoeki-beste-baasjes.webflow.css') }}" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Dosis:200,300,regular,500,600,700,800","Palanquin:regular,500,600"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="{{ asset('frontend_assets/images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
  <link href="{{ asset('frontend_assets/images/webclip.png') }}" rel="apple-touch-icon">
</head>
<body class="body">
  <div class="holder">
    <div data-collapse="none" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
      <a href="{{ url('/') }}" class="w-nav-brand"><img src="{{ asset('new/images/bazoeki.svg') }}" loading="lazy" alt="" class="image"></a>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
    <div class="wf-section">
      <div class="container form_holder w-container">
        <div class="w-form">
          <form id="email-form" method="POST" action="{{ route('mollie.payment') }}" data-name="Email Form">
            @csrf
            <div data-animation="cross" data-hide-arrows="1" data-duration="500" data-infinite="1" data-w-id="4b317393-8c21-fb8b-1a40-0cb416a94ecb" class="formslider w-slider">
              <div class="mask w-slider-mask">
                <div class="question_slide w-slide">
                  <h3 class="blue">Hoe heet je hond?</h3><input required type="text" class="textfield w-input" maxlength="256" name="name" data-name="Name" placeholder="Typ hier de naam van je hond" id="name">
                </div>
                <div class="question_slide w-slide">
                  <h3 class="blue">Jouw hond is een?</h3>
                  <div class="options_div">
                    <div class="optie">
                      <div class="option_text">Reu</div><label class="meerkeuze_radio w-radio">
                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button w-radio-input"></div><input required type="radio" data-name="Radio 2" id="radio-2" name="gender" value="Reu" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label">Radio</span>
                      </label>
                    </div>
                    <div class="optie">
                      <div class="option_text">Teef</div><label class="meerkeuze_radio w-radio">
                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button w-radio-input"></div><input type="radio" data-name="Radio" id="radio" name="gender" value="Teef" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label">Radio</span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="question_slide w-slide">
                  <h3 class="blue">Wat is het ras van je hond?</h3>
                  
                  <select required id="field" name="race" class="textfield w-select">
                    <option value="">Selecteer ras..</option>
                    <option value="border_collie">Border collie</option>
                    <option value="drever">Drever</option>
                    <option value="boomer">Boomer</option>
                  </select>
                </div>
                <div class="question_slide w-slide">
                  <h3 class="blue">Wat is het gewicht van je hond?</h3>
                  <div class="weightfield"><input type="number" class="textfield weight w-input" maxlength="256" name="weight" data-name="Name 2" placeholder="Gewicht" id="name-2">
                    <div class="kilogram">
                      <div>KG</div>
                    </div>
                  </div>
                </div>
                <div class="question_slide w-slide">
                  <h3 class="blue">Heeft je hond last van vlooien?</h3>
                  <div class="options_div">
                    <div class="optie">
                      <div class="option_text">Ja</div><label class="meerkeuze_radio w-radio">
                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button w-radio-input"></div><input type="radio" data-name="Radio 3" id="radio-3" name="fleas" value="Ja" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label">Radio</span>
                      </label>
                    </div>
                    <div class="optie">
                      <div class="option_text">Nee</div><label class="meerkeuze_radio w-radio">
                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button w-radio-input"></div><input type="radio" data-name="Radio 4" id="radio-4" name="fleas" value="Nee" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label">Radio</span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="question_slide w-slide">
                  <h3 class="blue">Heeft jouw hond last van wormen?</h3>
                  <div class="options_div">
                    <div class="optie">
                      <div class="option_text">Ja</div><label class="meerkeuze_radio w-radio">
                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button w-radio-input"></div><input type="radio" data-name="Radio 5" id="radio-5" name="worms" value="Ja" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label">Radio</span>
                      </label>
                    </div>
                    <div class="optie">
                      <div class="option_text">Nee</div><label class="meerkeuze_radio w-radio">
                        <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button w-radio-input"></div><input type="radio" data-name="Radio 6" id="radio-6" name="worms" value="Nee" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label">Radio</span>
                      </label>
                    </div>
                  </div>
                </div>
                <div data-w-id="b23a1e59-4c52-527e-8c83-298710f53dd7" class="question_slide w-slide">
                  <h3 class="blue">Wanneer was jouw hond geboren?</h3><input type="text" class="textfield date w-input" maxlength="256" name="born" required data-name="Name 3" placeholder="dag-maand-jaar" id="name-3">
                </div>
              </div>
              <div class="vorige cta_button slider_button w-slider-arrow-left">
                <div class="slider_button">Vorige</div>
              </div>
              <a data-w-id="2c3a2c61-f3e6-420c-3c49-d815eca827e2" href="#" class="volgende cta_button sliderbutton finish_doginfo w-inline-block">
                <div class="slider_button">Voltooien</div>
              </a>
              <div class="volgende cta_button sliderbutton w-slider-arrow-right">
                <div class="slider_button">Volgende</div>
              </div>
              <div class="slide-nav w-slider-nav w-round"></div>
            </div>
            <div class="payment_last_questions">
              <h3 class="blue">Voer je betalingsgegevens in</h3><input type="text" class="textfield w-input" maxlength="256" name="name-4" data-name="Name 4" placeholder="Voornaam" id="name-4"><input type="text" class="textfield paymentinfo w-input" maxlength="256" name="name-6" data-name="Name 6" placeholder="Achternaam" id="name-6">
              <div class="twoquestions"><input type="text" class="textfield double payment w-input" maxlength="256" name="name-5" data-name="Name 5" placeholder="Adres" id="name-5"><input type="text" class="textfield double payment w-input" maxlength="256" name="name-5" data-name="Name 5" placeholder="Woonplaats" id="name-5"></div><input type="text" class="textfield paymentinfo w-input" maxlength="256" name="name-5" data-name="Name 5" placeholder="Postcode" id="name-5">
              <input type="submit" value="Naar betaling" data-wait="Please wait..." class="cta_button pay w-button">
            </div>
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
        <div style="opacity:0" class="adviceblock">
          <h3 class="blue">Ons advies voor jouw hond</h3>
          <div class="gewichtencolumns w-row">
            <div class="column grey w-col w-col-3">
              <div class="dog_weight_price kleingewicht">
                  
                <div class="dog_frame"><img src="{{ asset('frontend_assets/images/Chihuahua-Rond-_-2-1-1.png') }}" loading="lazy" width="149" alt="" class="dog _2"></div>
                <div class="dog-size"><strong class="bold-text">Hond - Klein</strong></div>
                <div class="dog-size weight"><strong>2-10kg</strong></div>
                <div class="dog-size">€6,99 p/m*</div>
              </div>
            </div>
            <div class="column w-col w-col-3">
              <div class="dog_weight_price middelgewicht selected">
                <div class="dog_frame"><img src="{{ asset('frontend_assets/images/Middenslag-Schnauzer-1-1.png') }}" loading="lazy" width="149" alt="" class="dog _6"></div>
                <div class="dog-size"><strong class="bold-text adviced">Hond - Middel</strong></div>
                <div class="dog-size weight"><strong>10-20kg</strong></div>
                <div class="dog-size">€7,99 p/m*</div>
              </div>
            </div>
            <div class="column grey w-col w-col-3">
              <div class="dog_weight_price grootgewicht">
                <div class="dog_frame"><img src="{{ asset('frontend_assets/images/Spaanse-Waterhond-fokkers-1.png') }}" loading="lazy" width="149" alt="" class="dog _7"></div>
                <div class="dog-size"><strong class="bold-text">Hond - Groot</strong></div>
                <div class="dog-size weight"><strong>20-40kg</strong></div>
                <div class="dog-size">€8,99 p/m*</div>
              </div>
            </div>
            <div class="column grey w-col w-col-3">
              <div class="dog_weight_price">
                <div class="dog_frame"><img src="{{ asset('frontend_assets/images/duitse-dog-rond-1-1.png') }}" loading="lazy" width="149" alt="" class="dog _8"></div>
                <div class="dog-size"><strong class="bold-text">Hond - Reus</strong></div>
                <div class="dog-size weight"><strong>40+kg</strong></div>
                <div class="dog-size">€9,99 p/m*</div>
              </div>
            </div>
          </div>
          <div class="cta_after_reason">
            <a data-w-id="7b3f441f-18bb-dce0-fa68-3d2e2fa3f8ee" href="#" class="cta_button">Door naar afrekenen</a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_buffer wf-section"></div>
    <div class="footer">
      <div class="circle_div upside_down">
        <div class="circlebreak_up_main_color upside_down moreblue_theme wf-section"></div>
      </div>
      <div class="darker_blue_themed wf-section">
        <div class="container back_in_circle moredist w-container"></div>
        <div class="container w-container"><img src="{{ asset('frontend_assets/images/help_woman_yellow_shirt.png') }}" loading="lazy" width="301" alt="" class="contact_image"></div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=611f6b756cf4f62942333224" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  
  <script src="{{ asset('frontend_assets/js/webflow.js') }}" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>