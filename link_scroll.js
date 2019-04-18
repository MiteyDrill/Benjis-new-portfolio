// $("li").click(function() {
//        alert('Clicked list. ' + this.id);
// });

//if list is clicked then window will scroll to position of id that is selected
$("li").click(function() {

  if(this.id === "nav-home"){
      $([document.documentElement, document.body]).animate({
          scrollTop: $("header").offset().top
      }, 2000);
  }

  if(this.id === "nav-portfolio"){
      $([document.documentElement, document.body]).animate({
          scrollTop: $("#portfolio-wrapper").offset().top
      }, 2000);
  }

  if(this.id === "nav-contact"){
      $([document.documentElement, document.body]).animate({
          scrollTop: $("#contact").offset().top
      }, 2000);
  }

});
