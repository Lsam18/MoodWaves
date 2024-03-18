<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - Mood Waves</title>
    <link rel="stylesheet" href="CSS/navbar.css" />
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="CSS/mainstyle.css" />
    <link rel="stylesheet" href="CSS/settings.css" />
    
</head>
<body>
    
    <a href="createpage.php" class="back-arrow">
        <i class="fas fa-arrow-left"></i>
    </a>
    <form class="edit-profile-form">
        <h2>Edit Profile</h2>
        <div class="form-group">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" name="first-name" value="John" readonly>
            <button type="button" class="edit-btn" onclick="makeEditable('first-name')">Edit</button>
        </div>
        <div class="form-group">
            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" name="last-name" value="Doe" readonly>
            <button type="button" class="edit-btn" onclick="makeEditable('last-name')">Edit</button>
        </div>
        <div class="form-group">
            <button type="button" class="change-pwd-btn" onclick="toggleChangePassword()">Change Password</button>
            <div id="password-fields" style="display:none;">
                <label for="current-password">Current Password</label>
                <input type="password" id="current-password" name="current-password">
                <label for="new-password">New Password</label>
                <input type="password" id="new-password" name="new-password">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="save-btn">Save Changes</button>
        </div>
        <div class="form-group">
            <button type="button" class="delete-btn">Delete Account</button>
        </div>
    </form>

    <script src="JS/editprofile.js"></script>
</body>
</html>