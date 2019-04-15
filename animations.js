function darkAnim(opacity){

  anime.remove(document.getElementById("#img1"));

  anime({

    targets: '#img1',
    duration: 800,

    opacity: opacity,

    easing: "linear"

  });

}


$("#img1").hover(function() { darkAnim(0.3)}, function(){ darkAnim(1)});
