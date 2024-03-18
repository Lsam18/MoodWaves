<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore - Moood Waves</title>
    <link rel="stylesheet" href="CSS/navbar.css" />
    <link rel="stylesheet" href="CSS/explore.css" />
    <link rel="stylesheet" href="CSS/mainstyle.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.1/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="CSS/footer.css"/>
    <style>
        /* Add this to your existing CSS file or create a new one */

        /* Expanded Image Info */
        .expanded-image-info {
    position: absolute;
    top: 50%;
    right: 10px; /* Adjust the right spacing as needed */
    transform: translateY(-50%);
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.8);
    border-radius: 10px;
    display: flex;
    flex-direction: column; /* Display vertically */
    gap: 10px;
    z-index: 9999;
    max-width: 300px; /* Set max width as needed */
}

.profile-info-expanded {
    display: flex;
    align-items: center;
}

.profile-info-expanded img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 15px;
}

.profile-details {
    display: flex;
    flex-direction: column;
}

.username-expanded {
    color: #ffffff;
    font-weight: bold;
    font-size: 18px;
}

.follow-btn {
    background-color: #7437ee;
    color: #ffffff;
    border: none;
    border-radius: 20px;
    padding: 8px 16px;
    margin-top: 5px;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
}

.follow-btn i {
    margin-right: 5px;
}

.image-actions {
    display: flex;
    flex-direction: column; /* Align buttons vertically */
    gap: 10px;
    margin-top: auto; /* Pushes the buttons to the bottom */
}

.download-btn,
.share-btn {
    background-color: #7437ee;
    color: #ffffff;
    border: none;
    border-radius: 20px;
    padding: 8px 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
}

.download-btn i,
.share-btn i {
    margin-right: 5px;
}

.caption {
    color: #ffffff;
    font-size: 16px;
    line-height: 1.5;
}


        /* Hover Effects for Buttons */
        .follow-btn:hover,
        .download-btn:hover,
        .share-btn:hover {
            background-color: #400468;
        }

        /* Adjustments for Close Button */
        .close-button {
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
            font-size: 24px;
            cursor: pointer;
            z-index: 9999;
        }
    </style>
</head>
<body>
    <div class="ellipse-32"></div>

    <div class="navbar">
        <a href="loginPage.php">Sign up/Login</a>
        <a href="#">Explore</a>
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
        <a href="index.php">Home</a>
