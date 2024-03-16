document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('paper');
    const textInput = document.getElementById('text');
    const loading = document.getElementById('loading');
    const generatedImageContainer = document.getElementById('generatedImageContainer');
    const generatedImage = document.getElementById('generatedImage');
    const generatedImageLink = document.getElementById('generatedImageLink');

    form.addEventListener('submit', async function(event) {
        event.preventDefault();

        const text = textInput.value.trim();

        if (text === '') {
            alert('Please enter some text.');
            return;
        }

        try {
            // Show loading spinner
            loading.style.display = 'block';
            generatedImageContainer.style.display = 'none'; // Hide previous image

            const resp = await fetch('http://localhost:3000/generate-image', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'api-key': '1348bec0-2e45-42d4-bd5d-2d4667cd95e1' // Add your API key if needed
                },
                body: JSON.stringify({
                    text: text
                })
            });

            if (!resp.ok) {
                throw new Error('Network response was not ok');
            }

            const data = await resp.json();
            console.log('Response data:', data);

            // Check if image URL is present in response
            if (data.imageUrl) {
                // Set the image link URL
                generatedImageLink.href = data.imageUrl;
                // Set the image source (for preview)
                generatedImage.src = data.imageUrl;
                generatedImageContainer.style.display = 'block'; // Show the image container
            } else {
                throw new Error('Image URL not found in response');
            }
        } catch (error) {
            console.error('Error generating image:', error);
            alert('Error generating image. Please try again.');
        } finally {
            // Hide loading spinner
            loading.style.display = 'none';
        }
    });
});
