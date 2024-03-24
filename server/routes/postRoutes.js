import express from "express";
import * as dotenv from 'dotenv';
import { v2 as cloudinary } from "cloudinary";
import Post from "./../mongoDb/models/post.models.js";
dotenv.config();

const router = express.Router();

cloudinary.config({
  cloud_name: process.env.CLOUDNAME,
  api_key: process.env.CLOUD_API,
  api_secret: process.env.CLOUD_API_SECRET,
});

//get all posts
router.route("/").get(async (req, res) => {
    try {
        const posts = await Post.find({});
        res.status(200).json({ success: true, data: posts });
    } catch (error) {
        res.status(500).json({ success: false, message: error });
    }
});

//create post
router.route("/").post(async (req, res) => {

  try {
    const { name, prompt, photo } = req.body;
    const photoUrl = await cloudinary.uploader.upload(photo);
    const newPost = await Post.create({ name, prompt, photo: photoUrl.url });
    res.status(201).json({ success: true, data: newPost });
  } 
  catch (error) {
    res.status(500).json({success:false,message:error});
  }
});

export default router;
