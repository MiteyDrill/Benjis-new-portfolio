<?php
include("./main_header.php"); 
/*body*/
?>

  <nav id='navigation'>
    <div id='nav-info'>
      <p>Benji's Web Design</p>
      <p id='menu'>Menu</p>
      <p>509 /- 316 -/ 1243</p>
    </div>

    <div id = "burger-icon"></div>
    <div id = 'burger-reveal'>
      <ul id='nav-li'>
        <li id='nav-home'>Home</li>
        <li class='line'>|</li>
        <li id='nav-portfolio'>Projects</li>
        <li class='line'>|</li>
        <li id='nav-contact'>Contact Us</li>
      </ul>
    </div>
  </nav>

  <header id='header'>

    <!-- <h1><span>Benji's</span></h1>
    <img style="width: 25%;"src='./images/logo-svg.svg' alt='our_logo'/> -->

    <!--LOGO-->
    <?php
    echo "
    <?xml version=\"1.0\" encoding=\"utf-8\"?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  ;)-->
    <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
      viewBox=\"370 -31.2 1440 990.7\" style=\"enable-background:new 370 -31.2 1440 990.7;\" xml:space=\"preserve\">

      <g id=\"XMLID_14_\">
        <path id=\"XMLID_15_\" class=\"st0\" d=\"M1567.2,414.9L1286,760.1h-226.8L1340.4,415L1059.1,69.8H1286L1567.2,414.9z M1534.4,414.9
          l-258-316.6h-161.3l259.2,316.6l-259.2,316.6h161.2L1534.4,414.9z\"/>
      </g>
      <g id=\"XMLID_3_\">
        <path id=\"XMLID_8_\" class=\"st0\" d=\"M1100,839.8H873.2L591.9,494.7l281.3-345.1H1100L818.7,494.7L1100,839.8z M1044,811.3L786,494.7
          l258-316.6H884.4L624,495.7l258.8,315.6H1044z\"/>
      </g>
      <g id=\"XMLID_6_\">
        <path id=\"XMLID_25_\" class=\"st0\" d=\"M1144.7,426.1c17.8,17.8,26.6,47.1,26.6,88.1s-8.9,70.5-26.6,88.5c-12,12-29.1,18.1-51.2,18.1
          c-9.5,0-33.9-1-41-3v-20.2c6.6,2.6,30,3.9,38,3.9c23.2,0,39.4-9.2,48.6-27.5c6.9-13.5,10.3-33.4,10.3-59.7
          c0-26.4-3.4-46.3-10.3-59.7c-9.2-18.1-25.4-27.1-48.6-27.1c-22.9,0-39,9-48.1,27.1c-6.9,13.5-10.3,33.4-10.3,59.7v104h-21.9V311.4
          h21.9v125.9c14.9-19.8,35.4-29.7,61.5-29.7C1115.6,407.6,1132.7,413.8,1144.7,426.1z\"/>
      </g>
    </svg>
    "
    
    ?>



    <!--LOGO-->

  </header>

  <section id='faq'>
    <div  data-sal="slide-up"
          data-sal-delay="300"
          data-sal-easing="ease-out-bounce"
          
          id='faq1' class='faq-panel'>
    <h1>Need a website?</h1>
    <h3>We’re here for you</h3>
    <p>Building a webpage or website for your business can be quite daunting, so we here at Benjis help you with the  process.</p>
    </div>

    <div id='faq2' class='faq-panel'>
    <h1>Does an online site help my business?</h1>
    <h3>Absolutely!</h3>
    <p>Just one single example, a webpage can be a live form of advertisement. A webpage will attract online and offline. You can inform and satisfy potential customers before they’ve even walked through the door!</p>
    </div>

    <div id='faq3' class='faq-panel'>
    <h1>What should I pay for a website…?</h1>
    <h3>What are your needs?</h3>
    <p>Money can be tight, we understand. Our prices are well streamlined and designed for you and you alone, call us, lets talk.</p>
    </div>
  </section>

  <section id="offer-container">
      <h2>What we provide</h2>
      <div  id='offer-info-wrapper'>
        <div class='icon-info'>
          <img src= './images/calendar.png' alt='icon'/>
          <p>Around the clock scheduling to provide service as quickly as possible</p> <!-- Fill these later -->
        </div>

        <div class='icon-info'>
          <img src= './images/design.png' alt='icon'/>
          <p>UX/UI design built to emphasize your brand and business</p>
        </div>

        <div class='icon-info'>
          <img src='./images/code.png' alt='icon'/>
          <p>Fast and responsive websites that will impress on desktop, tablet, and mobile</p>
        </div>
      </div>
    </section>

  <div id='portfolio-wrapper'>

    <section id='port-images'>

      <!-- first image panel -->
      <div id='img1' class='port-div-img'>
        <div id='img1-info' class='info-panel'>
          <h4>TURF Lifestyle</h4>
          <p class='subtext'>Squarespace</p>
          <p class='maintext'>
            TURF Lifestyle was built by my sister Ariel, she is an entrepreneur, fitness coach, and web designer! Together we manage the design and
          look of the website. Our goal is to make it simple to navigate and enjoyable to view
          </p>
          <a type="button" href="http://turflifestyle.com" value="turflifestyle" target="_blank" class="button">Visit Site</a>
        </div>
      </div>

      <div id='img2' class='port-div-img'>

        <div id='img2-info' class='info-panel'>
          <div id='img2-info' class='info-panel'>
            <h4>BitmapWarriors</h4>
            <p class='subtext'>Wordpress</p>
            <p class='maintext'>
              BitmapWarriors was originally set up and built by my brother David.
              He is a graphic designer, web consultant, and web designer
          </p>
            <a type="button" href="http://BitmapWarriors.com" value="BitmapWarriors" target="_blank" class="button">Visit Site</a>
          </div>
        </div>

      </div>

      <div id='img3' class='port-div-img'>

        <div id='img3-info' class='info-panel'>
          <div id='img3-info' class='info-panel'>
            <h4>Kids-Motto</h4>
            <p class='subtext'>Wordpress</p>
            <p class='maintext'>
              An Ecommerce like website we built. It features a lot of great deals, go check it out!
            </p>
            <a type="button" href="http://kids-motto.com" value="kids-motto" target="_blank" class="button">Visit Site</a>
          </div>
        </div>

      </div>


      <!-- <div id='img3' class='port-div-img'>

        <div id='img3-info' class='info-panel'>
          <div id='img3-info' class='info-panel'>
            <h4>Ben-Dev V.2</h4>
            <p class='subtext'>Custom</p>
            <p class='maintext'>
              This happens to be the second portfolio site I ever built.
              Its not the best but it is pretty simple
            </p>
            <a type="button" href="http://ben-dev.bitmapwarriors.com" value="Ben-Dev-V2" target="_blank" class="button">Visit Site</a>
          </div>
        </div>

      </div> -->

      <!-- <div id='img4' class='port-div-img'>

        <div id='img4-info' class='info-panel'>
          <div id='img4-info' class='info-panel'>
            <h4>BenDev V.1</h4>
            <p class='subtext'>Custom</p>
            <p class='maintext'>
              My first portfolio (Mobile View Only) - its not very good...
            </p>
            <button class='more-btn'>Visit Site</button>
          </div>
        </div>

      </div> -->


      <div id='img5' class='port-div-img'>

        <div id='img5-info' class='info-panel'>
          <div id='img5-info' class='info-panel'>
            <h4>Benji's WebDev</h4>
            <p class='subtext'>Custom</p>
            <p class='maintext'> My third portfolio - this website. My goal was to build a website
              for my brother's graphic design business, but on the second day of development I changed
              it to my own portfolio site
            </p>
            <a type="button" href="#" value="benjis-web" class="button">Visit Site</a>
          </div>
        </div>

      </div>


      <!-- <div id='img6' class='port-div-img'>

          <div id='img6-info' class='info-panel'>
            <h4>Your Website!</h4>
            <p class='subtext'>Wordpress / Custom</p>
            <p class='maintext'>
              Your website could be my next project! Contact me below so we can get started
            </p>
            <button>Visit Site</button>
          </div>

      </div> -->

    </section>

  </div>

  <div id='contact'>

    <div id = 'form'>

    <form action="./scripts/email_form_handler.php" method="post">
      <div>
        <input type="text" name='firstname' placeholder="Firstname"><br>
      </div>
      <br>
      <div>
        <input type="text" name='lastname' placeholder="Lastname"><br>
      </div>
      <br>
      <div>
        <input type="email" name='phone_email' placeholder="Phone or Email">
      </div>
      <br>
      <div>
        <input type='hidden' name='phone' placeholder="509123123"><br>
      </div>

      <label for="select" name="option_value">I'm interested in a...</label><br>
        <input type="radio" name="site" value="e-com" checked> Business Site<br>
        <input type="radio" name="site" value="squarespace"> Squarespace Site<br>
        <input type="radio" name="site" value="wordpress"> Wordpress Site<br>
        <input type="radio" name="site" value="business"> Personal Site<br>
        <input type="radio" name="site" value="other"> Other<br>
        
      <br><br>


      <label for="select" name="option_value">My estimated budget</label><br>
      <select>
        <option value="300">300$</option>
        <option value="500">500$</option>
        <option value="1000">1000$+</option>
      </select>

      <br><br>

      <div>
        <textarea name='text-area' type="text area" placeholder="Give us an idea of your project"></textarea>
      </div>

      <button type='submit' name='form-submit' id='submit-form-button'> Submit </button>
    </form>  

    </div>

    <!-- <section id='port-aside-images'>


        <div class='links'>
          <a href="https://github.com/MiteyDrill" target="_blank">
            <img src='./images/github.png' alt='github link'/>
            <p>GitHub</p>
          </a>
        </div>


        <div class='links'>
          <a href="https://twitter.com/TheBen_S" target="_blank">
            <img src='./images/twitter.png' alt='twitter link'/>
            <p>Twitter</p>
          </a>
        </div>

    </section> -->

    <section id='port-review-wrapper'>

      <h3>About me</h3>
      <p>My name is <span id='username'>Benjamin Sanchez</span>.<br> I am a <span class='flip-txt red-txt'>web developer</span> who is passionate about design and UI</p>

      <!-- <div>
        <img src='./images/mike.jpg'  alt='hero-1'/>
        <p>Quisque interdum elit vitae tortor congue, a dapibus ex sollicitudin</p>
      </div>

      <div>
        <img src='./images/mike.jpg' alt='hero-2'/>
        <p>Quisque interdum elit vitae tortor congue, a dapibus ex sollicitudin</p>
      </div>

      <div>
        <img src='./images/mike.jpg' alt='hero-3'/>
        <p>Quisque interdum elit vitae tortor congue, a dapibus ex sollicitudin</p>
      </div>

      <div>
        <img src='./images/mike.jpg' alt='hero-4'/>
        <p>Quisque interdum elit vitae tortor congue, a dapibus ex sollicitudin</p>
      </div>

      <div>
        <img src='./images/mike.jpg' alt='hero-5'/>
        <p>Quisque interdum elit vitae tortor congue, a dapibus ex sollicitudin</p>
      </div> -->

    </section>
  
  </div>


  <!-- <section id='map'>


  </section> -->


  <!-- <section id='hero-info'>

    <div id='hero-image'>
      <img alt='hero-img'/>
    </div>

    <div id='hero-details'>

      <h3>Benjamin Sanchez</h3>
      <p>TheBen.Business@gmail.com</p>

    </div>

  </section> -->

<!-- SCRIPT -->
<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
<script src="map.js" type='text/javascript'></script>
<script src="link_scroll.js" type='text/javascript'></script>
<script src="animations.js" type='text/javascript'></script>

<script  type="module">

import {sal} from './scripts/sal-master/src/sal.js'

sal();

//doesn't work on local server :(

console.log("sal");

</script>

<script>
	if($(window).width() < 900){
  	$(function() {

  	 jQuery.fx.off = true;

  	});
	}
</script>




<?php
include('./g_api_key.php');
/*body*/
include("./footer.php");
?>
