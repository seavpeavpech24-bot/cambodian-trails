<?php 
$currentPage = 'profile';
$pageTitle = 'Settings';
$additionalCSS = ['css/settings.css'];
$additionalJS = ['js/settings.js'];
include 'includes/header.php'; 
?>

<div class="settings-container">
    <div class="settings-header">
        <h1>Settings</h1>
        <p>Manage your account preferences</p>
    </div>
    
    <div class="settings-content">
        <div class="settings-sidebar">
            <button class="settings-tab active" data-tab="profile">
                <i class="fas fa-user"></i>
                <span>Profile</span>
            </button>
            <button class="settings-tab" data-tab="account">
                <i class="fas fa-cog"></i>
                <span>Account</span>
            </button>
            <button class="settings-tab" data-tab="notifications">
                <i class="fas fa-bell"></i>
                <span>Notifications</span>
            </button>
            <button class="settings-tab" data-tab="privacy">
                <i class="fas fa-lock"></i>
                <span>Privacy</span>
            </button>
        </div>
        
        <div class="settings-panels">
            <!-- Profile Settings -->
            <div class="settings-panel active" id="profile-panel">
                <h2>Profile Information</h2>
                
                <div class="profile-photo-section">
                    <img src="https://via.placeholder.com/120" alt="Profile" class="profile-photo">
                    <div>
                        <button class="btn btn-secondary">Change Photo</button>
                        <p class="help-text">JPG, PNG or GIF. Max size 2MB</p>
                    </div>
                </div>
                
                <form class="settings-form">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" value="Sarah Johnson" placeholder="Enter your name">
                    </div>
                    
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" value="traveler_sarah" placeholder="Enter username">
                    </div>
                    
                    <div class="form-group">
                        <label>Bio</label>
                        <textarea rows="3" placeholder="Tell us about yourself">Travel enthusiast exploring Southeast Asia 🌏 | Currently in Cambodia 🇰🇭</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" value="Phnom Penh, Cambodia" placeholder="Your location">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
            
            <!-- Account Settings -->
            <div class="settings-panel" id="account-panel">
                <h2>Account Settings</h2>
                
                <form class="settings-form">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" value="sarah@example.com" placeholder="Enter email" disabled>
                    </div>
                    
                    <div class="form-group">
                        <label>Current Password</label>
                        <input type="password" placeholder="Enter current password">
                    </div>
                    
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" placeholder="Enter new password">
                    </div>
                    
                    <div class="form-group">
                        <label>Confirm New Password</label>
                        <input type="password" placeholder="Confirm new password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update Password</button>
                </form>
                
                <div class="danger-zone">
                    <h3>Danger Zone</h3>
                    <p>Once you delete your account, there is no going back.</p>
                    <button class="btn btn-danger">Delete Account</button>
                </div>
            </div>
            
            <!-- Notification Settings -->
            <div class="settings-panel" id="notifications-panel">
                <h2>Notification Preferences</h2>
                
                <div class="settings-form">
                    <div class="toggle-group">
                        <div class="toggle-item">
                            <div>
                                <strong>Email Notifications</strong>
                                <p>Receive email updates about your activity</p>
                            </div>
                            <label class="toggle">
                                <input type="checkbox" checked>
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                        
                        <div class="toggle-item">
                            <div>
                                <strong>Question Answers</strong>
                                <p>Get notified when your questions are answered</p>
                            </div>
                            <label class="toggle">
                                <input type="checkbox" checked>
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                        
                        <div class="toggle-item">
                            <div>
                                <strong>New Posts</strong>
                                <p>Get notified about new posts from Cambodia Travel Guide</p>
                            </div>
                            <label class="toggle">
                                <input type="checkbox">
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary">Save Preferences</button>
                </div>
            </div>
            
            <!-- Privacy Settings -->
            <div class="settings-panel" id="privacy-panel">
                <h2>Privacy Settings</h2>
                
                <div class="settings-form">
                    <div class="toggle-group">
                        <div class="toggle-item">
                            <div>
                                <strong>Public Profile</strong>
                                <p>Make your profile visible to other users</p>
                            </div>
                            <label class="toggle">
                                <input type="checkbox" checked>
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                        
                        <div class="toggle-item">
                            <div>
                                <strong>Show Saved Posts</strong>
                                <p>Allow others to see your saved posts</p>
                            </div>
                            <label class="toggle">
                                <input type="checkbox">
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                        
                        <div class="toggle-item">
                            <div>
                                <strong>Show Activity</strong>
                                <p>Display your recent activity on your profile</p>
                            </div>
                            <label class="toggle">
                                <input type="checkbox" checked>
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary">Save Settings</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
