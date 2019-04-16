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


//JQUERY animations

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
