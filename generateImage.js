async function generateImage(text) {
    // Here you would have your image generation logic
    // For demonstration purposes, let's generate a random image URL
    const randomImageUrl = `https://picsum.photos/300/200?random=${Math.random()}`;
    return randomImageUrl;
}

module.exports = generateImage;
