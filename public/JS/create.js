const API_ENDPOINT = "https://api.deepai.org/api/prophetic-vision-generator";
const API_KEY = "1348bec0-2e45-42d4-bd5d-2d4667cd95e1";

function closeModal() {
  const modal = document.getElementById("expandedImageModal");
  modal.style.display = "none";
}

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("paper");
  const textInput = document.getElementById("text");
  const loading = document.getElementById("loading");
  const generatedImageContainer = document.getElementById(
    "generatedImageContainer"
  );

  form.addEventListener("submit", async function (event) {
    event.preventDefault();

    const text = textInput.value.trim();

    if (text === "") {
      alert("Please enter some text.");
      return;
    }

    try {
      loading.style.display = "block";
      generatedImageContainer.innerHTML = "";

      const formData = new FormData();
      formData.append("text", text);

      const resp = await fetch(API_ENDPOINT, {
        method: "POST",
        headers: {
          "api-key": API_KEY,
        },
        body: formData,
      });

      if (!resp.ok) {
        throw new Error("Network response was not ok");
      }

      const data = await resp.json();
      console.log("Response data:", data);

      if (data.output_url) {
        const imageUrl = Array.isArray(data.output_url)
          ? data.output_url[0]
          : data.output_url;

        const imageItem = document.createElement("div");
        imageItem.classList.add("generatedImageItem");

        const image = document.createElement("img");
        image.src = imageUrl;
        image.alt = "Generated Image";
        image.onclick = function () {
          openModal(imageUrl);
        };

        imageItem.appendChild(image);
        generatedImageContainer.appendChild(imageItem);
      } else {
        throw new Error("Image URLs not found in response");
      }
    } catch (error) {
      console.error("Error generating image:", error);
      alert("Error generating image. Please try again.");
    } finally {
      loading.style.display = "none";
    }
  });
});

function openModal(imageUrl) {
  const modal = document.getElementById("expandedImageModal");
  const modalContent = document.getElementById("expandedImageModalContent");

  modalContent.src = imageUrl;
  modal.style.display = "block";
}
