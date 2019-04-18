<?php
include("./main_header.php");
/*body*/
?>

  <nav id='navigation'>
    <ul id='nav-li'>
      <li id='home'>Home</li>
      <li id='portfolio'>Portfolio</li>
      <li id='contact'>Contact</li>
    </ul>
  </nav>

  <header id='header'>

    <h1><span>Benji's</span> Web Design</h1>

  </header>

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
            <h4>Ben-Dev V.2</h4>
            <p class='subtext'>Custom</p>
            <p class='maintext'>
              This happens to be the second portfolio site I ever built.
              Its not the best but it is pretty simple
            </p>
            <a type="button" href="http://ben-dev.bitmapwarriors.com" value="Ben-Dev-V2" target="_blank" class="button">Visit Site</a>
          </div>
        </div>

      </div>

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

    <section id='port-aside-images'>

      <div class='links' >
        <a href="https://codepen.io/MiteyDrill/" target="_blank">
          <img src='./images/codepen' alt='codepen link'/>
          <p>Codepen.io</p>
        </a>
      </div>


      <div class='links'>
        <a href="https://github.com/MiteyDrill" target="_blank">
          <img src='./images/github' alt='github link'/>
          <p>GitHub</p>
        </a>
      </div>


      <div class='links'>
        <a href="https://twitter.com/TheBen_S" target="_blank">
          <img src='./images/twitter' alt='twitter link'/>
          <p>Twitter</p>
        </a>
      </div>
      <!-- <img alt='img-1'/>
      <img alt='img-2'/> -->

    </section>

    <section id='port-review-wrapper'>

      <h3>About me</h3>
      <p>My name is <span id='username'>Benjamin Sanchez</span>.</br> I am a <span class='flip-txt red-txt'>web developer</span> who is passionate about design and UI</p>

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
<!-- <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>-->
<script src="animations.js" type='text/javascript'></script>

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
