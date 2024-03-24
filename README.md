

---

# Mood Waves Authentication System

The Mood Waves platform brings a new dimension to human-computer interaction by enabling users to generate and share visual representations based on textual input using Generative AI. This repository focuses on the authentication system, a secure and integral part of the Mood Waves experience.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [Authors](#authors)
- [Acknowledgments](#acknowledgments)

## Features

- User Registration: Securely create a new account with email verification.
- User Login: Log in with credentials to access the Mood Waves platform.
- JWT Authentication: Manage sessions and user data securely.
- Responsive UI: A polished frontend for a consistent experience across devices.

## Technologies Used

- **Frontend**: React.js, React Router DOM
- **Backend**: Node.js with Express.js
- **Database**: MongoDB
- **Authentication**: JWT for session management, bcrypt for password hashing

## Getting Started

### Prerequisites

Before running the project, make sure you have the following installed:
- Node.js (LTS version)
- npm (Node Package Manager)
- MongoDB account and a cluster set up

### Installation

1. Clone the repository:

    ```sh
    git clone https://github.com/Lsam18/MoodWaves.git
    ```

2. Navigate to the backend directory and install dependencies:

    ```sh
    cd MoodWaves/server
    npm install
    ```

3. Navigate to the frontend directory and install dependencies:

    ```sh
    cd MoodWaves/client
    npm install
    ```

4. Set up your MongoDB URI and JWT secret key in a `.env` file in the `server` directory:

    ```env
    MONGO_URI=your_mongodb_uri
    JWT_SECRET=your_jwt_secret_key
    ```

5. Start the backend server:

    ```sh
    npm start
    ```

6. Open a new terminal, navigate to the frontend directory, and start the React development server:

    ```sh
    npm start
    ```

Your application should now be running on `http://localhost:3000`.

## Usage

Use the application to register for a new account and explore the features. Log in to visualize and share your creative expressions with the community.

## Contributing

If you wish to contribute to this project, please fork the repository and submit a pull request. Any improvements or suggestions are welcome.



## Acknowledgments

A special thanks to the entire Mood Waves team for their contributions and to OpenAI for providing the image generation API that enhances the platform's capabilities.

---

