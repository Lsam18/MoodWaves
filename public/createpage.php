<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'includes/config.php';
if (isset ($_POST["submit"])) {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $pw = $_POST["pw"];
  $pw2 = $_POST["pw2"]; // Add missing variable declaration for $pw2


  if ($pw == $pw2) {
    $username = $_POST["username"]; 
    $query = "INSERT INTO users VALUES('$username', '$email', '$pw')";
    mysqli_query($conn, $query);
    echo "<script> alert ('Registration successful!'); </script>"; // Fix typo in success message
} else {
    echo "<script> alert ('Passwords do not match!');</script>"; // Fix typo in error message
}
}
?>

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
            margin: 15px 38px;
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
            margin: 10px;
            cursor: pointer;
            transition: transform 0.3s ease;
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
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-top: 4px solid #333;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            animation: spin 1s linear infinite;
            margin: 0 auto;
            margin-top: 20px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="ellipse-32"></div>

    <div class="navbar">
        <a href="loginPage.php">Sign up/Login</a>
        <a href="explore.html">Explore</a>
        <a href="createpage.php">Create</a>
        <div class="dropdown">
            <button class="dropbtn">More <i class="fas fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="#">Profile</a>
                <a href="#">About Us</a>
                <a href="contact.html">Contact</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Help/FAQ</a>
            </div>
        </div>
        <a href="#">Home</a>
        <img src="Images/logo.png" alt="Mood Waves" style="display: block; width: 300px; margin: 20px 620px; margin-top: 130px;">
    </div>
    <div class="welcome-to-mood-waves" style="margin-right: -200px;">WELCOME TO MOOD WAVES!</div>

    <!-- Side menu -->
    <div class="side-menu">
        <div class="user-profile">
            <img src="Images/carousel2.jpeg" alt="Profile Picture">
            <h3><?php echo isset ($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?></h3>
        </div>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="#"><i class="fas fa-heart"></i> Liked Images</a></li>
            <li><a href="#"><i class="fas fa-cogs"></i> Customization</a></li>
            <li><a href="#"><i class="fas fa-image"></i> My Images</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
        <button class="new-chat-btn">
            <i class="fas fa-plus"></i> New Chat
        </button>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <div id="wrapper">
            <form id="paper">
                <textarea id="text" placeholder="How do you feel?" rows="3"></textarea>
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
        </div>
    </div>

    <script>
        function closeModal() {
            document.getElementById('expandedImageModal').style.display = 'none';
        }

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

                    // Check if image URLs are present in response
                    if (data.output_url) {
                        const images = Array.isArray(data.output_url) ? data.output_url : [data.output_url];

                        images.forEach((imageUrl, index) => {
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
                        });
                    } else {
                        throw new Error('Image URLs not found in response');
                    }
                } catch (error) {
                    console.error('Error generating image:', error);
                    alert('Error generating image. Please try again.');
                } finally {
                    // Hide loading spinner
                    loading.style.display = 'none';
                }
            });

            function openModal(imageUrl) {
                const modal = document.getElementById('expandedImageModal');
                const modalContent = document.getElementById('expandedImageModalContent');

                modalContent.src = imageUrl;
                modal.style.display = 'block';
            }
        });
    </script>
</body>
</html>
