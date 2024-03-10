document.addEventListener("DOMContentLoaded", function () {
    const preloader = document.querySelector(".preloader");
    const links = document.querySelectorAll("a");
  
    window.addEventListener("load", function () {
      // Hide preloader when page is fully loaded
      preloader.style.display = "none";
    });
  
    links.forEach(function (link) {
      link.addEventListener("click", function (event) {
        event.preventDefault();
        preloader.style.display = "flex";
  
        setTimeout(function () {
          window.location.href = link.getAttribute("href");
        }, 2000); // Change this value to match your desired loading time
      });
    });
  });

  //Pricing table

  
  const toggleButtons = document.getElementById("toggleButtons");
  const pill = document.querySelector(".pill");
  const monthlyText = document.querySelector(".billed-monthly");
  const yearlyText = document.querySelector(".billed-yearly-save-15");

  toggleButtons.addEventListener("click", function() {
    pill.classList.toggle("active");
    monthlyText.classList.toggle("active");
    yearlyText.classList.toggle("active");
  });


//create area
$(document).ready(function(){
  $('#title').focus();
    $('#text').autosize();
});