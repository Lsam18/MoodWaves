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
  