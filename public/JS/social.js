function openModal(imageUrl) {
    const modal = document.getElementById('expandedImageModal');
    const modalContent = document.getElementById('expandedImageModalContent');

    modalContent.src = imageUrl;
    modal.style.display = 'block';

    // Create Share and Download buttons
    const modalButtons = document.createElement('div');
    modalButtons.classList.add('modalButtons');

    const shareButton = document.createElement('a');
    shareButton.href = '#'; // Add your share functionality link here
    shareButton.innerText = 'Share';

    const downloadButton = document.createElement('a');
    downloadButton.href = imageUrl;
    downloadButton.setAttribute('download', 'generated_image.jpg');
    downloadButton.innerText = 'Download';

    modalButtons.appendChild(shareButton);
    modalButtons.appendChild(downloadButton);

    modalContent.insertAdjacentElement('afterend', modalButtons);

    // Close modal when clicking outside image
    modal.onclick = function(event) {
        if (event.target === modal) {
            closeModal();
        }
    };

    // Close modal when clicking on close button
    const closeButton = document.createElement('span');
    closeButton.classList.add('closeModal');
    closeButton.innerHTML = '&times;';
    closeButton.onclick = closeModal;
    modalContent.insertAdjacentElement('afterbegin', closeButton);
}

function closeModal() {
    const modal = document.getElementById('expandedImageModal');
    modal.style.display = 'none';

    // Remove modal buttons when closing
    const modalButtons = document.querySelector('.modalButtons');
    if (modalButtons) {
        modalButtons.remove();
    }
}
