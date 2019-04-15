<?php
include("./header.php");
/*body*/
?>

  <nav id='navigation'>
    <ul id='nav-li'>
      <li id='home'>Home</li>
      <li id='portfolio'>Portfolio</li>
      <li id='contacts'>Contact</li>
    </ul>
  </nav>

  <header id='header'>

    <h1><span>Benji's</span> Web Design</h1>

  </header>

  <div id='portfolio-wrapper'>

    <section id='port-images'>

      <div id='img1' class='port-div-img'></div>
      <div id='img2' class='port-div-img'></div>
      <div id='img3' class='port-div-img'></div>
      <div id='img4' class='port-div-img'></div>
      <div id='img5' class='port-div-img'></div>
      <div id='img6' class='port-div-img'></div>

    </section>

    <section id='port-aside-images'>

      <img alt='img-1'/>
      <img alt='img-2'/>

    </section>

    <section id='port-review-wrapper'>

      <div>
        <img src='./images/mike.jpg'  alt='hero-1'/>
        <p>Quisque interdum elit vitae tortor congue, a dapibus ex sollicitudin</p>
      </div>

      <div>
        <img alt='hero-2'/>
        <p>Quisque interdum elit vitae tortor congue, a dapibus ex sollicitudin</p>
      </div>

      <div>
        <img alt='hero-3'/>
        <p>Quisque interdum elit vitae tortor congue, a dapibus ex sollicitudin</p>
      </div>

      <div>
        <img alt='hero-4'/>
        <p>Quisque interdum elit vitae tortor congue, a dapibus ex sollicitudin</p>
      </div>

      <div>
        <img alt='hero-5'/>
        <p>Quisque interdum elit vitae tortor congue, a dapibus ex sollicitudin</p>
      </div>

    </section>

  </div>


  <section id='map'>


  </section>


  <section id='hero-info'>

    <div id='hero-image'>
      <img alt='hero-img'/>
    </div>

    <div id='hero-details'>

      <h3>Benjamin Sanchez</h3>
      <p>509.999.9999</p>
      <p>TheBen@gmail.com</p>
      <p>address</p>

    </div>

  </section>

<!-- SCRIPT -->
<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
<script src="map.js" type='text/javascript'></script>
<script src="link_scroll.js" type='text/javascript'></script>
<script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
<script src="animations.js" type='text/javascript'></script>




<?php
include('./g_api_key.php');
/*body*/
include("./footer.php");
?>
