

---

# MERN Authentication System with JWT

An exemplary MERN stack application featuring secure authentication flows using JSON Web Tokens (JWT). This project serves as both a practical implementation of authentication in a MERN application and a comprehensive learning resource for developers.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Introduction

This MERN stack application provides a seamless user experience from registration to login, incorporating JWT for robust session management and security. It's designed as a boilerplate, allowing other developers to fork, extend, and customize it to fit their own needs.

## Features

- **User Registration**: Sign up with a new user account.
- **User Login**: Securely log in with existing credentials.
- **JWT Authentication**: Manages sessions and secures data transmission.
- **Responsive Design**: A frontend that adapts to various screen sizes for a consistent user experience.

## Technologies Used

### Frontend

- **React.js**: A JavaScript library for building user interfaces.
- **Toastify**: A tool for displaying elegant notifications and alerts.
- **React Router DOM**: Manages navigation within the application.

### Backend

- **Node.js**: The JavaScript runtime built on Chrome's V8 JavaScript engine.
- **Express**: A fast, unopinionated web framework for Node.js.
- **MongoDB**: A NoSQL database for storing user data.

## Installation

### Clone the repository

```bash
git clone https://github.com/Lsam18/MoodWaves.git
```

### Navigate to the project directory

```bash
cd MoodWaves
```

### Install Backend Dependencies

```bash
npm install
```

### Install Frontend Dependencies

```bash
cd client-api
npm install
```

### Configure MongoDB and JWT

1. Set up a MongoDB account and a new database to obtain your URI.
2. Generate a 256-bit secret key for JWT.
3. Create a `.env` file in the root directory and fill in the details:

```env
MONGO_URI=your_mongodb_uri
JWT_SECRET=your_jwt_secret
```

## Usage

### Start the Backend Server

```bash
npm start
```

### Start the Frontend Development Server

Open a new terminal window:

```bash
cd client-api
npm run dev
```

### Access the Application

Visit `http://localhost:5173` in your browser to register a new account or log in.

## Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

## License

Distributed under the MIT License. See `LICENSE` for more information.

---

