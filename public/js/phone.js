window.onscroll = function() {myFunction()};

function myFunction() {
  var header = document.getElementById("navigation");
  var sticky = header.offsetTop + 50;
  if (window.pageYOffset > sticky) {
    header.classList.add("scroll");
  } else {
    header.classList.remove("scroll");
  }
}