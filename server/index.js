import express from "express";
import dotenv from "dotenv";
import cors from "cors";
import connectDB from "./mongoDb/connect.js";
import postRoutes from './routes/postRoutes.js';
import dalleRoutes from './routes/dalleRoutes.js';
import User from './mongoDb/models/userModel.js';
import bcrypt from 'bcrypt';
import jwt from 'jsonwebtoken';

dotenv.config();

const app = express();
app.use(cors());
app.use(express.json({ limit: '50mb' }));
app.use('/api/v1/post', postRoutes);
app.use('/api/v1/dalle', dalleRoutes);

// Sign-up endpoint
app.post("/api/v1/signup", async (req, res) => {
  try {
    const { username, email, password } = req.body;
    // Check if user already exists
    const existingUser = await User.findOne({ email });
    if (existingUser) {
      return res.status(400).json({ message: "User already exists" });
    }
    // Hash the password
    const hashedPassword = await bcrypt.hash(password, 10);
    // Create a new user
    const newUser = new User({ username, email, password: hashedPassword });
    await newUser.save();
    res.status(201).json({ message: "User created successfully" });
  } catch (error) {
    console.error(error);
    res.status(500).json({ message: "Error creating user" });
  }
});

// Sign-in endpoint
app.post("/api/v1/signin", async (req, res) => {
  try {
    const { email, password } = req.body;
    // Find user by email
    const user = await User.findOne({ email });
    if (!user) {
      return res.status(404).json({ message: "User not found" });
    }
    // Compare passwords
    const passwordMatch = await bcrypt.compare(password, user.password);
    if (!passwordMatch) {
      return res.status(401).json({ message: "Invalid password" });
    }
    // Generate JWT token
    const token = jwt.sign({ userId: user._id }, process.env.JWT_SECRET);
    res.status(200).json({ token });
  } catch (error) {
    console.error(error);
    res.status(500).json({ message: "Error signing in" });
  }
});

// Middleware for authentication
const authenticateToken = (req, res, next) => {
  const authHeader = req.headers["authorization"];
  const token = authHeader && authHeader.split(" ")[1];
  if (!token) return res.sendStatus(401);

  jwt.verify(token, process.env.JWT_SECRET, (err, user) => {
    if (err) return res.sendStatus(403);
    req.user = user;
    next();
  });
};

// Redirect user to feed section after successful sign-in
app.get("/api/v1/feed", authenticateToken, (req, res) => {
  // Here you can handle the redirection to the feed section
  // For example, you can redirect to a specific route or send back a response with a redirect URL
  res.json({ redirectUrl: "/feed" });
});

// Protected route (feed section)
app.get("/feed", authenticateToken, (req, res) => {
  res.send("Feed section - protected route");
});

// Default route
app.get("/", (req, res) => {
  res.send("Hello from AI");
});

const startServer = async () => {
  try {
    // Connect to MongoDB
    await connectDB(process.env.MONGODB_URL);
    console.log('MongoDB connected');

    // Start Express server
    app.listen(4400, () => {
      console.log(`Server started at port 4400`);
    });
  } catch (error) {
    console.error('MongoDB connection error:', error.message);
    process.exit(1); // Exit the process if MongoDB connection fails
  }
};

startServer();
