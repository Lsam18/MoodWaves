import React, { useState } from "react";
import { useNavigate } from "react-router-dom";
import { preview } from "./../assets/index.js";
import {getRandomPrompt} from "../utils/index.js";

import { FormField, Loader } from "../components/index.js";

function CreatePost() {
  const navigate = useNavigate();
  const [form, setform] = useState({ name: "", prompt: "", photo: "" });
  const [generatingImg, setgeneratingImg] = useState(false);
  const [loading, setloading] = useState(false);

  const generateImage = async () => {
    if (form.prompt) {
      try {
        setgeneratingImg(true);
        const response = await fetch("https://visiongen.onrender.com/api/v1/dalle", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ prompt: form.prompt }),
        });
        const data = await response.json();
        setform({ ...form, photo: `data:image/jpeg;base64,${data.photo}` });
      } catch (error) {
        alert(error);
      } finally {
        setgeneratingImg(false);
      }
    } else {
      alert("Please enter a prompt");
    }
  };
  const handleSubmit = async (e) => {
        e.preventDefault();
        if(form.prompt && form.photo){
          setloading(true);
          try {
            const response  = await fetch('https://visiongen.onrender.com/api/v1/post',{
              method: "POST",
              
              headers: { "Content-Type": "application/json" },
              body: JSON.stringify({...form}),
            });
            await response.json();
            alert('Success')
            navigate('/');

          } catch (error) {
            alert(error);
          }finally{
            setloading(false);
          }
        }
        else{
          alert('Please Enter a prompt and generate an Image');
        }
  };
  const handleChange = (e) => {
    setform({ ...form, [e.target.name]: e.target.value });
  };
  const handleSurpriseMe = () => {
    const randomPrompt = getRandomPrompt();
    setform({ ...form, prompt: randomPrompt });
  };

  return (
    <section className=" max-w-7xl mx-auto">
     
      <form className=" mt-10 max-w-3xl" onSubmit={handleSubmit}>
        <div className="flex flex-col gap-5">
          <FormField
            labelName="Image Title"
            type="text"
            name="name"
            placeholder=""
            value={form.name}
            handleChange={handleChange}
          />
          <FormField
            labelName="Prompt"
            type="text"
            name="prompt"
            placeholder="A Men climbing Mountain"
            value={form.prompt}
            handleChange={handleChange}
            isSurprisedMe
            handleSurpriseMe={handleSurpriseMe}
          />
          
          <div className="relative bg-gray-50 border border-gray-300 flex text-sm rounded-lg focus:ring-blue-400 focus:border-blue-600 w-64 h-64 p-3 justify-center items-center">
            {form.photo ? (
              <img
                src={form.photo}
                alt={form.photo}
                className=" w-full h-full object-contain"
              />
            ) : (
              <img
                src={preview}
                alt={preview}
                className=" w-9/12 h-9/12 object-contain opacity-40"
              />
            )}
            {generatingImg && (
              <div className="flex items-center justify-center absolute inset-0 z-0 rounded-lg bg-[rgba(0,0,0,0.5)]">
                <Loader />
              </div>
            )}
          </div>
        </div>
        <div className=" mt-5 flex gap-5">
          <button
            type="button"
            className=" text-white w-full bg-green-700 font-medium rounded-md sm:w-auto px-5 py-2.5 text-center"
            onClick={generateImage}
          >
            {generatingImg ? "Generating ..." : "Generate"}
          </button>
        </div>
        <div className=" mt-10">
          <p className=" mt-2 text-gray-500">
            Once you have created the image you want, you can share it with the
            others in community
          </p>
          <button
            type="submit"
            className=" mt-3 text-white bg-blue-500 font-medium text-sm sm:w-auto w-full px-5 py-2.5 text-center"
          >
            {" "}
            {loading ? "Sharing..." : "Share with the Community"}
          </button>
        </div>
      </form>
    </section>
  );
}

export default CreatePost;
