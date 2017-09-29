 <!-- Slideshow 시작-->
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("dogSlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" circle_blue", "");
  }
  
  
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " circle_blue";
}

 <!-- Slideshow 시작-->