</div>
        <img src="Images/logo.png" alt="Mood Waves" class="logo" style="width: 300px; display: block; margin-top: 14px; margin-left: 50px;"/>
    </div>

    <div class="explore">EXPLORE</div>

    <div class="search-container">
        <input type="text" placeholder="Search...">
        <button type="submit"><i class="fas fa-search"></i></button>
    </div>

    <div class="filter-container">
        <div class="filter">
            <label for="trending">Trending:</label>
            <select id="trending">
                <option value="trending">Trending</option>
                <option value="featured">Featured</option>
                <option value="random">Random</option>
                <option value="new">New</option>
            </select>
        </div>
        <div class="filter">
            <label for="categories">Categories:</label>
            <select id="categories">
                <option value="lonely">Lonely</option>
                <option value="happy">Happy</option>
                <option value="excited">Excited</option>
                
                <!-- Add more categories as needed -->
            </select>
        </div>
    </div>

    <!-- Explore Section -->
    <div class="explore-section">
        <!-- Card 1 -->
        <div class="card">
            <a href="#" class="expand-image">
                <div class="profile-info">
                    <img src="Images/carousel 1.jpeg" alt="Profile Picture">
                    <span class="username">username</span>
                </div>
                <img src="Images/carousel2.jpeg" alt="Sample Image" class="main-image">
                <div class="overlay">
                    <div class="overlay-content">
                        <i class="far fa-heart"></i> 120
                        <i class="far fa-comment comment-icon"></i> 25
                        <i class="fas fa-share"></i> Share
                    </div>
                    <div class="view-text">View</div>
                </div>
            </a>
        </div>

        <!-- Card 2 -->
        <div class="card">
            <a href="#" class="expand-image">
                <div class="profile-info">
                    <img src="Images/carousel2.jpeg" alt="Profile Picture">
                    <span class="username">username</span>
                </div>
                <img src="Images/carousel 1.jpeg" alt="Sample Image" class="main-image">
                <div class="overlay">
                    <div class="overlay-content">
                        <i class="far fa-heart"></i> 98
                        <i class="far fa-comment comment-icon"></i> 10
                        <i class="fas fa-share"></i> Share
                    </div>
                    <div class="view-text">View</div>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="#" class="expand-image">
                <div class="profile-info">
                    <img src="Images/carousel2.jpeg" alt="Profile Picture">
                    <span class="username">username</span>
                </div>
                <img src="Images/carousel 1.jpeg" alt="Sample Image" class="main-image">
                <div class="overlay">
                    <div class="overlay-content">
                        <i class="far fa-heart"></i> 98
                        <i class="far fa-comment comment-icon"></i> 10
                        <i class="fas fa-share"></i> Share
                    </div>
                    <div class="view-text">View</div>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="#" class="expand-image">
                <div class="profile-info">
                    <img src="Images/carousel2.jpeg" alt="Profile Picture">
                    <span class="username">username</span>
                </div>
                <img src="Images/carousel 1.jpeg" alt="Sample Image" class="main-image">
                <div class="overlay">
                    <div class="overlay-content">
                        <i class="far fa-heart"></i> 98
                        <i class="far fa-comment comment-icon"></i> 10
                        <i class="fas fa-share"></i> Share
                    </div>
                    <div class="view-text">View</div>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="#" class="expand-image">
                <div class="profile-info">
                    <img src="Images/carousel2.jpeg" alt="Profile Picture">
                    <span class="username">username</span>
                </div>
                <img src="Images/carousel 1.jpeg" alt="Sample Image" class="main-image">
                <div class="overlay">
                    <div class="overlay-content">
                        <i class="far fa-heart"></i> 98
                        <i class="far fa-comment comment-icon"></i> 10
                        <i class="fas fa-share"></i> Share
                    </div>
                    <div class="view-text">View</div>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="#" class="expand-image">
                <div class="profile-info">
                    <img src="Images/carousel2.jpeg" alt="Profile Picture">
                    <span class="username">username</span>
                </div>
                <img src="Images/carousel 1.jpeg" alt="Sample Image" class="main-image">
                <div class="overlay">
                    <div class="overlay-content">
                        <i class="far fa-heart"></i> 98
                        <i class="far fa-comment comment-icon"></i> 10
                        <i class="fas fa-share"></i> Share
                    </div>
                    <div class="view-text">View</div>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="#" class="expand-image">
                <div class="profile-info">
                    <img src="Images/carousel2.jpeg" alt="Profile Picture">
                    <span class="username">username</span>
                </div>
                <img src="Images/carousel 1.jpeg" alt="Sample Image" class="main-image">
                <div class="overlay">
                    <div class="overlay-content">
                        <i class="far fa-heart"></i> 98
                        <i class="far fa-comment comment-icon"></i> 10
                        <i class="fas fa-share"></i> Share
                    </div>
                    <div class="view-text">View</div>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="#" class="expand-image">
                <div class="profile-info">
                    <img src="Images/carousel2.jpeg" alt="Profile Picture">
                    <span class="username">username</span>
                </div>
                <img src="Images/carousel 1.jpeg" alt="Sample Image" class="main-image">
                <div class="overlay">
                    <div class="overlay-content">
                        <i class="far fa-heart"></i> 98
                        <i class="far fa-comment comment-icon"></i> 10
                        <i class="fas fa-share"></i> Share
                    </div>
                    <div class="view-text">View</div>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="#" class="expand-image">
                <div class="profile-info">
                    <img src="Images/carousel2.jpeg" alt="Profile Picture">
                    <span class="username">username</span>
                </div>
                <img src="Images/carousel 1.jpeg" alt="Sample Image" class="main-image">
                <div class="overlay">
                    <div class="overlay-content">
                        <i class="far fa-heart"></i> 98
                        <i class="far fa-comment comment-icon"></i> 10
                        <i class="fas fa-share"></i> Share
                    </div>
                    <div class="view-text">View</div>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="#" class="expand-image">
                <div class="profile-info">
                    <img src="Images/carousel2.jpeg" alt="Profile Picture">
                    <span class="username">username</span>
                </div>
                <img src="Images/carousel 1.jpeg" alt="Sample Image" class="main-image">
                <div class="overlay">
                    <div class="overlay-content">
                        <i class="far fa-heart"></i> 98
                        <i class="far fa-comment comment-icon"></i> 10
                        <i class="fas fa-share"></i> Share
                    </div>
                    <div class="view-text">View</div>
                </div>
            </a>
        </div>
        <!-- Add more cards as needed -->
    </div>

    <!-- Comment Section -->
    <div class="comment-section">
        <div class="comments">
            <!-- Example Comment 1 -->
            <div class="comment">
                <img src="Images/carousel2.jpeg" alt="User 1">
                <div class="comment-content">
                    <div class="username">User1</div>
                    <div class="text">This is an example comment. Nice post!</div>
                </div>
            </div>

            <!-- Example Comment 2 -->
            <div class="comment">
                <img src="Images/carousel 1.jpeg" alt="User 2">
                <div class="comment-content">
                    <div class="username">User2</div>
                    <div class="text">Great photo! 📸</div>
                </div>
            </div>

            <!-- Add more comments as needed -->
        </div>
        
        <div class="close-comment-section">
            <i class="fas fa-times close-icon"></i>
        </div>
        <!-- Comment Input -->
        <div class="comment-input">
            <input type="text" placeholder="Add a comment...">
            <button>Post</button>
        </div>

        
    </div>

    <div class="expanded-image-container">
        <div class="close-button">&times;</div>
        <img src="" alt="Expanded Image" class="expanded-image">
        <div class="expanded-image-info">
            <div class="profile-info-expanded">
                <img src="Images/carousel2.jpeg" alt="Profile Picture">
                <div class="profile-details">
                    <div class="username-expanded">Username</div>
                    <button class="follow-btn"><i class='bx bx-user-plus'></i> Follow</button>
                </div>
            </div>
            <div class="image-actions">
                <button class="download-btn"><i class='bx bxs-download'></i> Download</button>
                <button class="share-btn"><i class='bx bxs-share-alt'></i> Share</button>
            </div>
            <div class="caption">
                Caption for the image goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis neque et varius. 
            </div>
        </div>
    </div>

    <div class="footer">
        <img src="Images/logo.png" alt="Mood Waves" class="mood-waves" />
        <div class="copyright-2024-by-mood-waves-all-rights-reserved">
            Copyright © 2024 by Mood Waves | All Rights Reserved
        </div>
        <div class="social-links">
            <a href="https://github.com/yourgithubusername" target="_blank" class="icon-link">
                <i class="fab fa-github"></i> GitHub
            </a>
            <a href="mailto:youremail@example.com" class="icon-link">
                <i class="far fa-envelope"></i> Email
            </a>
        </div>
    </div>

    <script src="JS/explore.js"></script>
</body>
</html>
