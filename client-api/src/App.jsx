import { useState } from "react";
import { BrowserRouter, Link, Route, Routes } from "react-router-dom";
import "./App.css";
import { vision } from "./assets/index.js";
import {Home,CreatePost} from "./pages/index.js"

function App() {
  const [count, setCount] = useState(0);

  return (
    <>
      <BrowserRouter>
        <header className=" w-full items-center justify-between flex bg-red-500 sm:px-8 px-4 py-4 border-b border-b-[000000]">
         
          
         
        
        </header>
        <main className=" sm:p-8 px-4 py-8 w-full min-h-[calc(100vh-73px)]">
          <Routes>
            <Route path='/' element={<Home/>}/>
            <Route path='/create-post' element={<CreatePost/>}/>
          </Routes>
        </main>
      </BrowserRouter>
    </>
  );
}

export default App;
