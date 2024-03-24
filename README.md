

---

# Mood Waves - Social Media Platform

Mood Waves is a cutting-edge social media platform that harnesses the power of Generative AI to transform users' textual inputs into captivating visual representations. This repository encompasses the entire application, including a secure authentication system, image generation capabilities using OpenAI's API, and a community-focused interface for sharing and interaction.

## Table of Contents

- [About The Project](#about-the-project)
- [Features](#features)
- [Built With](#built-with)
- [Getting Started](#getting-started)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)
- [Acknowledgments](#acknowledgments)

## About The Project

The Mood Waves platform is designed to be more than a social media app; it is a social canvas where art meets technology, allowing for emotional expression and connection. By combining the capabilities of Generative AI with an engaging social media experience, users can create and share images that reflect their emotions, thoughts, and creativity.

## Features

- **AI-Powered Image Generation**: Create images from textual descriptions using OpenAI's powerful image generation API.
- **User Registration and Login**: Secure sign-up and authentication system.
- **Interactive Community**: Like, comment on, and share generated images within the Mood Waves community.
- **Responsive Design**: Enjoy a consistent and engaging experience across various devices and screen sizes.

## Built With

- [React.js](https://reactjs.org/) - The web framework used
- [Node.js](https://nodejs.org/) - Server Environment
- [Express.js](https://expressjs.com/) - Node.js Framework
- [MongoDB](https://www.mongodb.com/) - Database
- [JWT](https://jwt.io/) - Authentication
- [OpenAI API](https://openai.com/api/) - AI Image Generation

## Getting Started

### Prerequisites

- Node.js (LTS version)
- npm (comes with Node.js)
- MongoDB account with a database
- OpenAI API key

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/your_username_/MoodWaves.git
   ```
2. Install NPM packages for server
   ```sh
   cd MoodWaves/server
   npm install
   ```
3. Enter your environment variables in `.env`
   ```env
   MONGO_URI=your_mongodb_uri
   JWT_SECRET=your_jwt_secret
   OPENAI_API_KEY=your_openai_api_key
   ```
4. Start the server
   ```sh
   npm start
   ```
5. Install NPM packages for client
   ```sh
   cd MoodWaves/client
   npm install
   ```
6. Start the client
   ```sh
   npm start
   ```

The client will run on [http://localhost:3000](http://localhost:3000) and the server on [http://localhost:5000](http://localhost:5000).

## Usage

After starting the application, users can register an account, create AI-generated images based on their mood or text input, and engage with the community by sharing, liking, or commenting on images.

## Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. If you'd like to contribute, please fork the repository and create a pull request.

## License

Distributed under the MIT License. See `LICENSE` for more information.

## Contact

Your Name - [@your_twitter](https://twitter.com/your_twitter)

Project Link: [https://github.com/your_username_/MoodWaves](https://github.com/your_username_/MoodWaves)

## Acknowledgments

- [OpenAI](https://openai.com/)
- [React Icons](https://react-icons.github.io/react-icons/)
- [Axios](https://github.com/axios/axios)
- [bcrypt.js](https://www.npmjs.com/package/bcryptjs)

---

