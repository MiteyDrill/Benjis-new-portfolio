function darkAnim(opacity, id){

  anime.remove();

  anime({

    targets: id,
    duration: 800,

    opacity: opacity,

    easing: "linear"

  });

}

/*User Anime.GET somehow to tidy this up*/
$("#img1").hover(function() { darkAnim(0.3, "#img1")}, function(){ darkAnim(1, "#img1")});
$("#img2").hover(function() { darkAnim(0.3, "#img2")}, function(){ darkAnim(1, "#img2")});
$("#img3").hover(function() { darkAnim(0.3, "#img3")}, function(){ darkAnim(1, "#img3")});
$("#img4").hover(function() { darkAnim(0.3, "#img4")}, function(){ darkAnim(1, "#img4")});
$("#img5").hover(function() { darkAnim(0.3, "#img5")}, function(){ darkAnim(1, "#img5")});
$("#img6").hover(function() { darkAnim(0.3, "#img6")}, function(){ darkAnim(1, "#img6")});
