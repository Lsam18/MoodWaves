const express = require('express');
const bodyParser = require('body-parser');
const generateImage = require('./generateImage'); // Import your image generation function

const app = express();
const port = 3000;

app.use(express.static('public')); // Serve static files
app.use(bodyParser.json());

app.post('/generate-image', async (req, res) => {
    try {
        const generatedImage = await generateImage(req.body.text); // Call your image generation function
        res.send({ imageUrl: generatedImage });
    } catch (error) {
        console.error('Error generating image:', error);
        res.status(500).send('Error generating image');
    }
});

app.listen(port, () => {
    console.log(`Server running on port ${port}`);
});
