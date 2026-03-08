<?php 
require_once 'data/blogs.php';
require_once 'data/destinations.php';

$currentPage = 'profile';
$pageTitle = 'Profile';
$additionalCSS = ['css/profile.css'];
$additionalJS = ['js/profile.js'];
include 'includes/header.php'; 

// Get blogs and destinations for saved posts
$allBlogs = getAllBlogs();
$allDestinations = getAllDestinations();
$blogArray = array_values($allBlogs);
$destArray = array_values($allDestinations);
?>

<div class="profile-container">
    <div class="profile-header">
        <img src="https://i.pinimg.com/736x/e8/7a/b0/e87ab0a15b2b65662020e614f7e05ef1.jpg" alt="Profile" class="profile-avatar">
        <div class="profile-info">
            <h1>Sarah Johnson</h1>
            <p class="username">@traveler_sarah</p>
            <p class="bio">Travel enthusiast exploring Siem Reap 🌏 | Discovering Cambodia's hidden gems 🇰🇭</p>
            <div class="profile-stats">
                <div class="stat">
                    <strong>12</strong>
                    <span>Saved Posts</span>
                </div>
                <div class="stat">
                    <strong>8</strong>
                    <span>Questions</span>
                </div>
                <div class="stat">
                    <strong>5</strong>
                    <span>Answered</span>
                </div>
            </div>
        </div>
        <a href="settings.php" class="btn btn-secondary edit-profile-btn">Settings</a>
    </div>
    
    <div class="profile-tabs">
        <button class="tab-btn active" data-tab="saved">Saved Posts</button>
        <button class="tab-btn" data-tab="questions">My Questions</button>
        <button class="tab-btn" data-tab="answers">Answers</button>
    </div>
    
    <div class="tab-content active" id="saved-tab">
        <div class="posts-grid">
            <a href="blog-detail.php?slug=<?php echo $blogArray[0]['slug']; ?>" class="grid-item">
                <img src="<?php echo $blogArray[0]['image']; ?>" alt="<?php echo $blogArray[0]['title']; ?>">
                <div class="grid-overlay">
                    <span><i class="fas fa-bookmark"></i> Saved</span>
                </div>
            </a>
            <a href="destination-detail.php?slug=<?php echo $destArray[0]['slug']; ?>" class="grid-item">
                <img src="<?php echo $destArray[0]['image']; ?>" alt="<?php echo $destArray[0]['name']; ?>">
                <div class="grid-overlay">
                    <span><i class="fas fa-bookmark"></i> Saved</span>
                </div>
            </a>
            <a href="destination-detail.php?slug=<?php echo $destArray[2]['slug']; ?>" class="grid-item">
                <img src="<?php echo $destArray[2]['image']; ?>" alt="<?php echo $destArray[2]['name']; ?>">
                <div class="grid-overlay">
                    <span><i class="fas fa-bookmark"></i> Saved</span>
                </div>
            </a>
            <a href="blog-detail.php?slug=<?php echo $blogArray[1]['slug']; ?>" class="grid-item">
                <img src="<?php echo $blogArray[1]['image']; ?>" alt="<?php echo $blogArray[1]['title']; ?>">
                <div class="grid-overlay">
                    <span><i class="fas fa-bookmark"></i> Saved</span>
                </div>
            </a>
        </div>
    </div>
    
    <div class="tab-content" id="questions-tab">
        <div class="questions-list">
            <div class="question-card">
                <div class="question-card-header">
                    <span class="status-badge answered">Answered</span>
                    <span class="time">2 days ago</span>
                </div>
                <p class="question-title">What's the best time to visit Pub Street?</p>
                <p class="question-post">On: <?php echo $blogArray[0]['title']; ?></p>
                <a href="blog-detail.php?slug=<?php echo $blogArray[0]['slug']; ?>" class="view-link">View Answer →</a>
            </div>
            
            <div class="question-card">
                <div class="question-card-header">
                    <span class="status-badge pending">Pending</span>
                    <span class="time">5 hours ago</span>
                </div>
                <p class="question-title">Are there vegetarian options at Pub Street restaurants?</p>
                <p class="question-post">On: <?php echo $blogArray[0]['title']; ?></p>
            </div>
            
            <div class="question-card">
                <div class="question-card-header">
                    <span class="status-badge answered">Answered</span>
                    <span class="time">1 week ago</span>
                </div>
                <p class="question-title">What camera settings work best for sunrise photography?</p>
                <p class="question-post">On: <?php echo $blogArray[1]['title']; ?></p>
                <a href="blog-detail.php?slug=<?php echo $blogArray[1]['slug']; ?>" class="view-link">View Answer →</a>
            </div>
        </div>
    </div>
    
    <div class="tab-content" id="answers-tab">
        <div class="answers-list">
            <div class="answer-card">
                <div class="answer-header">
                    <img src="https://i.pinimg.com/736x/e8/7a/b0/e87ab0a15b2b65662020e614f7e05ef1.jpg" alt="Admin" class="avatar">
                    <div>
                        <strong>Siem Reap Travel Guide</strong>
                        <span class="time">1 day ago</span>
                    </div>
                </div>
                <p class="your-question">Your question: "What's the best time to visit Pub Street?"</p>
                <p class="admin-answer">Great question! Pub Street comes alive around 6 PM when restaurants open for dinner. Peak hours are 9 PM to midnight for the full party atmosphere. If you prefer a quieter vibe, arrive around 6-7 PM for dinner.</p>
                <a href="blog-detail.php?slug=<?php echo $blogArray[0]['slug']; ?>" class="view-link">View Full Post →</a>
            </div>
            
            <div class="answer-card">
                <div class="answer-header">
                    <img src="https://i.pinimg.com/736x/e8/7a/b0/e87ab0a15b2b65662020e614f7e05ef1.jpg" alt="Admin" class="avatar">
                    <div>
                        <strong>Siem Reap Travel Guide</strong>
                        <span class="time">1 week ago</span>
                    </div>
                </div>
                <p class="your-question">Your question: "What camera settings work best for sunrise photography?"</p>
                <p class="admin-answer">For Angkor Wat sunrise, use ISO 100-400, aperture f/8-f/11 for sharp landscapes, and shoot in RAW format. Bring a tripod for low-light situations. The golden hour provides the best lighting!</p>
                <a href="blog-detail.php?slug=<?php echo $blogArray[1]['slug']; ?>" class="view-link">View Full Post →</a>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
