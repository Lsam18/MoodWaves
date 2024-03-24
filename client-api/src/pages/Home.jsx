import React, { useEffect, useState } from "react";
import { Loader, Card, FormField } from "./../components/index.js";
import { Link } from "react-router-dom";
const RenderCards = ({ data, title }) => {
  if (data?.length > 0) {
    return (data.map((post) => <Card key={post._id} {...post} />));
  }
  return (
    <h2 className=" mt-5 font-bold text-blue-500 text-xl uppercase">{title}</h2>
  );
};

function Home() {
  const [loading, setloading] = useState(false);
  const [allPosts, setallPosts] = useState(null);
  const [searchText, setsearchText] = useState("");
  const [searchResult, setsearchResult] = useState(null);
  const [SearchTimeOut, setSearchTimeOut] = useState(null);

  useEffect(() => {
    const fetchPosts = async () => {
      setloading(true);
      try {
        const response = await fetch("https://visiongen.onrender.com/api/v1/post", {
          method: "GET",
          headers: { "Content-Type": "application/json" },
        });
        if (response.ok) {
          const data = await response.json();
          setallPosts(data.data.reverse());
        }
      } catch (error) {
        alert(error);
      } finally {
        setloading(false);
      }
    };
    fetchPosts();
  }, []);

  const handleSearch = (e) => {
    clearTimeout(SearchTimeOut);
    setsearchText(e.target.value);

    setSearchTimeOut(
      setTimeout(() => {
        const searchResults = allPosts.filter(
          (item) =>
            item.name.toLowerCase().includes(searchText.toLowerCase()) ||
            item.prompt.toLowerCase().includes(searchText.toLowerCase())
        );
        
        setsearchResult(searchResults);
      }, 500)
    );
    
  };

  return (
    <section className=" max-w-7xl mx-auto">
      <div>
        <h1 className=" font-extrabold text-black text-[32px]">
          
        </h1>
        <p className="mt-2 text-gray-500 max-w-[500px] text-[14px]">
          
        </p>
      </div>
      <div className=" mt-6 mb-6 text-center text-blue-800 md:mt-10 md:mb-10">
      <Link to={''} className=" font-medium">
         
          </Link>
      </div>
      

      <div className=" mt-10">
        {loading ? (
          <div className=" flex justify-center items-center">
            <Loader />
          </div>
        ) : (
          <>
            {searchText && (
              <h2 className=" font-medium text-gray-400 text-xl mb-3">
                Showing results for{" "}
                <span className="text-gray-800">{searchText}</span>
              </h2>
            )}
            <div className="grid lg:grid-cols-4 sm:grid-cols-3 xs:grid-cols-2 grid-cols-1 gap-3">
              {searchText ? (
                <RenderCards data={searchResult} title={"No Search Results Found"} />
              ) : (
                <RenderCards data={allPosts} title={"No post found"} />
              )}
            </div>
          </>
        )}
      </div>
    </section>
  );
}

export default Home;
