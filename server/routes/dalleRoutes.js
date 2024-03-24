import express from "express";
import dotenv from "dotenv";
import { Configuration, OpenAIApi } from 'openai';
import Post from './../mongoDb/models/post.models.js';
dotenv.config();

const router = express.Router();
const configuration = new Configuration({
    apiKey: process.env.OPENAI_API,
});
const openai = new OpenAIApi(configuration);

router.route('/').get((req,res)=>{res.send('hello from open ai')});
router.route('/').post(async(req,res)=>{
 try {
    const {prompt} = req.body;
    const aiResponse = await openai.createImage({prompt:prompt,n:1,size:'1024x1024',response_format:'b64_json'});
    const image = aiResponse.data.data[0].b64_json;

    // Save the generated image to MongoDB
    const newPost = await Post.create({ prompt, photo: image });
    res.status(200).json({ success: true, data: newPost });
 } catch (error) {
    console.log(error);
    res.status(500).send(error);
 }
})

export default router;
