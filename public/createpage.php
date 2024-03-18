

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'includes/config.php';

if (isset ($_POST["login"])) { // Note the change to a "login" button name
    $username = $_POST["username"];
    $pw = $_POST["pw"];


    // Here you would fetch the user from the database by username
    $query = "SELECT * FROM users WHERE username = '$username' && pw = '$pw'";
    $result = mysqli_query($conn, $query);

    if ($user = mysqli_fetch_assoc($result)) {
        // Compare the provided password with the one in the database
        if ($pw == $user['pw']) { // Note: You should use password hashing in practice
            echo "<script> alert('Login successful! Welcome back.'); </script>";
            // Proceed with login success actions (e.g., creating session variables)
            $_SESSION['username'] = $user['username'];
        } else {
            echo "<script> alert('Incorrect password.'); </script>";
        }
    } else {
        echo "<script> alert('User not found.'); </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mood Waves - Create</title>
    <link rel="stylesheet" href="CSS/navbar.css" />
    <link rel="stylesheet" href="CSS/create.css" />
    <link rel="stylesheet" href="CSS/mainstyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Additional Styles */
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .welcome-to-mood-waves {
            text-align: center;
            font-size: 24px;
            margin-top: 20px;
        }

        /* Main Content */
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        #text {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            resize: none;
            font-size: 16px;
            margin-bottom: 20px;
        }

        #generateButton {
            background-color: #39058d;
            color: white;
            padding: 14px 20px;
            margin: 5px 38px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s;
            align-items: center;
        }

        #generateButton:hover {
            background-color: #710edb;
        }

        .generatedImageItem {
            margin: 30px;
            cursor: pointer;
            transition: transform 0.3s ease;
            margin-right: -90px;
            width: 700px;
            margin-top: 20px;
        }

        .generatedImageItem img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .generatedImageItem img:hover {
            transform: scale(1.1);
        }

        /* Expanded Image Modal */
        #expandedImageModal {
            display: none;
            position: fixed;
            z-index: 9999;
            padding-top: 50px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.9);
        }

        #expandedImageModalContent {
            margin: auto;
            display: block;
            max-width: 90%;
            max-height: 90vh;
        }

        .closeModal {
            color: #fff;
            position: absolute;
            top: 15px;
            right: 35px;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            z-index: 99999;
            cursor: pointer;
        }

        .closeModal:hover,
        .closeModal:focus {
            color: #bbb;
        }

        /* Spinner Animation */
        .loader {
            border: 4px solid rgba(165, 0, 236, 0.1);
            border-top: 4px solid #9800ca;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            animation: spin 1s linear infinite;
            margin: 0 360px;
            margin-top: 20px;
            right: -150px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

       /* Image Actions */
.image-actions {
    display: flex;
    flex-direction: column;
    align-items: flex-start; /* Align items to the start vertically */
    position: absolute;
    top: 25px; /* Adjust as needed for top positioning */
    right: 125px;
    z-index: 100; /* Ensure it's above other modal content */
}

/* Button Container */
.button-container {
    display: flex;
    flex-direction: column;
}

/* Button Styles */
/* Button Styles for Larger Screens */
.download-btn, .share-btn, .save-btn {
    background-color: #6706a3; /* Dark purple background */
    color: white; /* White text */
    padding: 10px 20px; /* More padding for a larger button */
    border: none; /* No border */
    border-radius: 4px; /* Rounded corners */
    cursor: pointer; /* Pointer cursor on hover */
    margin-top: 10px; /* Space between buttons */
    font-size: 14px; /* Adjust font size as needed */
    transition: background-color 0.2s, box-shadow 0.2s; /* Smooth transition for hover effects */
    box-shadow: 0 2px 4px rgba(0,0,0,0.2); /* Subtle shadow for depth */
}

/* Adjusting Button Position for Mobile Screens */
@media screen and (max-width: 768px) {
    .image-actions {
        right: 10px; /* Move buttons closer to the right edge on smaller screens */
        top: 10px; /* Adjust top position for better visibility */
    }

    /* Adjust Button Sizes for Smaller Screens */
    .download-btn, .share-btn, .save-btn {
        padding: 8px 15px; /* Slightly reduce padding */
        font-size: 12px; /* Reduce font size for space efficiency */
        margin-top: 8px; /* Reduce margin between buttons */
    }
}

/* Further Adjustments for Very Small Screens */
@media screen and (max-width: 480px) {
    .image-actions {
        right: 5px; /* Further adjust for very small screens */
        top: 5px;
    }

    .download-btn, .share-btn, .save-btn {
        padding: 6px 10px; /* Even smaller padding */
        font-size: 10px; /* Even smaller font size */
        margin-top: 5px; /* Less space between buttons */
    }
}


    </style>
</head>
<body>
    <div class="ellipse-32"></div>

    <div class="navbar">
        <a href="registeruser.php">Sign up/Login</a>
        <a href="explore.php">Explore</a>
        <a href="createpage.php">Create</a>
        <div class="dropdown">
                <button class="dropbtn">More 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    
                    <a href="aboutus.html">About Us</a>
                    <a href="contact.php">Contact</a>
                    <a href="privacyPolicy.php">Privacy Policy</a>
                    <a href="Terms&Services.php">Terms of Service</a>
                    <a href="Help.html">Help/FAQ</a>
                </div>
            </div>
        </div>
        <a href="index.php">Home</a>
        <img src="Images/logo.png" alt="Mood Waves" style="display: block; width: 300px; margin: 20px 620px; margin-top: 130px;">
    </div>
    <div class="welcome-to-mood-waves" style="margin-right: -220px;">WELCOME TO MOOD WAVES!</div>

    <!-- Side menu -->
    <div class="side-menu">
        <div class="user-profile">
            <img src="Images/carousel2.jpeg" alt="Profile Picture">
            <h3> <?php echo isset ($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?> </h3>
        </div>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="#"><i class="fas fa-heart"></i> Liked Images</a></li>

            <li><a href="#"><i class="fas fa-image"></i> My Images</a></li>
            <li><a href="settingspage.php"><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <div id="wrapper">
            <form id="paper">
                <textarea id="text" placeholder="Feeling like a gently floating cloud, soft and light, amidst a serene sky of pale blue." rows="3"></textarea>
                <br>
                <input id="generateButton" type="submit" value="Generate">
            </form>
            <div class="loader" id="loading" style="display: none;"></div>
            <div id="generatedImageContainer">
                <!-- Image will be dynamically added here -->
            </div>
        </div>

        <!-- Expanded Image Modal -->
        <div id="expandedImageModal">
            <span class="closeModal" onclick="closeModal()">&times;</span>
            <img id="expandedImageModalContent" src="" alt="Expanded Image">
            <div class="image-actions">
                <div class="button-container">
                    <button class="download-btn" onclick="downloadImage()"><i class='bx bxs-download'></i> Download</button>
                    <button class="share-btn" onclick="shareImage()"><i class='bx bxs-share-alt'></i> Share</button>
                    <button class="save-btn"><i class='bx bxs-save'></i> Save</button>
                </div>
            </div>
        </div>

    <script>
          // Function to open modal
          function openModal(imageUrl) {
            const modal = document.getElementById('expandedImageModal');
            const modalContent = document.getElementById('expandedImageModalContent');

            modalContent.src = imageUrl;
            modal.style.display = 'block';
        }

        // Function to close modal
        function closeModal() {
            document.getElementById('expandedImageModal').style.display = 'none';
        }

        // Function for download button
        function downloadImage() {
            const imageUrl = document.getElementById('expandedImageModalContent').src;
            // Code to download image
            console.log('Downloading image:', imageUrl);
        }

        // Function for share button
        function shareImage() {
            const imageUrl = document.getElementById('expandedImageModalContent').src;
            // Code to share image
            console.log('Sharing image:', imageUrl);
        }

        // Your existing script
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('paper');
            const textInput = document.getElementById('text');
            const loading = document.getElementById('loading');
            const generatedImageContainer = document.getElementById('generatedImageContainer');

            form.addEventListener('submit', async function(event) {
                event.preventDefault();

                const text = textInput.value.trim();

                if (text === '') {
                    alert('Please enter some text.');
                    return;
                }

                try {
                    // Show loading spinner
                    loading.style.display = 'block';
                    generatedImageContainer.innerHTML = ''; // Clear previous images

                    const formData = new FormData();
                    formData.append('text', text);

                    const resp = await fetch('https://api.deepai.org/api/prophetic-vision-generator', {
                        method: 'POST',
                        headers: {
                            'api-key': '1348bec0-2e45-42d4-bd5d-2d4667cd95e1'
                        },
                        body: formData
                    });

                    if (!resp.ok) {
                        throw new Error('Network response was not ok');
                    }

                    const data = await resp.json();
                    console.log('Response data:', data);

                    // Check if image URL is present in response
                    if (data.output_url) {
                        const imageUrl = data.output_url;

                        const imageItem = document.createElement('div');
                        imageItem.classList.add('generatedImageItem');

                        const image = document.createElement('img');
                        image.src = imageUrl;
                        image.alt = 'Generated Image';
                        image.onclick = function() {
                            openModal(imageUrl);
                        };

                        imageItem.appendChild(image);
                        generatedImageContainer.appendChild(imageItem);

                    } else {
                        throw new Error('Image URL not found in response');
                    }
                } catch (error) {
                    console.error('Error generating image:', error);
                    alert('Error generating image. Please try again.');
                } finally {
                    // Hide loading spinner
                    loading.style.display = 'none';
                }
            });
        });

        
    </script>
    <!-- <download share buttons> -->
    <script>
      async function downloadImage() {
    const imageUrl = document.getElementById('expandedImageModalContent').src;

    try {
        const response = await fetch(imageUrl);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const blob = await response.blob();
        const downloadUrl = window.URL.createObjectURL(blob);
        const link = document.createElement('a');
        link.href = downloadUrl;

        // This assumes you're fine with the default filename, or you could set a specific name
        link.download = 'downloadedImage.jpg';
        document.body.appendChild(link); // Append to the document
        link.click(); // Simulate click to trigger download

        document.body.removeChild(link); // Clean up
        window.URL.revokeObjectURL(downloadUrl); // Clean up the object URL
    } catch (error) {
        console.error('Download error:', error);
        alert('An error occurred while downloading the image');
    }
}


    </script>

    <script>
        function shareImage() {
    const imageUrl = document.getElementById('expandedImageModalContent').src;
    if (navigator.share) {
        navigator.share({
            title: 'Mood Waves Image', // Title of the share
            text: 'Check out this image from Mood Waves!', // Text to accompany the image link
            url: imageUrl // URL to share
        }).then(() => console.log('Successful share'))
        .catch((error) => console.log('Error sharing', error));
    } else {
        // Fallback for browsers that do not support the Web Share API
        console.log('Web Share API not supported in this browser.');
        alert('Sharing not supported in this browser. Please manually copy the image URL.');
    }
}

    </script>
</body>
</html>

