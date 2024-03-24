import mongoose from 'mongoose';

const connectDB = async (url) => {
  console.log('Connecting to MongoDB:', url);
  mongoose.set('strictQuery', true);
  try {
    await mongoose.connect(url);
    console.log('MongoDB connected');
  } catch (error) {
    console.error('MongoDB connection error:', error);
    throw error; // Rethrow the error to indicate connection failure
  }
};

export default connectDB;
