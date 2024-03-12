// Get necessary elements
const cards = document.querySelectorAll('.card');
const expandedImageContainer = document.querySelector('.expanded-image-container');
const expandedImage = document.querySelector('.expanded-image');
const closeButton = document.querySelector('.close-button');

// Function to show expanded image
function showExpandedImage(src) {
    expandedImage.src = src;
    expandedImageContainer.classList.add('show'); // Show the expanded image container
}

// Function to hide expanded image
function hideExpandedImage() {
    expandedImageContainer.classList.remove('show'); // Hide the expanded image container
}

// Add click event to each card
cards.forEach(card => {
    const viewButton = card.querySelector('.view-text');
    const likeIcon = card.querySelector('.fa-heart');
    const mainImage = card.querySelector('.main-image');

    viewButton.addEventListener('click', (event) => {
        event.preventDefault(); // Prevent the default behavior of the anchor link
        const imageSrc = mainImage.getAttribute('src');
        showExpandedImage(imageSrc);
    });

    likeIcon.addEventListener('click', (e) => {
        e.stopPropagation(); // Prevent the click from propagating to the card
        likeIcon.classList.toggle('far');
        likeIcon.classList.toggle('fas');
    });

    mainImage.addEventListener('click', (event) => {
        event.preventDefault(); // Prevent the default behavior of the anchor link
        const imageSrc = mainImage.getAttribute('src');
        showExpandedImage(imageSrc);
    });
});

// Add click event to close button
closeButton.addEventListener('click', hideExpandedImage);

// Close expanded image when clicking outside of it
expandedImageContainer.addEventListener('click', (e) => {
    if (e.target === expandedImageContainer) {
        hideExpandedImage();
    }
});

// Optional: Close expanded image with Escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        hideExpandedImage();
    }
});

//comment section
// Select all comment icons
const commentIcons = document.querySelectorAll('.comment-icon');

// Select the comment section
const commentSection = document.querySelector('.comment-section');

// Add click event listener to each comment icon
commentIcons.forEach(icon => {
    icon.addEventListener('click', () => {
        // Toggle the 'show' class on the comment section
        commentSection.classList.toggle('show');
    });
});

//clse
// JavaScript to handle closing the comment section
document.addEventListener("DOMContentLoaded", function() {
    const closeCommentSection = document.querySelector(".close-comment-section");
    const commentSection = document.querySelector(".comment-section");

    closeCommentSection.addEventListener("click", function() {
        commentSection.classList.remove("show");
    });
});
