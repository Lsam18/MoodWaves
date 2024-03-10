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

//gallery on create page
console.clear();

const elApp = document.querySelector("#app");

const elImages = Array.from(document.querySelectorAll(".gallery-image"));

const elDetail = document.querySelector(".detail");

function flipImages(firstEl, lastEl, change) {
  const firstRect = firstEl.getBoundingClientRect();

  const lastRect = lastEl.getBoundingClientRect();

  // INVERT
  const deltaX = firstRect.left - lastRect.left;
  const deltaY = firstRect.top - lastRect.top;
  const deltaW = firstRect.width / lastRect.width;
  const deltaH = firstRect.height / lastRect.height;

  change();
  lastEl.parentElement.dataset.flipping = true;

  const animation = lastEl.animate([
    {
      transform: `translateX(${deltaX}px) translateY(${deltaY}px) scaleX(${deltaW}) scaleY(${deltaH})`
    },
    {
      transform: 'none'
    }
  ], {
    duration: 600, // milliseconds
    easing: 'cubic-bezier(.2, 0, .3, 1)'
  });

  animation.onfinish = () => {
    delete lastEl.parentElement.dataset.flipping;
  }

}

elImages.forEach(figure => {

  figure.addEventListener("click", () => {
    const elImage = figure.querySelector('img');

    elDetail.innerHTML = "";

    const elClone = figure.cloneNode(true);
    elDetail.appendChild(elClone);

    const elCloneImage = elClone.querySelector('img');

    flipImages(elImage, elCloneImage, ()=>{
      elApp.dataset.state="detail";
    });

    function revert(){

      flipImages(elCloneImage, elImage, ()=>{
        elApp.dataset.state="gallery";
        elDetail.removeEventListener('click',revert);
      });

    }

    elDetail.addEventListener('click',revert);

  });
});


