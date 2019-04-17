// function darkAnim(opacity, id){
//
//   anime.remove();
//
//   anime({
//
//     targets: id,
//     duration: 800,
//     backgroundColor: "rgba(0, 0, 0, 1)",
//
//     opacity: opacity,
//
//     easing: "linear",
//
//   });
//
// }
//
// /*User Anime.GET somehow to tidy this up*/
// $("#img1").hover(function() { darkAnim(0.5, "#img1")}, function(){ darkAnim(1, "#img1")});
// $("#img2").hover(function() { darkAnim(0.5, "#img2")}, function(){ darkAnim(1, "#img2")});
// $("#img3").hover(function() { darkAnim(0.5, "#img3")}, function(){ darkAnim(1, "#img3")});
// $("#img4").hover(function() { darkAnim(0.5, "#img4")}, function(){ darkAnim(1, "#img4")});
// $("#img5").hover(function() { darkAnim(0.5, "#img5")}, function(){ darkAnim(1, "#img5")});
// $("#img6").hover(function() { darkAnim(0.5, "#img6")}, function(){ darkAnim(1, "#img6")});

let write = function(flip){
  let txt = {
    programmer: ["programmer","red-txt"],
    designer: ["web designer", "blue-txt"]
  };

  let cls = txt.designer[1];

  (flip) ? txt = txt.programmer[0] : txt = txt.designer[0];

  if(flip){
    document.getElementsByClassName('flip-txt')[0].classList.remove('red-txt');
    document.getElementsByClassName('flip-txt')[0].classList.add('blue-txt');
  } else {

    document.getElementsByClassName('flip-txt')[0].classList.remove('blue-txt');
    document.getElementsByClassName('flip-txt')[0].classList.add('red-txt');
  }

  let writing = setInterval(function() {

    let x = document.getElementsByClassName('flip-txt')[0].textContent;

    let length = x.length;

    let y = txt.substring(0, length+1);

    if(length == txt.length){
      clearInterval(writing);

      changeText(4000, !flip);
    }

    document.getElementsByClassName('flip-txt')[0].innerHTML = y;

  }, 200);
}

let del = function(flip){

  let deleting = setInterval(function() {
    let x = document.getElementsByClassName('flip-txt')[0].textContent;

    let length = x.length;

    let y = x.substring(0, length-1);

    if(length == 0){
      clearInterval(deleting);

      write(flip);
    }

    document.getElementsByClassName('flip-txt')[0].innerHTML = y;
  }, 80);
}

let changeText = function(time = 2000, flip = true){

  let initialInterval = setInterval(function() {

    del(flip);

    clearInterval(initialInterval);

  }, time);

}

window.onload = changeText();

//JQUERY animations for bigger screens
if($(window).width() > 900){
  $(function(){
      $('.port-div-img').on( "mouseenter", function(){

        $( this ).css('z-index', 1);

        $( this ).animate({
          width: "130%"
        });

        $( this ).find( ".info-panel").animate({
          opacity: 1,
          width:"100%"
        }, 800, function() {
          // Animation complete.
        });


      });

      $('.port-div-img').on( "mouseleave", function(){

        $( this ).css('z-index', 0);

        $( this ).animate({
          width: "100%"
        })

        $( this ).find( ".info-panel").animate({
          opacity: 0,
          width: "0%"
        }, 1000, function() {
          // Animation complete.
        });

      });

    });
}

if($(window).width() < 900){

  //turn off jquery animation
  $(function() {

   jQuery.fx.off = true;

  });

  $(".info-panel").css(
    {
      "width": "100%",
      "opacity": 1
    }
  );



}
